<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Session;
use App\Cv;
use Illuminate\Support\Facades\DB;
use App\Experience;
use App\Competance;
use App\Formation;
use App\Company;
use App\Langue;
use App\Job;
use Auth;
use App\User;
use App\Http\Requests\cvRequest;
use Illuminate\Validation\Validator;

class CompanyController extends Controller
{
    public function index() {

        return view('mycompany');
     }
     
    /*public function storeCompany(Request $request ) {
        
        $company = new Company();

        $company->entreprise = $request->input('entreprise');
        $company->tlp = $request->input('tlp');
        $company->email = $request->input('email');
        $company->site = $request->input('site');
        $company->adresse = $request->input('adresse');
        $company->wilaya = $request->input('wilaya');
        $company->postal = $request->input('postal');
        $company->pays = $request->input('pays');
        $company->type = $request->input('type');
        $company->description = $request->input('description');
        $company->user_id = Auth::user()->id;
        if($request->hasFile('logo')) {
            $avataruploaded = request()->file('logo');
            $avatarname = time() .'.'. $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/images/');
        $avataruploaded->move($avatarpath,$avatarname);
           $company->logo = '/images/' .$avatarname;
         }
 
        
        $company->save();
        return redirect()->back();
                    
     }*/
     public function edit()
     {
   
         return view('mycompany')->with('info', Auth::user());
     
     }
     public function updatecompany(Request $r)
     {
         $this->validate($r, [
             'entreprise' => 'required',
             'tlp' => 'required',
             'email' => 'required',
             'site' => 'required',
             'adresse' => 'required',
             'wilaya' => 'required',
             'postal' => 'required',
             'pays' => 'required',
             'type' => 'required',
             'description' => 'required'

         ]);
         Auth::user()->company()->update([
             'entreprise' => $r->entreprise,
             'tlp' => $r->tlp,
             'email' => $r->email,
             'site' => $r->site,
             'adresse' => $r->adresse,
             'wilaya' => $r->wilaya,
             'postal' => $r->postal,
             'pays' => $r->pays,
             'type' => $r->type,
             'description'=>$r->description

         ]);
        
         if(request()->has('logo')){
             $avataruploaded = request()->file('logo');
             $avatarname = time() .'.'. $avataruploaded->getClientOriginalExtension();
             $avatarpath = public_path('/images/');
             $avataruploaded->move($avatarpath,$avatarname);
             Auth::user()->company()->update([
                 'logo' => '/images/' .$avatarname
             ]);
         }
         Session::flash('success', 'Profile updated.');
        return redirect()->back();
    
    
    
    }
     public function index1(){
      
        $listcv=Company::where('user_id',Auth::user()->id)->get();
      
        $spontane = DB::table('spontanes')
        ->join('users', 'users.id', '=', 'spontanes.user_id')
        ->join('companies', 'spontanes.entre_id', '=', 'companies.id') 
        ->select('users.*', 'spontanes.*')
       ->where('spontanes.entre_id', '=',2)
       ->where('spontanes.etat', '=',0)
        ->get();
        

        return view('companyshow', ['companies'=>$listcv,'info'=> Auth::user(),'spontanes'=>$spontane]);
      
           
    	
    } 
          
    public function index2($id){
      
        $listcv=Company::find($id);
          
        $cvs=Cv::where('user_id',Auth::user()->id)->get();
        $jobs=Job::where('user_id',$listcv->id)->get();

        return view('company', ['companies'=>$listcv,'info'=> Auth::user(),'cvs'=>$cvs,'jobs'=>$jobs]);
      
           
    	
    } 


    public function listecondidat(){
        $com=Auth::user()->company->id;
        $acc = DB::table('spontanes')
      
        ->where('entre_id','=',$com)
        ->update(['lu' => 1]);
        $listcv=Company::where('user_id',Auth::user()->id)->get();

        $spontane = DB::table('spontanes')
        ->join('users', 'users.id', '=', 'spontanes.user_id')
        ->join('companies', 'spontanes.entre_id', '=', 'companies.id') 
        ->select('users.*', 'spontanes.*')
       ->where('spontanes.entre_id', '=',$com)
       ->where('spontanes.etat', '=',0)
        ->get();
        

        return view('listcandida', ['companies'=>$listcv,'info'=> Auth::user(),'spontanes'=>$spontane]);
      
           
    	
    } 
          
        
}
