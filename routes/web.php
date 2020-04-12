<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',['uses' => 'JobController@accueil','as' => 'accueil']);


Route::get('/joblist', function () {
    return view('joblist');
});
Route::get('/jobdetails', function () {
    return view('jobdetails');
});

Route::get('/resume', function () {
    return view('resume');});
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::get('/company', function () {
        return view('company');
});
Route::get('/modifierpro', function () {
    return view('modifierpro');
});
Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom',['uses' => 'LoginController@login','as' => 'login.custom']);
Route::group(['middleware' => 'auth'],function(){
Route::get('/home',function(){
   return view('home'); 
})->name('home');
Route::resource('cvs', 'CvController');
Route::resource('exp', 'ExperienceController');
Route::resource('for', 'FormationController');
Route::resource('cmp', 'CompetanceController');
Route::resource('lang', 'LangueController');
Route::delete('cvdelete', 'CvController@destroy');
Route::resource('jobs', 'JobController');
Route::resource('companies', 'CompanyController');
Route::get('cv/experience/create/{id}','CvController@cvExperienceCreate');
Route::get('cv/experience/show/{id}', 'CvController@cvExperienceShow');
Route::get('experiences/{id}', 'CvController@index1');

Route::get('Accpt/{id}/email/{email}', 'PostulesController@accept');
Route::get('refuse/{id}', 'PostulesController@refuse');
Route::get('spontaneaccpt/{id}/email/{email}', 'SpontanesController@accept');
Route::get('spontanerefuse/{id}', 'SpontanesController@refuse');
Route::get('condidature/{id}', 'profilesController@indexprofile');
Route::get('condidature/spontane/postuler/{name}/id/{id}', 'CvController@afficher');
Route::get('entreprise/{id}', 'CompanyController@index2');
Route::post('/profiles/modifier//a/b/c/d/e/r/f',['uses' => 'ExperienceController@update','as' => 'exp.update']);
Route::get('experience/{id}', 'ExperienceController@create');
Route::get('offre', 'JobController@create');
Route::get('profiles/createexp', 'ExperienceController@create');
Route::get('profiles/createcmp', 'CompetanceController@create');
Route::post('/offres/create','OffreController@storeOffre');
Route::get('/profiles/changepassword',['uses' => 'ProfilesController@changePasswordForm','as' => 'changepassword']);
Route::get('/profiles/mespostulations',['uses' => 'PostulesController@affiche','as' => 'mespostulations']);
Route::get('/profiles/mesfavorables',['uses' => 'FavoriteController@affiche','as' => 'mesfavorables']);
Route::get('/profiles/{name}',['uses' => 'ProfilesController@index','as' => 'profile']);
Route::get('/profiles/{name}/a/',['uses' => 'ProfilesController@index1','as' => 'profilerec']);
Route::get('/profiles/modifier//a',['uses' => 'ProfilesController@edit1','as' => 'profilerec.editrec']);
Route::post('/profiles/modifier//a/b',['uses' => 'ProfilesController@update1','as' => 'profilerec.update1']);
Route::get('/profiles/edit/profile',['uses' => 'ProfilesController@edit','as' => 'profile.edit']);
Route::get('/profiles/edit/profile/a/a/a/a/a/a/a/a/a/a/a/a/a/a/a/a/a/a',['uses' => 'CompanyController@edit','as' => 'company.edit']);
Route::get('/profiles/cv/profile/a',['uses' => 'CvController@modifier','as' => 'profile.cv']);
Route::post('/profiles/update/profile/a',['uses' => 'CvController@store','as' => 'profile.store']);
Route::post('/profiles/update/profile/a/b/c/{id}',['uses' => 'ExperienceController@store','as' => 'experience.store']);
Route::post('/profiles/update/profile/a/b/c/d/e/f/c/{id}',['uses' => 'ExperienceController@update','as' => 'experience.update']);
Route::post('/profiles/update/profile/a/b/c/d/e/f/c/d/d/a/{id}',['uses' => 'FormationController@update','as' => 'formation.update']);
Route::post('/profiles/update/profile/a/b/c/d/e/f/c/d/d/a/d/{id}',['uses' => 'CompetanceController@update','as' => 'competance.update']);
Route::post('/profiles/update/profile/a/b/c/b/{id}',['uses' => 'CompetanceController@store','as' => 'competance.store']);
Route::post('/profiles/update/profile/a/b/c/b/c/{id}',['uses' => 'FormationController@store','as' => 'formation.store']);
Route::post('/profiles/update/profile/a/b/c/d/e/f/g/{id}',['uses' => 'langueController@store','as' => 'langue.store']);
Route::post('/profiles/update/profile/a/b/c/d/e/f/g/f/a/{id}',['uses' => 'JobController@storeOffre','as' => 'offre.store']);
Route::post('/profiles/update/profile',['uses' => 'ProfilesController@update','as' => 'profile.update']);
Route::post('/profiles/update/password',['uses' => 'ProfilesController@changePassword','as' => 'profile.updatepassword']);
Route::post('/profiles/update/profile/company',['uses' => 'CompanyController@updatecompany','as' => 'company.update']);
Route::get('offres', 'JobController@index1');

Route::get('/dashboard',function(){
    return view('dashboard'); 
 })->name('dashboard');
}

);


