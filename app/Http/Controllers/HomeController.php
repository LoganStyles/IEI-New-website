<?php

namespace App\Http\Controllers;

use App\Home;
use App\Works;
use App\Awards;
use App\Navmenu;
use App\Services;
use App\Navigation;
use App\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::first();
        $works = Works::all();
        $awards = Awards::all();
        $services = Services::all();
        $navigation = Navigation::all();
        $testimonials = Testimonials::all();        
        foreach($navigation as $nav){
            if($nav->sub) $nav->menu = Navmenu::where("top",$nav->id)->get();
        }
        return view('welcome', compact('navigation','homes','works','awards','services','testimonials'));
    }

    public function store(Request $request){
        unset($_POST["_token"]);
        if (\Request::is('/')) {
            //extract($_POST);            

            $this->validate($request, [
                'name' => 'required|string|max:255',            
                'email' => 'required|string|max:255',            
                'company' => 'required|string|max:255',            
                'testimony' => 'required|string', 
                'mobile' => 'required|size:11|regex:/[0-9]{11}/',
            ]);

            if($request->hasFile('image')){
                $image = $request->file('image');
                $upload = time().'_'.'_testimony_image.'.$image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('media/images/testimonials/',$image,$upload);
                $_POST['image'] = $upload;
            }
            $review = DB::table('testimonials')->insert($_POST);
            return back()->with('success','Thank you for your review!');
        }
    }
}
