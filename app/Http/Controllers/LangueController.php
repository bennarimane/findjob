<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cv;
use App\Experience;
use App\Langue;
use Auth;
use Session;


class LangueController extends Controller
{
    public function store(Request $request,$id){
        $cv = Cv::find($id);
        $langue = new Langue();
        $langue->cv_id =$cv->id;
    	$langue->lang = $request->input('lang');
        $langue->save();
        session()->flash('success', 'La langue à été bien enregistrée !!');
        return redirect()->back();
      
}
/*public function destroy(Request $request,$id){
    $langue = Langue::find($id);
    $langue->delete();
    return redirect()->back();
 
 
 }
*/
public function destroy(Request $request)
{
    
    $langue = Langue::findOrFail($request->langue_id);
    $langue->delete();
    session()->flash('danger', 'La competance à été bien supprimée !!');
    return back();

} 
}