//Route::post('company/create/infor',['uses' => 'CompanyController@storeCompany','as' => 'company.store']);
Route::post('company/create/information/spontane/{id}',['uses' => 'SpontanesController@store','as' => 'spontane.store']);
Route::post('/offre/create/{id}',['uses' => 'JobController@storeOffre','as' => 'offre.store']);
Route::get('/inbox', function () {
    return view('inbox');
});
Route::get('/profilsettings', function () {
    return view('profilsettings');
});
Route::get('/offrelist', function () {
    return view('offrelist');
});

Route::get('/mycompany', function () {
    return view('mycompany');
});
Route::get('companiess', 'CompanyController@index1');
Route::get('listcandida', 'CompanyController@listecondidat');

Route::post('/profiles/update/job/{id}',['uses' => 'JobController@update','as' => 'offre.update']);
Route::post('/profiles/update/profile/a/b/{id}',['uses' => 'PostulesController@store','as' => 'postuler.store']);
Route::get('/accueil/recherche/offre',['uses' => 'JobController@barrerecherche','as' => 'recherche']);
Route::get('/accueil/recherche/offre/type',['uses' => 'JobController@recherchetype','as' => 'type']);
Route::get('/dynamic_pdf/pdf/{id}', 'DynamicPDFController@pdf');
Route::get('/dynamic_pdf/pdf/postule/{id}', 'DynamicPDFController@pdf2');
Route::get('send-mail','MailSend@mailsend');
Route::get('/test/{email}',function($email){
$to_name='candidat';
$to_email=$email;
$data=array('name'=>'Find jobs','body'=>"Suite à l’annonce que vous avez publiée dans (précisez le support), je vous propose ma candidature.


En effet, cette offre a retenu toute mon attention.


J’occupe actuellement un poste de (précisez) dans une entreprise de (précisez). Cette expérience m’a permis d’acquérir des compétences en matière de (précisez), ce qui semble indispensable pour mener à bien la mission que vous proposez.


En outre, votre secteur d’activité (ou votre entreprise) m’intéresse tout particulièrement. En effet, (précisez les raisons pour lesquelles ce secteur d’activité ou cette entreprise vous intéresse).


Je serai donc ravi(e) de mettre mes compétences au service de votre entreprise.


Je me tiens à votre disposition pour toute information complémentaire.


En vous remerciant d’avance, je vous prie d’agréer, Madame, Monsieur, mes respectueuses salutations.");
Mail::send('mail',$data,function($message) use ($to_name,$to_email){
$message->to($to_email)->subject('Postulation');


});
echo "l'email a été envoyé";
})->name('mail');


//Route::get('chart/annee/{annee}', 'ChartController@index');
Route::get('chart/annee',['uses' => 'ChartController@index2','as' => 'chart']);

Route::get('chart/{annee}', 'ChartController@index');
Route::get('chart/abc/a/a/a/a', 'ChartController@highchart3');
Route::get('chart/abc/a/a', 'ChartController@highchart');
Route::get('users', 'ChartController@index5');
Route::get('/recruteur/barChart','ChartController@viewChartBar');
Route::get('bar/chart/annee',['uses' => 'ChartController@charbar','as' => 'chartbar']);
Route::get('bar/chart/sponane',['uses' => 'ChartController@charbar2','as' => 'chartbar2']);
Route::get('Recruteur/chart/',['uses' => 'ChartController@viewChartBar2','as' => 'chartbar3']);
Route::get('emploi', 'JobController@index2');
Route::get('emplois/{id}', 'JobController@indexjob');
Route::get('contact', 'ProfilesController@getContact')->name('contact.create');
Route::post('contact', 'ProfilesController@postContact')->name('contact.store');



Route::get('/sendemail', 'ProfilesController@getContact');
Route::post('/sendemail/send', 'ProfilesController@send');
Route::group(['middleware'=>['auth']], function (){
    Route::get('favorite/{id}','FavoriteController@add');
    Route::get('favorite/sup/{id}','FavoriteController@delete');
   // Route::post('comment/{post}','CommentController@store')->name('comment.store');
 });

 Route::namespace('Admin')->group(function(){
    Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\LoginController@login');
    Route::get('/admin/home', 'AdminController@index')->name('admin.home');
   Route::get('/admin/listecandi', 'AdminController@affichage');
   Route::get('/admin/listerec', 'AdminController@affichageRec');
   Route::resource('user', 'AdminController');
   Route::get('/admin/listecomp', 'AdminController@affichageComp');
   Route::resource('comp', 'AdminController');
   Route::get('/admin/ajouter', 'AdminController@ajou')->name('register.add');
   Route::post('/ajouter/admin',['uses' => 'AdminController@create','as' => 'ajou.admin']);
});
Route::get('chart/chart/chart', 'ChartController@category');
Route::get('/postule/accept/{email}',function($email){
    $to_name='candidat';
    $to_email=$email;
    $data=array('name'=>'Find jobs','body'=>"Suite à votre participation à l'offre publier par notre entreprise, Nous avons l'honneur de vous accueillir dans un Entretien le plutot possible.Veuillez nous contacter pour prendre un rendez-vous!Bienvenu(es) ");
    Mail::send('mail',$data,function($message) use ($to_name,$to_email){
    $message->to($to_email)->subject('Postulation');
    
    
    });
    echo "l'email a été envoyé";
    })->name('postule');