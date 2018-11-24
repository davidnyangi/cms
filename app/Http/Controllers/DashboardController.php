<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use App\BuildMembers;
use App\BuildCountry;
use App\BuildRegions;
use App\BuildChurches;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
class DashboardController extends Controller
{
    public function welcome(){
    	if (session()->has('fullname')) {
            $memberCountries = DB::select(DB::raw("SELECT distinct(`name`) FROM `build_countries` order by `name` asc"));
            $memberChurches = DB::select(DB::raw("SELECT distinct(`mem_church`) FROM `build_members` order by `mem_church` asc"));
            $memberRegions = DB::select(DB::raw("SELECT distinct(`reg_name`) FROM `build_regions` order by `reg_name` asc"));
            $activeEvent = DB::select(DB::raw("SELECT distinct(`eventname`) FROM `cims_events`where `status`='active' LIMIT 1 "));
            
            $countMembers = BuildMembers::where('registered_at','LIKE','2017%')
            ->where('mem_conference','=','BUILD Conference 2017')->count();

            $countCountries = DB::table('build_members')
            ->where('registered_at','LIKE','2017%')
            ->where('mem_conference','=','BUILD Conference 2017')->distinct()->get(['mem_country'])->count();
            // ->count(DB::raw('DISTINCT mem_country'));

            $countChurches = DB::table('build_members')
            ->where('mem_conference','=','BUILD Conference 2017')->distinct()->get(['mem_church'])->count();
          //  $countgender = DB::table('build_members')->distinct()->get(['mem_gender'])->count();
            $countMales = BuildMembers::where('mem_gender','=','M')
            ->where('mem_conference','=','BUILD Conference 2017')->count();

            $countFemales = BuildMembers::where('mem_gender','=','F')
            ->where('mem_conference','=','BUILD Conference 2017')->count();

            $countMalesTz = BuildMembers::where('mem_gender','=','M')
                            ->where('mem_country','=','TANZANIA')
                            ->where('mem_conference','=','BUILD Conference 2017')->count();

            $countFemalesTz = BuildMembers::where('mem_gender','=','F')
                            ->where('mem_country','=','TANZANIA')
                            ->where('mem_conference','=','BUILD Conference 2017')->count();

            $countMalesKn = BuildMembers::where('mem_gender','=','M')
                            ->where('mem_country','=','KENYA')
                            ->where('mem_conference','=','BUILD Conference 2017')->count();

            $countFemalesKn = BuildMembers::where('mem_gender','=','F')
                            ->where('mem_country','=','KENYA')
                            ->where('mem_conference','=','BUILD Conference 2017')->count();   
                            
            $countMalesUg = BuildMembers::where('mem_gender','=','M')
                            ->where('mem_country','=','UGANDA')
                            ->where('mem_conference','=','BUILD Conference 2017')->count();

            $countFemalesUg = BuildMembers::where('mem_gender','=','F')
                            ->where('mem_country','=','UGANDA')
                            ->where('mem_conference','=','BUILD Conference 2017')->count();   

            $countMalesBn = BuildMembers::where('mem_gender','=','M')
                            ->where('mem_country','=','BURUNDI')
                            ->where('mem_conference','=','BUILD Conference 2017')->count();

            $countFemalesBn = BuildMembers::where('mem_gender','=','F')
                            ->where('mem_country','=','BURUNDI')
                            ->where('mem_conference','=','BUILD Conference 2017')->count();   

            $countMalesRn = BuildMembers::where('mem_gender','=','M')
                            ->where('mem_country','=','RWANDA')
                            ->where('mem_conference','=','BUILD Conference 2017')->count();

            $countFemalesRn = BuildMembers::where('created_at','LIKE','F')
                            ->where('mem_country','=','RWANDA')
                            ->where('mem_conference','=','BUILD Conference 2017')->count();   
            // foreach($memberCountries as $memberCountry){
            //     $countryFemales = BuildMembers::where('mem_gender','=','F')
            //     ->where('mem_country','=',$memberCountry['mem_country'])->count();
            // }
        
            $allmembers = DB::select(DB::raw("SELECT * FROM `build_members` where mem_conference='Build Conference 2017'"));
             return view('dashboard',compact('allmembers','countMalesKn','countMalesBn','countMalesRn','countMalesUg','countMalesTz','countFemalesKn','countFemalesBn','countFemalesRn','countFemalesUg','countFemalesTz','countMalesTz','countMembers','countCountries','countMales','countFemales','countChurches','memberCountries','memberChurches','memberRegions','activeEvent'));
        }
         return redirect('/'); 	
    }
    public function getDashboard(){
    	if (session()->has('fullname')) {
          
            
            $countMembers = BuildMembers::where('registered_at','LIKE','2018%')->count();

            // }
            return response()->json(['redirect'=> 'dashboard2']);
            // $allmembers = DB::select(DB::raw("SELECT * FROM `build_members`"));
            // $returnHTML= view('dashboard',compact('allmembers','countMalesKn','countMalesBn','countMalesRn','countMalesUg','countMalesTz','countFemalesKn','countFemalesBn','countFemalesRn','countFemalesUg','countFemalesTz','countMalesTz','countMembers','countCountries','countMales','countFemales','countChurches','memberCountries','memberChurches','memberRegions'))->render();

            //  response()->json(array('success' => true, 'html'=>$returnHTML));
               // $allmembers = DB::select(DB::raw("SELECT * FROM `build_members`"));
        }
         return redirect('/'); 	
    }
    public function getDashboard2(){
    	if (session()->has('fullname')) {
            $memberCountries = DB::select(DB::raw("SELECT distinct(`name`) FROM `build_countries`  order by `name` asc"));
            $memberChurches = DB::select(DB::raw("SELECT distinct(`church_abbreviation`) FROM `build_churches` order by `church_abbreviation` asc"));
            $memberRegions = DB::select(DB::raw("SELECT distinct(`reg_name`) FROM `build_regions` order by `reg_name` asc"));
            $memberRoles = DB::select(DB::raw("SELECT distinct(`mem_rolename`) FROM `build_churchroles` order by `mem_rolename` asc"));
            $activeEvent = DB::select(DB::raw("SELECT distinct(`eventname`) FROM `cims_events`where `status`='active' LIMIT 1 "));
            $countMembers = BuildMembers::where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')->count();
            $pwd=Hash::make('melody2018');
            $countCountries = DB::table('build_members')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->distinct()->get(['mem_country'])->count();

            $countChurches = DB::table('build_members')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->distinct()->get(['mem_church'])->count();
          //  $countgender = DB::table('build_members')->distinct()->get(['mem_gender'])->count();
            $countMales = BuildMembers::where('mem_gender','=','Male')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->count();

            $countFemales = BuildMembers::where('mem_gender','=','Female')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->count();

            $countMalesTz = BuildMembers::where('mem_gender','=','Male')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_country','=','TANZANIA')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->count();

            $countFemalesTz = BuildMembers::where('mem_gender','=','Female')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','TANZANIA')->count();

            $countMalesKn = BuildMembers::where('mem_gender','=','Male')
                            ->where('mem_country','=','KENYA')
                            ->where('mem_conference','=','BUILD Conference 2018')
                            ->where('registered_at','LIKE','2018%')
                            ->count();

            $countFemalesKn = BuildMembers::where('mem_gender','=','Female')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','KENYA')->count();   
                            
            $countMalesUg = BuildMembers::where('mem_gender','=','Male')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','UGANDA')->count();

            $countFemalesUg = BuildMembers::where('mem_gender','=','Female')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','UGANDA')->count();   

            $countMalesBn = BuildMembers::where('mem_gender','=','Male')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','BURUNDI')->count();

            $countFemalesBn = BuildMembers::where('mem_gender','=','Female')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
             ->where('mem_country','=','BURUNDI')->count();   

            $countMalesRn = BuildMembers::where('mem_gender','=','Male')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','RWANDA')->count();

            $countFemalesRn = BuildMembers::where('mem_gender','=','Female')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','RWANDA')->count(); 
            
            $countFemalesCn = BuildMembers::where('mem_gender','=','Female')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','Congo')->count();

            $countFemalesMs = BuildMembers::where('mem_gender','=','Female')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','Mauritius')->count();

            $countFemalesZim = BuildMembers::where('mem_gender','=','Female')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','Zimbabwe')->count();

            $countFemalesEthio = BuildMembers::where('mem_gender','=','Female')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','Ethiopia')->count();

            $countMalesZim = BuildMembers::where('mem_gender','=','Male')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','Zimbabwe')->count();

            $countMalesEthio = BuildMembers::where('mem_gender','=','Male')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','Ethiopia')->count();


            $countMalesCn = BuildMembers::where('mem_gender','=','Male')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','Congo')->count();

            $countMalesMs = BuildMembers::where('mem_gender','=','Male')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','BUILD Conference 2018')
            ->where('mem_country','=','Mauritius')->count();
            //  response()->json(array('success' => true, 'html'=>$returnHTML));
               $allmembers = DB::select(DB::raw("SELECT * FROM `build_members` where registered_at like '%2018%' AND mem_conference =  'BUILD Conference 2018'"));
            return view('dashboard2',compact('countMalesEthio','countFemalesEthio','countMalesZim','countFemalesZim','pwd','countMalesMs','countFemalesMs','countMalesCn','countFemalesCn','allmembers','memberRoles','countMalesKn','countMalesBn','countMalesRn','countMalesUg','countMalesTz','countFemalesKn','countFemalesBn','countFemalesRn','countFemalesUg','countFemalesTz','countMalesTz','countMembers','countCountries','countMales','countFemales','countChurches','memberCountries','memberChurches','memberRegions','activeEvent'));

            //  response()->json(array('success' => true, 'html'=>$returnHTML));
        }
         return redirect('/'); 	
    }
    public function getZGACTDashboard(){
    	if (session()->has('fullname')) {
            $memberCountries = DB::select(DB::raw("SELECT distinct(`name`) FROM `build_countries` order by `name` asc"));
            $memberChurches = DB::select(DB::raw("SELECT distinct(`mem_church`) FROM `build_members` order by `mem_church` asc"));
            $memberRegions = DB::select(DB::raw("SELECT distinct(`reg_name`) FROM `build_regions` order by `reg_name` asc"));
            $activeEvent = DB::select(DB::raw("SELECT distinct(`eventname`) FROM `cims_events`where `status`='active' LIMIT 1 "));
            $countMembers = BuildMembers::where('registered_at','LIKE','2018%')
                                        ->where('mem_conference','=','ZGACT Youth Camp')->count();

            $countCountries = DB::table('build_members')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->distinct()->get(['mem_country'])->count();

            $countChurches = DB::table('build_members')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->distinct()->get(['mem_church'])->count();
          //  $countgender = DB::table('build_members')->distinct()->get(['mem_gender'])->count();
            $countMales = BuildMembers::where('mem_gender','=','M')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->count();

            $countFemales = BuildMembers::where('mem_gender','=','F')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->count();

            $countMalesTz = BuildMembers::where('mem_gender','=','M')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->where('mem_country','=','TANZANIA')
            ->count();

            $countFemalesTz = BuildMembers::where('mem_gender','=','F')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->where('mem_country','=','TANZANIA')->count();

            $countMalesKn = BuildMembers::where('mem_gender','=','M')
                            ->where('mem_region','=','Dar es Salaam')
                            ->where('mem_conference','=','ZGACT Youth Camp')
                            ->where('registered_at','LIKE','2018%')
                            ->count();

            $countFemalesKn = BuildMembers::where('mem_gender','=','F')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->where('mem_region','=','Dar es Salaam')->count();   
                            
            $countMalesUg = BuildMembers::where('mem_gender','=','M')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->where('mem_region','=','Mwanza')->count();

            $countFemalesUg = BuildMembers::where('mem_gender','=','F')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->where('mem_region','=','Mwanza')->count();   

            $countMalesBn = BuildMembers::where('mem_gender','=','M')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->where('mem_region','=','Morogoro')->count();

            $countFemalesBn = BuildMembers::where('mem_gender','=','F')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->where('mem_region','=','Morogoro')->count();   

            $countMalesRn = BuildMembers::where('mem_gender','=','M')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->where('mem_region','=','Kilimanjaro')->count();

            $countFemalesRn = BuildMembers::where('mem_gender','LIKE','F')
            ->where('registered_at','LIKE','2018%')
            ->where('mem_conference','=','ZGACT Youth Camp')
            ->where('mem_region','=','Kilimanjaro')->count();   
            //  response()->json(array('success' => true, 'html'=>$returnHTML));
               $allmembers = DB::select(DB::raw("SELECT * FROM `build_members` where `registered_at` like '%2018%' and `mem_conference`= 'ZGACT Youth Camp'"));
            return view('dashboardzgact',compact('allmembers','countMalesKn','countMalesBn','countMalesRn','countMalesUg','countMalesTz','countFemalesKn','countFemalesBn','countFemalesRn','countFemalesUg','countFemalesTz','countMalesTz','countMembers','countCountries','countMales','countFemales','countChurches','memberCountries','memberChurches','memberRegions','activeEvent'));

            //  response()->json(array('success' => true, 'html'=>$returnHTML));
        }
         return redirect('/'); 	
    }
    public function user(){
    	if (session()->has('fullname')) {
             return view('user');
        }
         return redirect('/'); 	
    }


