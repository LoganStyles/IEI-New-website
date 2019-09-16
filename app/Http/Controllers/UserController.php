<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use Auth;

class UserController extends Controller
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
    
    public function index($user=""){
        if (\Request::is('office/accounts')) {
            $users = User::all();
            $view = 'office.users.users';
        }elseif (\Request::is('office/profile')) { 
            $users = User::find(Auth::user()->id);
            $view = 'office.users.profile';
        }elseif (\Request::is('office/accounts/*')) { 
            $users = User::where("username",$user)->first();
            $view = 'office.users.account';
        }
        return view($view, compact('users'));
        // if(Auth::user()->id == 1){
        // }else{
        //     return redirect('office');
        // }
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($user="")
    {
        unset($_POST["_token"]);
        $_POST["updated_at"] = date('Y-m-d H:m:s');
        if(isset($_POST['password'])){
            if($_POST['password']==$_POST['password_confirmation']){
                $_POST["password"] = bcrypt($_POST['password']);
                unset($_POST['password_confirmation']);
            }else{
                return back()->with('error','Password does not match!');
            }
        }
        if(empty($user)){
            $data = DB::table('users')->where('id',Auth::user()->id)->update($_POST);
        }else{
            unset($_POST["username"]);
            $data = DB::table('users')->where('username',$user)->update($_POST);
        }
        $message = 'Profile saved successfully!';
        
        return back()->with('success',$message);
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if($id==1) return back()->with('success','You can not delete Admin account!');
        User::destroy ($id);
        return back()->with('success','Account deleted successfully!');
    }
}
