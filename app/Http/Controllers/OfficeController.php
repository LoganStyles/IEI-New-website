<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Job;
use App\Faq;
use App\Home;
use App\Team;
use App\Pages;
use App\About;
use App\Branch;
use App\Awards;
use App\History;
use App\Contact;
use App\Navmenu;
use App\Strategy;
use App\Download;
use App\Services;
use App\Resources;
use App\Navigation;
use App\Application;
use App\Testimonials;
//use App\Setting;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class OfficeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = '';
        $pages = null;
        $resources = null;
        //$setting = Setting::first();
        if (\Request::is('home')) {
            //return redirect()->route('office.home');
            return redirect()->back();
        }elseif (\Request::is('office')) {
            $pages = Pages::all();
            $view = 'office.home';
        }elseif (\Request::is('office/menu')) { 
            $pages = Navigation::all();
            foreach($pages as $nav){
                if($nav->sub) $nav->menu = Navmenu::where('top',$nav->id)->get();
            }
            $view = 'office.menu.view';
        }elseif (\Request::is('office/menu/create')) {
            $pages = Navigation::all();
            foreach($pages as $nav){
                if($nav->sub) $nav->menu = Navmenu::where('top',$nav->id)->get();
            }
           $view = 'office.menu.create';
        }elseif (\Request::is('office/pages')) { 
            $pages = Pages::all();
            $view = 'office.pages.view';
        }elseif (\Request::is('office/resources')) { 
            $resources = Resources::all();
            $view = 'office.resources.view';
        }elseif (\Request::is('office/accounts')) { 
            $users = User::all();
            $pages = Pages::all();
            $view = 'office.users.users';
        }elseif (\Request::is('office/register')) { 
            $pages = Pages::all();
            $view = 'auth.register';
        }elseif (\Request::is('office/resources/*')) {
            $view = 'office.resources.resource.create';
        }else{
            $pages = Pages::all();
            $view = 'office.default';
        }
        return view($view, compact('pages','users','resources'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function display($type,$id = 0)
    {
        $selected = null;$parameters = null;
        if (\Request::is('office/resources/*/create')) {
            $view = 'office.resources.resource.create';
        }elseif (\Request::is('office/resources/*/modify/*')) {
            $view = 'office.resources.resource.modify';
            $table = '';
            if($type=='files'){
                $table = 'downloads';
            }elseif($type=='history'){
                $table = 'histories';
            }else{
                $table = $type;
            }
            $selected = DB::table($table)->find($id);
            if(!$selected){
                if($type=='applications'){
                    $resources = Application::all();
                }elseif($type=='awards'){
                    $resources = Awards::all();
                }elseif($type=='branches'){
                    $resources = Branch::all();
                }elseif($type=='contacts'){
                    $resources = Contact::all();
                }elseif($type=='files'){
                    $resources = Download::all();
                }elseif($type=='faqs'){
                    $resources = Faq::all();
                }elseif($type=='jobs'){
                    $resources = Job::all();
                }elseif($type=='resources'){
                    $resources = Resources::all();
                }elseif($type=='services'){
                    $resources = Services::all();
                }elseif($type=='teams'){
                    $resources = Team::all();
                }elseif($type=='testimonials'){
                    $resources = Testimonials::all();
                }elseif($type=='history'){
                    $resources = History::all();
                }
                $resource = Resources::where("type",$type)->first();
                return redirect()->route('office.resources.view', $type);
            }
        }elseif (\Request::is('office/menu/modify/*')) {
            $param = explode('::',$type);
            $type = $param[0];$table = $param[0];
            $view = 'office.menu.modify';
            $menu = Navigation::all();
            foreach($menu as $nav){
                if($nav->sub) $nav->menu = Navmenu::where('top',$nav->id)->get();
            }
            if($param[1]=="main"){
                $selected = Navigation::where("slug",$param[0])->get();
                $selected = $selected[0];
            }else{
                $selected = Navmenu::where("slug",$param[0])->get();
                $selected = $selected[0];
            }
        }
        $resource = Resources::where("type",$type)->first();
        return view($view, compact('resource','selected','menu','param'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function store(Request $request,$type="")
    {
        
        $view = '';
        $resource = null;
        unset($_POST["_token"]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $upload = time().'_'.$type.'_image.'.$image->getClientOriginalExtension();
            if($type=='awards'){
                $location = 'media/images/awards/';
            }elseif($type=='services'){
                $location = 'media/images/misc/';
            }elseif($type=='teams'){
                $location = 'media/images/team/';
            }elseif($type=='testimonials'){
                $location = 'media/images/testimonials/';
            }
            Storage::disk('public')->putFileAs($location,$image,$upload);
            $_POST['image'] = $upload;
        }
        if($request->hasFile('file')){
            $file = $request->file('file');
            $upload = time().'_'.$type.'_file.'.$file->getClientOriginalExtension();
            $location = (($type=='files')?'uploads/documents/'.strtolower(str_ireplace(" ","-",$_POST['category'])).'/':'');
            Storage::disk('public')->putFileAs($location,$file,$upload);
            $_POST['file'] = $upload;
            $_POST['size'] = $request->file('file')->getSize();;
        }
        if(isset($_POST['table'])) {
            $type = $_POST['table'];
            unset($_POST['table']);

            $this->validate($request, [
                'page' => 'required|string|max:255',            
                'slug' => 'required|string|max:255|unique:'.$type,
            ]);
        }
        if(isset($_POST['title']) && isset($_POST['personnel'])) {

            $this->validate($request, [
                'title' => 'required|string|max:255',
                'state' => 'required|string|max:255',  
                'personnel' => 'required|string|max:255',  
                'address' => 'required|string|max:255',  
                'mobile' => 'required|size:11|regex:/(01)[0-9]{9}/', 
                'phone' => 'required|size:11|regex:/(01)[0-9]{9}/'
            ]);
        }
        if(isset($_POST['title']) && isset($_POST['category'])) {
            // print_r($request->all());exit;

            $this->validate($request, [
                'title' => 'required|string|max:255',
                // 'description' => 'required|string',  
                'category' => 'required|string|max:255'
            ]);
        }
        if(isset($_POST['title']) && isset($_POST['award'])) {

            $this->validate($request, [
                'title' => 'required|string|max:255',
                'description' => 'required|string',  
                'award' => 'required|string|max:255'
            ]);
        }
        $_POST["created_at"] = date('Y-m-d H:m:s');
        $_POST["updated_at"] = date('Y-m-d H:m:s');
        if($type=='files') { 
            $type='downloads';
        }elseif($type=='downloads') { 
            $type = 'histories';
        }elseif($type=='rate') { 
            $type = 'rates';
        }
        $data = DB::table($type)->insert($_POST);
        return back()->with('success','Data created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function save(Request $request,$type="",$id=0)
    {
        
        $message = "";
        unset($_POST["_token"]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $upload = time().'_'.$type.'_image.'.$image->getClientOriginalExtension();
            if($type=='awards'){
                $location = 'media/images/awards/';
            }elseif($type=='services'){
                $location = 'media/images/misc/';
            }elseif($type=='teams'){
                $location = 'media/images/team/';
            }elseif($type=='testimonials'){
                $location = 'media/images/testimonials/';
            }
            //$location = (($type=='awards')?'media/images/awards/':($type=='services')?'media/images/misc/':($type=='teams')?'media/images/team/':($type=='testimonials')?'media/images/testimonials/':'');
            Storage::disk('public')->putFileAs($location,$image,$upload);
            $_POST['image'] = $upload;
        }
        if($request->hasFile('file')){
            
            $file = $request->file('file');
            $upload = time().'_'.$type.'_file.'.$file->getClientOriginalExtension();
            $location = (($type=='files')?'uploads/documents/'.strtolower(str_ireplace(" ","-",$_POST['category'])).'/':'');
            Storage::disk('public')->putFileAs($location,$file,$upload);
            $_POST['file'] = $upload;
            $_POST['size'] = $request->file('file')->getSize();
            
        }
        if(isset($_POST['table'])) {
            
            $param = explode('::',$type);
            $type = $_POST['table'];

            $this->validate($request, [
                'page' => 'required|string|max:255',            
                'slug' => 'required|string|max:255',
            ]);
        }
        
        $_POST["updated_at"] = date('Y-m-d H:m:s');

        if($type=='files') { 
            $type='downloads';
        }elseif($type=='downloads') { 
            $type = 'histories';
        }elseif($type=='rate') { 
            $type = 'rates';
        }
        
        if(isset($_POST['table'])) {    
                       
            unset($_POST['table']);
            $data = DB::table($type)->where('slug',$param[0])->update($_POST);
        }else{
            $data = DB::table($type)->where('id',$id)->update($_POST);
        }
        $message = 'Data saved successfully!';
        return back()->with('success',$message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($type)
    {
        $view = '';
        $resource = null;
        $resources = null;
        //$setting = Setting::first();
        if (\Request::is('office/resources/*')) {
            if($type=='applications'){
                $resources = Application::all();
            }elseif($type=='awards'){
                $resources = Awards::all();
            }elseif($type=='branches'){
                $resources = Branch::all();
            }elseif($type=='contacts'){
                $resources = Contact::all();
            }elseif($type=='files'){
                $resources = Download::all();
            }elseif($type=='faqs'){
                $resources = Faq::all();
            }elseif($type=='jobs'){
                $resources = Job::all();
            }elseif($type=='resources'){
                $resources = Resources::all();
            }elseif($type=='services'){
                $resources = Services::all();
            }elseif($type=='teams'){
                $resources = Team::all();
            }elseif($type=='testimonials'){
                $resources = Testimonials::all();
            }elseif($type=='history'){
                $resources = History::all();
            }
            $view = 'office.resources.resource.view';
            $resource = Resources::where("type",$type)->first();
        }
        return view($view, compact('resources','resource'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $view = '';
        $page = null;
        $pages = null;
        //$setting = Setting::first();
        if (\Request::is('office/pages/modify/home')) {
            $page = Home::first();
            $view = 'office.pages.home';
        }elseif (\Request::is('office/pages/modify/about')) { 
            $page = About::first();
            $view = 'office.pages.about';
        }elseif (\Request::is('office/pages/modify/strategy')) { 
            $page = Strategy::first();
            $view = 'office.pages.strategy';
        }elseif (\Request::is('office/pages/modify/schemes')) { 
            $page = Strategy::first();
            $view = 'office.pages.schemes';
        }elseif (\Request::is('office/pages/modify/*')) { 
            $pages = Pages::all();
            $page = Pages::find($id);
            $view = 'office.pages.modify';
        }elseif (\Request::is('office/resources/modify/*')) { 
            $pages = Pages::all();
            $view = 'office.pages.view';
        }elseif (\Request::is('office/accounts/modify/*')) { 
            $users = User::find($id);
            $pages = Pages::all();
            $view = 'office.users.users';
        }
        return view($view, compact('page','pages','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $view = '';
        $page = null;
        $pages = null;
        $homes = Home::first();
        unset($_POST["_token"]);
        //$setting = Setting::first();
        if (\Request::is('office/pages/modify/home')) {
            if($request->hasFile('image')){
                $image = $request->file('image');
                $upload = time().'_home_image.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/',$image,$upload);
                $_POST['image'] = $upload;
            }
            if($request->hasFile('slide_one_image')){
                $image = $request->file('slide_one_image');
                $upload = time().'_slide_one_image.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/slider/',$image,$upload);
                $_POST['slide_one_image'] = $upload;
            }
            if($request->hasFile('slide_two_image')){
                $image = $request->file('slide_two_image');
                $upload = time().'_slide_two_image.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/slider/',$image,$upload);
                $_POST['slide_two_image'] = $upload;
            }
            if($request->hasFile('slide_three_image')){
                $image = $request->file('slide_three_image');
                $upload = time().'_slide_three_image.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/slider/',$image,$upload);
                $_POST['slide_three_image'] = $upload;
            }
            if($request->hasFile('slide_four_image')){
                $image = $request->file('slide_four_image');
                $upload = time().'_slide_four_image.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/slider/',$image,$upload);
                $_POST['slide_four_image'] = $upload;
            }
            if($request->hasFile('slide_five_image')){
                $image = $request->file('slide_five_image');
                $upload = time().'_slide_five_image.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/slider/',$image,$upload);
                $_POST['slide_five_image'] = $upload;
            }
            $data = DB::table('homes')->where('id',1)->update($_POST);
            $page = Home::first();
            $view = 'office.pages.home';
            $message = 'Page saved successfully!';
        }elseif (\Request::is('office/pages/modify/about')) {
            if($request->hasFile('image')){
                $image = $request->file('image');
                $upload = time().'_about_image.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/',$image,$upload);
                $_POST['image'] = $upload;
            }
            if($request->hasFile('success_icon')){
                $image = $request->file('success_icon');
                $upload = time().'_success_icon.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/misc/images/',$image,$upload);
                $_POST['success_icon'] = $upload;
            }
            if($request->hasFile('feature_one_icon')){
                $image = $request->file('feature_one_icon');
                $upload = time().'_feature_one_icon.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/misc/images/',$image,$upload);
                $_POST['feature_one_icon'] = $upload;
            }
            if($request->hasFile('feature_two_icon')){
                $image = $request->file('feature_two_icon');
                $upload = time().'_feature_two_icon.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/misc/images/',$image,$upload);
                $_POST['feature_two_icon'] = $upload;
            }
            if($request->hasFile('feature_three_icon')){
                $image = $request->file('feature_three_icon');
                $upload = time().'_feature_three_icon.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/misc/images/',$image,$upload);
                $_POST['feature_three_icon'] = $upload;
            }
            if($request->hasFile('feature_four_icon')){
                $image = $request->file('feature_four_icon');
                $upload = time().'feature_four_icon.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/misc/images/',$image,$upload);
                $_POST['feature_four_icon'] = $upload;
            }
            if($request->hasFile('feature_five_icon')){
                $image = $request->file('feature_five_icon');
                $upload = time().'_feature_five_icon.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/misc/images/',$image,$upload);
                $_POST['feature_five_icon'] = $upload;
            }
            if($request->hasFile('feature_six_icon')){
                $image = $request->file('feature_six_icon');
                $upload = time().'feature_six_icon.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/misc/images/',$image,$upload);
                $_POST['feature_six_icon'] = $upload;
            }
            $data = DB::table('abouts')->where('id',1)->update($_POST);
            $page = About::first();
            $view = 'office.pages.about';
            $message = 'Page saved successfully!';
        }elseif (\Request::is('office/pages/modify/strategy')) {
            if($request->hasFile('image')){
                $image = $request->file('image');
                $upload = time().'_home_image.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/',$image,$upload);
                $_POST['image'] = $upload;
            }
            if($request->hasFile('selection_criteria_image')){
                $image = $request->file('selection_criteria_image');
                $upload = time().'_selection_criteria_image.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/',$image,$upload);
                $_POST['selection_criteria_image'] = $upload;
            }
            if($request->hasFile('service_scheme_image')){
                $image = $request->file('service_scheme_image');
                $upload = time().'_service_scheme_image.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/',$image,$upload);
                $_POST['service_scheme_image'] = $upload;
            }
            $data = DB::table('strategies')->where('id',1)->update($_POST);
            $page = Strategy::first();
            $view = 'office.pages.strategy';
            $message = 'Page saved successfully!';
        }elseif (\Request::is('office/pages/modify/*')) {            
            if($request->hasFile('breadcrumbs_background')){
                $image = $request->file('breadcrumbs_background');
                $upload = time().'_breadcrumbs_background.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/',$image,$upload);
                $_POST['breadcrumbs_background'] = $upload;
            }
            $data = DB::table('pages')->where('id',$id)->update($_POST);
            $pages = Pages::all();
            $page = Pages::find($id);
            $view = 'office.pages.modify';
            $message = 'Page saved successfully!';
        }elseif (\Request::is('office/resources/modify/*')) { 
            $pages = Pages::all();
            $view = 'office.pages.view';
        }elseif (\Request::is('office/accounts/modify/*')) { 
            $users = User::find($id);
            $pages = Pages::all();
            $view = 'office.users.users';
        }
        return back()->with('success',$message);
        return view($view, compact('page','pages','users'));
    }
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($type="",$id=0)
    {
        if (\Request::is('office/menu/delete/*')) {
            $param = explode('::',$type);
            if($param[1]=="main"){
                Navigation::where('slug',$param[0])->delete();
            }else{
                Navmenu::where('slug',$param[0])->delete();
            }
        }elseif (\Request::is('office/resources/*/delete/*')) {
            DB::table($type)->where('id',$id)->delete();
        }
        return back()->with('success','Data deleted successfully!');
    }

}
