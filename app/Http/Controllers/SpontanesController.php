<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\user;
use App\Company;
use App\Spontane;
use Illuminate\Support\Facades\DB;
class SpontanesController extends Controller
{
    //
    public function store(Request $request ,$id) {
        
        $spontane = new Spontane();
        $company = Company::find($id);
 
        $spontane = new Spontane();
        if (!empty($request->input('description') && $request->hasFile('lettre'))) {
        $spontane->user_id =Auth::user()->id;
        
        $spontane->description = $request->input('description');
       
        $spontane->entre_id = $company->id;
     

            $spontane->doc=$request->input('doc');
            if($request->hasFile('lettre')) {
                $avataruploaded = request()->file('lettre');
                $avatarname = time() .'.'. $avataruploaded->getClientOriginalExtension();
                $avatarpath = public_path('/images/');
            $avataruploaded->move($avatarpath,$avatarname);
               $spontane->lettre= '/images/' .$avatarname;
             }
      
        $spontane->save();
        return back()->with('message','vous avez bien spontaner');}
        else
        return back()->with('error','veuillez renseigner tous les champs');
     }
     public function accept($id,$email) {
         
        $acc = DB::table('spontanes')
        ->where('id', $id)
        ->update(['etat' => 1]);
        return redirect()->route('mail',
        [
            'email' => $email,
        ]
    );
    }
    public function refuse($id) {
             
        $acc = DB::table('spontanes')
        ->where('id', $id)
        ->delete();
        return redirect()->back();
    }
}
