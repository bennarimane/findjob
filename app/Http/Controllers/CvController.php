<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cv;
use App\Experience;
use App\Competance;
use App\Formation;
use App\Langue;
use Auth;
use App\User;
use App\Http\Requests\cvRequest;

class CvController extends Controller
{
    public function index() {
        
    
          $listcv = Cv::where('user_id',Auth::user()->id)->paginate(3);
 
        return view('profiles.index', ['cvs' => $listcv,'info'=> Auth::user()]);
    }
    public function modifier()
    {
        return view('profiles.moncv')->with('info', Auth::user());
    
    }
    public function store(Request $request){
        $cv = new Cv();

        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->user_id = Auth::user()->id;
        
         if($request->hasFile('photo')) {
            $avataruploaded = request()->file('photo');
            $avatarname = time() .'.'. $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/images/');
        $avataruploaded->move($avatarpath,$avatarname);
           $cv->photo = '/images/' .$avatarname;
         }
 
        $cv->save();
        
        session()->flash('success', 'Le cv à été bien enregistré !!');
 
        return redirect()->back();
    }
    public function edit($id) {

        $cv = Cv::find($id);
 
       
 
        return view('profiles.editcv', ['cv' => $cv]);
           return redirect('cvs');
     }
     
     //permet de modifier un cv
     public function update(Request $request, $id) {
         
         $cv = Cv::find($id);
 
       
 
         $cv->titre = $request->input('titre');
         $cv->presentation = $request->input('presentation');
 
          if($request->hasFile('photo')) {
           $cv->photo = $request->photo->store('image');
         }
         
         $cv->save();
         session()->flash('success', 'Le cv à été bien Modifié!!');
         return redirect('cvs');
     }
     public function destroy(Request $request){
  
$cv= Cv::findOrFail($request->cvs_id);
    $cv->delete();
    session()->flash('danger', 'Le cv à été bien Supprimé!!');
    return back();

    }
    
    public function show($id) {

        return view('profiles.show', ['id' => $id]);
      }




      public function cvExperienceCreate(Request $request, $id) {
        
        $cv = Cv::find($id);
        
        $experiences = [
           ["intitule" => "Experience en laravel","lieu" => "alger", "debut" => "2013-10-10", "fin" => "2010-12-10","description" => "Experience en laravel"],
           ["intitule" => "Experience en symfony","lieu" => "alger", "debut" => "2013-10-10", "fin" => "2010-12-10","description" => "Experience en laravel"],
           ["intitule" => "Experience en Sécurité", "lieu" => "alger","debut" => "2013-10-10", "fin" => "2010-12-10","description" => "Experience en laravel"],
           ["intitule" => "Experience en Firebase", "lieu" => "alger","debut" => "2013-10-10", "fin" => "2010-12-10","description" => "Experience en laravel"],
        ];


        foreach($experiences as $exp) {

            $experience = new Experience($exp);
      

            $cv->experiences()->save($experience);
        }

        
    }


    public function cvExperienceShow(Request $request, $id) {

        $cv = Cv::find($id);

        return view('experience.showexp', ['cv' => $cv]);
    }

    public function index1($id){
        $cv = Cv::find($id);
        $listexp = Experience::where('cv_id',$cv->id)->get();
        $listcomp = Competance::where('cv_id',$cv->id)->get();
        $listfor = Formation::where('cv_id',$cv->id)->get();
        $listlangue= Langue::where('cv_id',$cv->id)->get();
        return view('profiles.show', ['experiences' => $listexp, 'formations' => $listfor,'competances' => $listcomp ,'langues' => $listlangue ,'cvs'=>$cv]);
     
    	
    }
   
  
    public function afficher($name,$id)
    {
        $cvs= Cv::where('id', $name)->first();
        $user = User::where('id', $id)->first();
       $experiences=Experience::where('cv_id',$cvs->id)->get();
       $competences=Competance::where('cv_id',$cvs->id)->get();
       $formations=Formation::where('cv_id',$cvs->id)->get();
       $langues=Langue::where('cv_id',$cvs->id)->get();
            return view('detailscv', ['user'=>$user,'experiences'=>$experiences,'competances'=>$competences,'formations'=>$formations,'langues'=>$langues,'cv'=>$cvs]);
    }

}