    public function autoComplete(Request $request) {
        $query = $request->get('term','');
        
        $products=BuildMembers::where('mem_firstname','LIKE','%'.$query.'%')->get();
        
        $userDetails=array();
        foreach ($products as $product) {
               
                $userDetails[]=array('value'=>$product->mem_firstname ." ".$product->mem_lastname,'id'=>$product->mem_id);
        }
        if(count($userDetails))
            return $userDetails;
        else
            return ['value'=>'No Result Found','id'=>''];
    }
    public function deleteMember(Request $request) {
        try{
            date_default_timezone_set('Africa/Nairobi');
                $date = date('Y-m-d H:i:s');
                $deleted =BuildMembers::where('mem_id', $request->memid)->delete();
                if($deleted)
            return response()->json(array('sms'=>'1'));
        } catch (Exception $e) {
            return response()->json(array('sms'=>'Information NOT saved!!'));
        }
    }
    public function getMembers(Request $request) {
        $memberCountries = DB::select(DB::raw("SELECT distinct(`name`) FROM `build_countries`  order by `name` asc"));
        $memberChurches = DB::select(DB::raw("SELECT distinct(`mem_church`) FROM `build_members` order by `mem_church` asc"));
        $memberRegions = DB::select(DB::raw("SELECT distinct(`reg_name`) FROM `build_regions` order by `reg_name` asc"));
        $memberRoles = DB::select(DB::raw("SELECT distinct(`mem_rolename`) FROM `build_churchroles` order by `mem_rolename` asc"));
        $activeEvent = DB::select(DB::raw("SELECT distinct(`eventname`) FROM `cims_events`where `status`='active' LIMIT 1 "));
        $countMembers = BuildMembers::where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')->count();

        $countCountries = DB::table('build_members')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->distinct()->get(['mem_country'])->count();

        $countChurches = DB::table('build_members')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->distinct()->get(['mem_church'])->count();
      //  $countgender = DB::table('build_members')->distinct()->get(['mem_gender'])->count();
        $countMales = BuildMembers::where('mem_gender','=','Male')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->count();

        $countFemales = BuildMembers::where('mem_gender','=','Female')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->count();

        $countMalesTz = BuildMembers::where('mem_gender','=','Male')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_country','=','TANZANIA')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->count();

        $countFemalesTz = BuildMembers::where('mem_gender','=','Female')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->where('mem_country','=','TANZANIA')->count();

        $countMalesKn = BuildMembers::where('mem_gender','=','Male')
                        ->where('mem_country','=','KENYA')
                        ->where('mem_conference','=','BUILD Conference 2018')
                        ->where('registered_at','LIKE','2018%')
                        ->count();

        $countFemalesKn = BuildMembers::where('mem_gender','=','Female')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->where('mem_country','=','KENYA')->count();   
                        
        $countMalesUg = BuildMembers::where('mem_gender','=','Male')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->where('mem_country','=','UGANDA')->count();

        $countFemalesUg = BuildMembers::where('mem_gender','=','Female')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->where('mem_country','=','UGANDA')->count();   

        $countMalesBn = BuildMembers::where('mem_gender','=','Male')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->where('mem_country','=','BURUNDI')->count();

        $countFemalesBn = BuildMembers::where('mem_gender','=','Female')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
         ->where('mem_country','=','BURUNDI')->count();   

        $countMalesRn = BuildMembers::where('mem_gender','=','Male')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->where('mem_country','=','RWANDA')->count();

        $countFemalesRn = BuildMembers::where('mem_gender','=','Female')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->where('mem_country','=','RWANDA')->count(); 
        
        $countFemalesCn = BuildMembers::where('mem_gender','=','Female')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->where('mem_country','=','Congo')->count();

        $countFemalesMs = BuildMembers::where('mem_gender','=','Female')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->where('mem_country','=','Mauritius')->count();

        $countMalesCn = BuildMembers::where('mem_gender','=','Male')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->where('mem_country','=','Congo')->count();

        $countMalesMs = BuildMembers::where('mem_gender','=','Male')
        ->where('registered_at','LIKE','2018%')
        ->where('mem_conference','=','BUILD Conference 2018')
        ->where('mem_country','=','Mauritius')->count();
        $allmembers = DB::select(DB::raw("SELECT * FROM `build_members` where registered_at like '%2018%' AND mem_conference =  'BUILD Conference 2018'"));
        return view('allmembers',compact('countMalesMs','countFemalesMs','countMalesCn','countFemalesCn','allmembers','memberRoles','countMalesKn','countMalesBn','countMalesRn','countMalesUg','countMalesTz','countFemalesKn','countFemalesBn','countFemalesRn','countFemalesUg','countFemalesTz','countMalesTz','countMembers','countCountries','countMales','countFemales','countChurches','memberCountries','memberChurches','memberRegions','activeEvent'));

    }
    public function saveZGACTMember(Request $request){
        try{
            date_default_timezone_set('Africa/Nairobi');
                $date = date('Y-m-d H:i:s');
                $st = new BuildMembers;
                $st->mem_firstname=$request->firstname;
                $st->mem_lastname=$request->lastname;
                $st->mem_gender=$request->gender;
                $st->mem_mobile=$request->mobile;
                $st->mem_email=$request->email;
                $st->mem_church=$request->church;
                $st->mem_conference=$request->eventname;
                $st->mem_region=$request->region;
                $st->mem_country=$request->country;
                $st->registered_at = $date;
                $st->save();
            return response()->json(array('sms'=>'1'));
        } catch (Exception $e) {
            return response()->json(array('sms'=>'Information NOT saved!!'));
        }
    }
    public function addncountry(Request $request){
        try{
            date_default_timezone_set('Africa/Nairobi');
                $date = date('Y-m-d H:i:s');
                $st = new BuildCountry;
                $st->name=$request->countryname;
                $st->save();
            return response()->json(array('sms'=>'1'));
        } catch (Exception $e) {
            return response()->json(array('sms'=>'Information NOT saved!!'));
        }
    }
    public function addnregion(Request $request){
        try{
            date_default_timezone_set('Africa/Nairobi');
                $date = date('Y-m-d H:i:s');
                $st = new BuildRegions;
                $st->reg_name=$request->rname;
                $st->country=$request->cname;
                $st->save();
            return response()->json(array('sms'=>'1'));
        } catch (Exception $e) {
            return response()->json(array('sms'=>'Information NOT saved!!'));
        }
    }
    public function addnchurch(Request $request){
        try{
            date_default_timezone_set('Africa/Nairobi');
                $date = date('Y-m-d H:i:s');
                $st = new BuildChurches;
                $st->church_name=$request->churchname;
                $st->church_abbreviation=$request->abb;
                $st->church_region=$request->aregion;
                $st->church_country=$request->aCountry;
                $st->save();
            return response()->json(array('sms'=>'1'));
        } catch (Exception $e) {
            return response()->json(array('sms'=>'Information NOT saved!!'));
        }
    }
    public function saveBuildMember(Request $request){
        try{
            date_default_timezone_set('Africa/Nairobi');
                $date = date('Y-m-d H:i:s');
                $st = new BuildMembers;
                $st->mem_firstname=$request->firstname;
                $st->mem_lastname=$request->lastname;
                $st->mem_gender=$request->gender;
                $st->mem_mobile=$request->mobile;
                $st->mem_email=$request->email;
                $st->mem_church=$request->church;
                $st->mem_conference=$request->eventname;
                $st->mem_region=$request->region;
                $st->mem_country=$request->country;
                $st->mem_positioninchurch=$request->positioninchurch;
                $st->mem_allergy=$request->allergy;
                $st->mem_accomodation=$request->accomodation;
                $st->mem_bod=$request->boardingday;
                $st->mem_agegroup=$request->agegroup;
                $st->mem_user=Session::get('fullname');
                $st->registered_at = $date;
                $st->save();
            return response()->json(array('sms'=>'1'));
        } catch (Exception $e) {
            return response()->json(array('sms'=>'Information NOT saved!!'));
        }
    }
}


