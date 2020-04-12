<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\Competance;
use Auth;
use Session;
use App\Http\Requests\cvRequest;
class CompetanceController extends Controller
{
    public function index() {
        
    
        $listcv = Cv::where('user_id',Auth::user()->id)->get();
        
      
      

      return view('profiles.index', ['cvs' => $listcv]);
  }
    
    public function create() {
        
        return view('profiles.createcmp');
     }
     public function store(Request $request,$id){
        $cv = Cv::find($id);
        $competance = new Competance();
        $competance->cv_id =$cv->id;
    	$competance->description = $request->input('description');
        $competance->save();
        session()->flash('success', 'La competance à été bien enregistrée !!');
        return redirect()->back();
      
    }
    public function edit($id) {

        $competance =  Competance::find($id);
    
       
    
        return view('profiles.editcmp', ['competance' => $competance]);
           return redirect('cmp');
    
     }
     /*public function update(Request $request, $id) {
         
        $competance= Competance::find($id);
    
     
        $competance->description = $request->input('description');
    
        
        $competance->save();
    
        return redirect('cmp');
    }*/
    public function update(Request $request)
{

    $competance= Competance::findOrFail($request->competance_id);

    $competance->update($request->all());
    session()->flash('success', 'La competance à été bien modifieé !!');
    return back();
}
    /*public function destroy(Request $request,$id){
       $competance = Competance::find($id);
       $competance->delete();
       return redirect('cmp');
    
    
    }*/
    public function destroy(Request $request)
    {
        
        $competance = Competance::findOrFail($request->competance_id);
        $competance->delete();
        session()->flash('danger', 'La competance à été bien supprimée!!');

        return back();

    }
    
}
