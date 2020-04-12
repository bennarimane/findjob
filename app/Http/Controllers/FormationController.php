<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cv;
use App\Experience;
use App\Formation;
use Auth;
use Session;
use App\Http\Requests\cvRequest;


class FormationController extends Controller
{



   public function edit($id) {

  $formation =Formation ::find($id);

 

  return view('profiles.editform', ['formation' => $formation ]);
  

}
/*public function update(Request $request, $id) {
       
  $formation = Formation ::find($id);



  $formation ->titre = $request->input('titre');
  $formation ->diplome = $request->input('diplome');
  $formation ->domaine = $request->input('domaine');
  $formation ->etablissement = $request->input('etablissement');
  $formation ->lieu = $request->input('lieu');
  $formation ->debut = $request->input('debut');
  $formation ->fin = $request->input('fin');
  $formation ->description = $request->input('description');

  $formation ->type = $request->input('type');
  
  $formation->save();
  return redirect()->back();
}*/
public function update(Request $request)
{

    $formation= Formation::findOrFail($request->formation_id);

    $formation->update($request->all());
    session()->flash('success', 'La formation à été bien modifieé !!');
    return back();
}

/*public function destroy(Request $request,$id){
 $formation = Formation::find($id);
 $formation->delete();
 return redirect()->back();


}
*/
public function destroy(Request $request)
{
    
    $formation= Formation::findOrFail($request->formation_id);
    $formation->delete();
    session()->flash('danger', 'La formation à été bien supprimée!!');
    return back();

}
  public function create() {
      
     return view('profiles.createform');
  }
  public function store(Request $request,$id){
    $cv = Cv::find($id);
      $formation = new Formation();
      $formation->cv_id =$cv->id;
      $formation->titre = $request->input('titre');
      $formation->diplome = $request->input('diplome');
      $formation->domaine = $request->input('domaine');
      $formation->etablissement = $request->input('etablissement');
      $formation->lieu = $request->input('lieu');
      $formation->type = $request->input('type');
      $formation->debut = $request->input('debut');
      $formation->fin = $request->input('fin');
      $formation->description = $request->input('description');
      $formation->save();
      session()->flash('success', 'La formation à été bien enregistrée !!');
      return redirect()->back();
  }
}
