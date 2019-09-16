<?php

namespace App\Http\Controllers;

use App\Job;
use App\Faq;
use App\Home;
use App\Team;
use App\Rate;
use App\Pages;
use App\About;
use App\Branch;
use App\History;
use App\Navmenu;
use App\Strategy;
use App\Download;
use App\Navigation;
//use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{

    public function fetchLatestPricesById(Request $request) {
        //return 'found fetch';exit;

        $latest_id = $request['last_id'];
        $curr_latest_id = (intval($latest_id) > 0 ? $latest_id : 0);
        $items = DB::table('histories')
                ->where('id', '>=', $curr_latest_id)
                ->orderBy('id', 'desc')
                ->first();

        $res = (array) $items;
        return json_encode($res);
    }
    
    

    public function index()
    {
        $view = '';
        $page = null;
        $homes = Home::first();
        //$setting = Setting::first();
        if (\Request::is('about')) {
            $about = About::first();
            $view = 'pages.about.about';
            $page = Pages::where("page","About")->first();
        }elseif (\Request::is('about/team')) { 
            $view = 'pages.about.team';
            $page = Pages::where("page","Team")->first();            
            $directors = Team::where("category","Director")->get();
            $management = Team::where("category","Management")->get();
        }elseif (\Request::is('about/management')) { 
            $view = 'pages.about.management';
            $page = Pages::where("page","Team")->first();            
            $directors = Team::where("category","Director")->get();
            $management = Team::where("category","Management")->get();
        }elseif (\Request::is('pension/schemes')) { 
            $schemes = Strategy::first();
            $view = 'pages.services.schemes';
            $page = Pages::where("page","Pension Schemes")->first();
        }elseif (\Request::is('investment/strategy')) { 
            $strategy = Strategy::first();
            $view = 'pages.investment.strategy';
            $page = Pages::where("page","Investment Strategy")->first();
        }elseif (\Request::is('investment/portfolio')) { 
            $view = 'pages.investment.portfolio';
            $page = Pages::where("page","Investment Portfolio")->first();
        }elseif (\Request::is('resources/downloads')) { 
            $view = 'pages.resources.downloads';
            $page = Pages::where("page","Downloads")->first();
            $forms = Download::where("category","Forms")->get();
            $letters = Download::where("category","Letters")->get();
            $multifund = Download::where("category","Multifund")->get();
            $guidelines = Download::where("category","Guidelines")->get();
            $newsletters = Download::where("category","Newsletters")->get();
            $recapture = Download::where("category","Data Re-capture")->get();
            $checklist = Download::where("category","Checklist Requirement")->get();
            $corporate_gov = Download::where("category","Corporate Governance Statement")->get();
        }elseif (\Request::is('resources/reports')) { 
            $view = 'pages.resources.reports';
            $page = Pages::where("page","Financial Report")->first();
            $reports = Download::where("category","Financial Reports")->get();
            $statements = Download::where("category","Financial Statement")->get();
            $reportsrsa = Download::where("category","Financial Report RSA")->get();
            $fundsreport = Download::where("category","Financial Funds Statements")->get();
        }elseif (\Request::is('resources/prices')) { 
            $prices = History::orderBy('report_date', 'ASC')->get(); 
            $view = 'pages.resources.prices';
            $page = Pages::where("page","Unit Price")->first();
        }elseif (\Request::is('resources/calculator')) { 
            $view = 'pages.resources.calculator';
            $page = Pages::where("page","Pension Calculator")->first();
        }elseif (\Request::is('resources/rate')) { 
            $view = 'pages.resources.rates';
            $rsa = Rate::where("type","RSA")->orderBy('date', 'desc')->get();
            $retiree = Rate::where("type","Retiree")->orderBy('date', 'desc')->get();
            $page = Pages::where("page","Rates")->first();
        }elseif (\Request::is('careers')) { 
            $view = 'pages.career.careers';
            $jobs = Job::where("status","Open")->get();
            $page = Pages::where("page","Careers")->first();
        }elseif (\Request::is('contact')) { 
            $view = 'pages.contact.contact';
            $page = Pages::where("page","Contact")->first();
        }elseif (\Request::is('contact/centers')) { 
            $view = 'pages.contact.centers';
            $page = Pages::where("page","Branches")->first();
            $branches = Branch::where("display",1)->get();
        }elseif (\Request::is('contact/faq')) { 
            $view = 'pages.contact.faq';
            $page = Pages::where("page","FAQ")->first();
            $general = Faq::where("category",'General FAQs')->get();
            $multifunds = Faq::where("category",'Multi Funds')->get();
            $pension = Faq::where("category",'Micro Pension Funds')->get();
            $savings = Faq::where("category",'My Retirement Savings Account')->get();
            $retirement = Faq::where("category",'About My Retirement')->get();
        }else{
            $view = 'pages.about.about';
            $page = Pages::where("page","About")->first();
        }
        $pages = Pages::all();        
        $navigation = Navigation::all();
        foreach($navigation as $nav){
            if($nav->sub) $nav->menu = Navmenu::where("top",$nav->id)->get();
        }
        return view($view, compact('page','navigation','homes','setting','directors','management','about','schemes','strategy','forms','letters','multifund','guidelines','newsletters','recapture','checklist','corporate_gov','reports','statements','reportsrsa','fundsreport','jobs','branches','general','savings','retirement','multifunds','pension','prices','rsa','retiree'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $view = '';
        $page = null;
        unset($_POST["_token"]);
        if (\Request::is('/')) {
            extract($_POST);
            if($request->hasFile('image')){
                $image = $request->file('image');
                $upload = time().'_'.$type.'_testimony_image.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/testimonials/',$image,$upload);
                $_POST['image'] = $upload;
            }
            $review = DB::table('testimonials')->insert($_POST);
            return back()->with('success','Data created successfully!');
        }elseif(\Request::is('resources/calculator')) { 
            extract($_POST);
            
            $view = 'pages.resources.calculator';
            $page = Pages::where("page","Pension Calculator")->first();
            if (is_numeric($income) && is_numeric($contribution) && is_numeric($age) && is_numeric($return)) {
                $return = $return / 100;
                $totalPackage = ($contribution * $age * 12) + ($income * pow((1 + $return), $age));
    
                $result['total_package'] = number_format($totalPackage, 2);
    
                if ($totalPackage > 550000) {
                    $result['qualify_for_lumpsum'] = 'Yes';
                    $result['lumpsum'] = number_format(($totalPackage * .25), 2);
                    $result['qualify_for_programmed_withdrawal'] = 'Yes';
                    $result['monthly_pension'] = number_format(((0.75 * $totalPackage) / 120), 2);
                } else {
                    $result['qualify_for_lumpsum'] = 'No';
                    $result['lumpsum'] = $totalPackage;
                    $result['qualify_for_programmed_withdrawal'] = 'No';
                }
            }
        }elseif (\Request::is('careers')) {
            if(!$request->hasFile('cv')) return back()->with('error','Please upload your CV')->withInput(Input::all());
            $cv = $request->file('cv');
            $curriculum = time().'_'.strtolower($request->first_name.'_'.$request->last_name.'_curriculum_vitae.'.$cv->getClientOriginalExtension());
            Storage::disk('public')->putFileAs('uploads/careers/',$cv,$curriculum);
            $coverletter = "";
            if($request->hasFile('letter')){
                $letter = $request->file('letter');
                $coverletter = time().'_'.strtolower($request->first_name.'_'.$request->last_name.'_cover_letter.'.$letter->getClientOriginalExtension());
                Storage::disk('public')->putFileAs('uploads/careers/',$letter,$coverletter);
            }
            
            // $curriculum = time().'_'.strtolower($first_name.'_'.$last_name.'_'.str_replace(' ','_',$cv->getClientOriginalName()));
            // $coverletter = time().'_'.strtolower($first_name.'_'.$last_name.'_'.str_replace(' ','_',$letter->getClientOriginalName()));
            if(!is_numeric($request->salary)){
                return back()->with('error','The Salary field can only accept numeric value.')->withInput(Input::all());
            }

            $this->validate($request, [
                'first_name' => 'required|string|max:255', 
                'last_name' => 'required|string|max:255',            
                'email' => 'required|string|max:255|',            
                'mobile' => 'required|size:11|regex:/[0-9]{11}/',            
                'birthday' => 'required|string|max:20',            
                'state' => 'required|string|max:50',            
                'position' => 'required|string|max:255',            
                'salary' => 'required|numeric|between:50.00,50000000.00',            
                'resumption' => 'required|string|max:20',
            ]);
            
            $_POST["cv"] = $curriculum;
            $_POST["letter"] = $coverletter;
            $_POST["birthday"] = date("Y-m-d",strtotime($_POST["birthday"]));
            $_POST["resumption"] = date("Y-m-d",strtotime($_POST["resumption"]));
            $_POST["created_at"] = date('Y-m-d H:m:s');
            $_POST["updated_at"] = date('Y-m-d H:m:s');
            $data = DB::table('applications')->insert($_POST);
            if(!$data) return back()->with('error','Error submitting your application, please try again.')->withInput(Input::all());;
            return back()->with('success','Thank you, your Application has been received successfully');
        }elseif (\Request::is('contact')) {

            
            unset($_POST["g-recaptcha-response"]);
            
            $this->validate($request, [
                'name' => 'required|string|max:255',            
                'email' => 'required|string|max:255|',            
                'mobile' => 'required|size:11|regex:/[0-9]{11}/',            
                'pin' => 'required|string|max:15',            
                'employer' => 'required|string|max:255',            
                'subject' => 'required|string|max:255',            
                'type' => 'required|string|max:255',            
                'message' => 'required|string',
            ]);

            $_POST["created_at"] = date('Y-m-d H:m:s');
            $_POST["updated_at"] = date('Y-m-d H:m:s');
            $data = DB::table('contacts')->insert($_POST);
            return back()->with('success','Thank you for contacting us, you will get a response from us within 24 hours!');
        }
        $navigation = Navigation::all();
        foreach($navigation as $nav){
            if($nav->sub) $nav->menu = Navmenu::where("top",$nav->id)->get();
        }
        return view($view, compact('page','navigation','jobs','result','application','contact'));
    }

}
