<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\user;
use App\Job;
use App\Postule;
use Illuminate\Support\Facades\DB;
class PostulesController extends Controller
{
 public function store(Request $request,$id){
    $job = Job::find($id);
    $postule = new Postule();
    $postule->user_id =Auth::user()->id;
    if (!empty($request->input('nom') && $request->hasFile('lettre'))) {
    $postule->nom = $request->input('nom');
   
    $postule->job_id = $job->id;
    if($request->hasFile('doc')) {
        $avataruploaded = request()->file('doc');
        $avatarname = time() .'.'. $avataruploaded->getClientOriginalExtension();
        $avatarpath = public_path('/images/');
    $avataruploaded->move($avatarpath,$avatarname);
       $postule->doc= '/images/' .$avatarname;
       $avataruploadeds = request()->file('lettre');
       $avatarname2 = time() .'.'. $avataruploadeds->getClientOriginalExtension();
       $avatarpath3 = public_path('/images/');
   $avataruploadeds->move($avatarpath3,$avatarname2);
      $postule->lettre= '/images/' .$avatarname2;
     }
     else{
        $postule->doc=$request->input('doc');
        if($request->hasFile('lettre')) {
            $avataruploaded = request()->file('lettre');
            $avatarname = time() .'.'. $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/images/');
        $avataruploaded->move($avatarpath,$avatarname);
           $postule->lettre= '/images/' .$avatarname;
         }
     }
    $postule->save();
    return back()->with('message','vous avez bien postuler a cette offre');}
    else
    return back()->with('error','veuillez renseigner tous les champs');
}
public function accept($id,$email) {
         
    $acc = DB::table('postules')
    ->where('id', $id)
    ->update(['etat' => 1]);
    return redirect()->route('postule',
    [
        'email' => $email,
    ]
);
}
public function refuse($id) {
         
    $acc = DB::table('postules')
    ->where('id', $id)
    ->delete();
    return redirect()->back();
}
public function affiche() {
    $postuler = DB::table('postules')
    ->join('jobs', 'postules.job_id', '=', 'jobs.id')  
    ->select('postules.*','jobs.*')
    ->where('postules.user_id', '=', Auth::user()->id)
    ->get();
    return view('mespostulations', ['postuler' => $postuler,'info'=> Auth::user()]);
}
}
