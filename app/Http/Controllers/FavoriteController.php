<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Post_user;
use App\Company;
use Auth;
use Illuminate\Support\Facades\DB;
class FavoriteController extends Controller
{

    public function add($id)
    {
        $job = Job::find($id);
        $post = new Post_user();
        $post->user_id =Auth::user()->id;
        $post->job_id = $job->id;
        $post->save();
        return redirect()->back();
    }
    
    public function delete($id)
    {
       $job= Job::find($id);
       $r=$job->id;
     
        
        $favor = DB::table('post_users')
        ->where('user_id', Auth::user()->id)
        ->where('job_id',$r)
        ->delete();
        return redirect()->back();
    }
    public function affiche() {
        $job_favo = DB::table('post_users')
        ->join('jobs', 'post_users.job_id', '=', 'jobs.id')  
        ->join('companies', 'jobs.user_id', '=', 'Companies.id')  
        ->where('post_users.user_id', '=', Auth::user()->id)
        ->select('jobs.*','companies.logo')
        ->get();
        return view('mesfavorables', ['favor' => $job_favo,'info'=> Auth::user()]);
    }
}
