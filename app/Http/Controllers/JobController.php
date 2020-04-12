<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Job;
use App\Company;
use App\Cv;
use App\Postule;
use Auth;
use Session;
use App\Http\Requests\cvRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Sypport\Facades\Input;
class JobController extends Controller
{
   
    public function index() {
        
        return view('offre');
     }
     
    public function storeOffre(Request $request,$id){
        $company = Company::find($id);
        $job = new Job();

        $job->intitule = $request->input('intitule');
        $job->domaine = $request->input('domaine');
        $job->diplome = $request->input('diplome');
        $job->experience = $request->input('experience');
        $job->description = $request->input('description');
        $job->lieu = $request->input('lieu');
        $job->competence = $request->input('competence');
        $job->remun = $request->input('remun');
        $job->debut = $request->input('debut');
        $job->depot = $request->input('depot');
        $job->type = $request->input('type');
        $job->delai = $request->input('delai');
    
        $job->user_id =$company->id;
        session()->flash('success', 'l\'offre à été bien ajouteé !!');
        $job->save();
        return redirect()->back();
                    
     }
         public function index1(){
            $users = DB::table('users')
            ->join('companies', 'users.id', '=', 'companies.user_id')
            ->join('jobs', 'jobs.user_id', '=', 'companies.id')->where('users.id', '=',Auth::user()->id) ->paginate(5);
        
        return view('offrelist', ['offres' => $users]);
     
    	
    }
    public function index2(){
        $users = DB::table('companies')
    
        ->join('jobs', 'jobs.user_id', '=', 'companies.id')->paginate(5);
        $jobs=Job::All();
    return view('joblist', ['offres' => $users,'jobs' => $jobs]);
 
    
}
    public function edit($id) {

        $job = Job::find($id);
 
       
 
        return view('offre', ['job' => $job]);
         
     }
     
     //permet de modifier un cv
     public function update(Request $request, $id) {
         
         $job = Job::find($id);
 
       
 
         $job->intitule= $request->input('intitule');
         $job->domaine = $request->input('domaine');
 
         $job->diplome= $request->input('diplome');
         $job->lieu = $request->input('lieu');
         $job->experience = $request->input('experience');
         $job->competence = $request->input('competence');
         $job->remun = $request->input('remun');
         $job->description = $request->input('description');
         $job->depot= $request->input('depot');
         $job->type = $request->input('type');
         $job->debut= $request->input('debut');
         $job->delai = $request->input('delai');

         
         $job->save();
 
         return redirect()->back();
     }
     public function destroy(Request $request,$id){
       
        $job= Job::findOrFail($request->offre_id);
        $job->delete();
    
        return back();

    }
    public function indexjob($id) {
        $acc = DB::table('postules')
        ->where('job_id','=',$id)
        ->update(['lu' => 1]);
        $job = Job::find($id);
        $offre=$job->id;
        if(Auth::user()){
       $cvs=Cv::where('user_id',Auth::user()->id)->get();
if(Auth::user()->admin == 0){
        return view('jobdetails', ['job' => $job,'info'=> Auth::user(),'cvs'=>$cvs]);}
        else{   
            $postuler = DB::table('postules')
            ->join('users', 'users.id', '=', 'postules.user_id')
            ->join('jobs', 'postules.job_id', '=', 'jobs.id')  
            ->select('users.*', 'postules.*')
            ->where('postules.job_id', '=', $offre)
            ->where('postules.etat', '=', 0)
            ->get();
            

            
            return view('offredetails', ['job' => $job,'info'=> Auth::user(),'cvs'=>$cvs,'postuler'=>$postuler]);}}
            else{  return view('jobdetails', ['job' => $job]);}
   }

    public function barrerecherche(Request $request) {
$q=$request->get('ville');
$p=$request->get('job');
$o=$request->get('poste');
$users = DB::table('jobs')->join('companies', 'jobs.user_id', '=', 'companies.id')
->where('lieu','=',$q)->orwhere('domaine','=',$p)
->orwhere('intitule','=',$o)
->select('jobs.*', 'companies.logo')
->paginate(5);
$jobs=Job::All();
    
return view('joblist', ['offres' => $users,'jobs' => $jobs]);
    }
    public function accueil() {
       $company=Company::All();
            $jobs=Job::All();
            return view('acceuil', ['offres' => $jobs,'companies'=>$company]);
        }



        public function recherchetype(Request $request) {
            $q=$request->get('customRadio');
            $v=$request->get('customRadio1');
            $r=$request->get('customRadio2');
            $users = DB::table('jobs')->join('companies', 'jobs.user_id', '=', 'companies.id')
            ->where('jobs.type','=',$q)
            ->orwhere('jobs.diplome','=',$v)
            ->orwhere('remun', $r)
            ->select('jobs.*', 'companies.logo')
            ->paginate(5);
            $jobs=Job::All();
                
            return view('joblist', ['offres' => $users,'jobs' => $jobs]);
                }
}
