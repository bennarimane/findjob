<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Company;
use App\spontane;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
   public function login(Request $request)
   {
  
       if(Auth::attempt([
'email' => $request->email,
'password' => $request->password

       ]))

       {

        $user = User::where('email', $request->email)->first();
        if($user->is_admin()==1)
        {   /*$notif = DB::table('users')
              ->join('companies', 'users.id', '=', 'companies.user_id')
              ->join('spontanes', 'spontanes.entre_id', '=', 'companies.id')  
              ->where('users.id', '=', Auth::user()->id)
              ->where('spontanes.lu', '=', 0)
              ->count();*/
 return redirect()->route('dashboard');

        }
        else
        return redirect()->route('home');
       }
       return redirect()->back();
   }
}
