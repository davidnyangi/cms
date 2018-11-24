<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use App\TIFUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
    public function login(){
    	 	$inputs = array(
    	 		"username" => Input::get('email'),
    	 		"password" => Input::get('password')
    	 		);
    	 	if(($user = TIFUsers::where('Username', '=',$inputs['username'])->first())&&(Hash::check($inputs['password'], $user->Password))){
    	 		 $role = DB::table('nad_tifusers')->where('Username', $inputs['username'])->value('UserType');
                 $userDesignation = DB::table('nad_tifusers')->where('Username', $inputs['username'])->value('Designation');
                 $userlevel = DB::table('nad_tifusers')->where('Username', $inputs['username'])->value('Userlevel');
                 $loggedusername = DB::table('nad_tifusers')->where('Username', $inputs['username'])->value('Username');
                 $dbfname = DB::table('nad_tifusers')->where('Username', $inputs['username'])->value('FName');
                 $dblname = DB::table('nad_tifusers')->where('Username', $inputs['username'])->value('LName');
                 $dbname = $dbfname.' '.$dblname;
    	 		 	if($role=='Admin'){
                        Session::put('fullname', $dbname);
                        Session::put('username', $loggedusername);
                        Session::put('userDesignation', $userDesignation);
                         Session::put('level', $userlevel);
                       return response()->json(['redirect'=> 'dashboard']);
                    }else if($role=='Registrar'){
                        Session::put('fullname', $dbname);
                        Session::put('username', $loggedusername);
                        Session::put('userDesignation', $userDesignation);
                        Session::put('level', $userlevel);
                        return response()->json(['redirect'=> 'dashboard2']);
                    }else if($role=='Badges'){
                        Session::put('fullname', $dbname);
                        Session::put('username', $loggedusername);
                        Session::put('userDesignation', $userDesignation);
                        Session::put('level', $userlevel);
                        return response()->json(['redirect'=> 'secretary']);
                    }
    	 	}else{
    	 		return response()->json(['error'=> 'Wrong Credentials Entered!'],500);
    	 	}    	 	
    }
    public function loginView(){
        return view('homepage_login');
    }
    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
