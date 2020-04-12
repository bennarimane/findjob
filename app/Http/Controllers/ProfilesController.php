<?php

namespace App\Http\Controllers;
use Hash;
use Auth;
use Session;
use App\user;
use App\Cv;
use App\Experience;
use App\Formation;
use App\Competance;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class ProfilesController extends Controller
{
    public function index($name)
    {
        $user = User::where('name', $name)->first();
    
       $cvs = DB::table('users')
            ->join('cvs', 'users.id', '=', 'cvs.user_id')
            ->join('experiences', 'cvs.id', '=', 'experiences.cv_id')
            ->where('users.id','=',Auth::user()->id)
            ->get();
            $formations= DB::table('users')
            ->join('cvs', 'users.id', '=', 'cvs.user_id')
            ->join('formations', 'cvs.id', '=', 'formations.cv_id')
            ->where('users.id','=',Auth::user()->id)
            ->get();
            $competances= DB::table('users')
            ->join('cvs', 'users.id', '=', 'cvs.user_id')
            ->join('competances', 'cvs.id', '=', 'competances.cv_id')
            ->where('users.id','=',Auth::user()->id)
            ->get();
            return view('profiles.profile', ['user'=>$user,'cvs'=>$cvs,'formations'=>$formations,'competances'=>$competances]);
    }
    public function index1($name)
    {
        $user = User::where('name', $name)->first();
        return view('profiles.profilerec')
            ->with('user', $user);
    }
    public function edit()
    {
        return view('profiles.edit')->with('info', Auth::user());
    
    }
    public function update(Request $r)
    {
        $this->validate($r, [
            'location' => 'required',
            'date_naissance' => 'required',
            'linkin' =>'required',
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        Auth::user()->profile()->update([
            'location' => $r->location,
            'date_naissance' => $r->date_naissance,
            'linkin' =>$r->linkin
        ]);
        Auth::user()->update([
            'name' => $r->name,
            'lastname' => $r->lastname,
            'email' => $r->email,
            'phone' => $r->phone
        ]);
        if(request()->has('avatar')){
            $avataruploaded = request()->file('avatar');
            $avatarname = time() .'.'. $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/images/');
            $avataruploaded->move($avatarpath,$avatarname);
            Auth::user()->update([
                'avatar' => '/images/' .$avatarname
            ]);
        }
        Session::flash('success', 'Profile updated.');
        return redirect()->back();}

        public function changePasswordForm()
        {
            if(Auth::user()->admin == 0){
            return view('profiles.changepassword') ->with('info', Auth::user());}
            else
            return view('profiles.password') ->with('info', Auth::user());
        }
        public function changePassword(Request $request)
        {
            if(!(Hash::check($request->get('current_password'), Auth::user()->password))){

                return back()->with('error','votre mot de passe actuel ne correspond pas à ce que vous avez fourni');
            }
            if(strcmp($request->get('current_password'),$request->get('new_password'))==0)
            {
                return back()->with('error','votre mot de passe actuel ne peut pas être le même que le nouveau mot de passe');
            }
            $request->validate([
            'current_password'=>'required',
            'new_password'=>'required|string|min:8|confirmed'
            ]);
            $user =Auth::user();
            $user->password=bcrypt($request->get('new_password'));
            $user->save();
           return back()->with('message','Le mot de passe a été changé avec succès');
           
                
        }
        public function edit1()
        {
            return view('profiles.editrec')->with('info', Auth::user());
        
        }
        public function update1(Request $r)
        {
            $this->validate($r, [
         
                'name' => 'required',
                'lastname' => 'required',
                'email' => 'required',
                'phone' => 'required'
            ]);
       
            Auth::user()->update([
                'name' => $r->name,
                'lastname' => $r->lastname,
                'email' => $r->email,
                'phone' => $r->phone
            ]);
           
            Session::flash('success', 'Profile updated.');
            return redirect()->back();}

            public function indexprofile($id)
            {
                $user = User::where('id', $id)->first();
            
               $experiences= DB::table('users')
                    ->join('cvs', 'users.id', '=', 'cvs.user_id')
                    ->join('experiences', 'cvs.id', '=', 'experiences.cv_id')
                    ->where('users.id','=',$id)
                    ->get();
                    $formations= DB::table('users')
                    ->join('cvs', 'users.id', '=', 'cvs.user_id')
                    ->join('formations', 'cvs.id', '=', 'formations.cv_id')
                    ->where('users.id','=',$id)
                    ->get();
                    $competances= DB::table('users')
                    ->join('cvs', 'users.id', '=', 'cvs.user_id')
                    ->join('competances', 'cvs.id', '=', 'competances.cv_id')
                    ->where('users.id','=',$id)
                    ->get();
                    $langues= DB::table('users')
                    ->join('cvs', 'users.id', '=', 'cvs.user_id')
                    ->join('langues', 'cvs.id', '=', 'langues.cv_id')
                    ->where('users.id','=',$id)
                    ->get();
                    return view('profilecondidat', ['user'=>$user,'experiences'=>$experiences,'formations'=>$formations,'competances'=>$competances,'langues'=>$langues]);
            }
            public function getContact() {
                return view('contact');
            }
        
            function send(Request $request)
            {
             $this->validate($request, [
              'name'     =>  'required',
              'email'  =>  'required|email',
              'message' =>  'required'
             ]);
        
                $data = array(
                    'name'      =>  $request->name,
                    'message'   =>   $request->message
                );
        
             Mail::to('khadidjabrr71@gmail.com')->send(new SendMail($data));
             return back()->with('success', 'Merci de nous avoir contacté!');
        
            }
        
}
