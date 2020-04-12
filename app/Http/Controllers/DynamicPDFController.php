<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use Auth;
class DynamicPDFController extends Controller
{   function get_cv_data1($id)
    {
     $cv_data = DB::table('cvs')
     ->where('cvs.user_id','=',Auth::user()->id)
     ->where('cvs.id','=',$id)
         ->get();
     return $cv_data;
    } 
    function get_cv_data($id)
    {
     $cv_data = DB::table('cvs')
     ->join('experiences','cvs.id','=','experiences.cv_id')
     ->where('cvs.user_id','=',Auth::user()->id)
     ->where('cvs.id','=',$id)
         ->get();
     return $cv_data;
    }   
    function get_formation_data($id)
    {
     $cv_data = DB::table('cvs')
     ->join('formations','cvs.id','=','formations.cv_id')
     ->where('cvs.user_id','=',Auth::user()->id)
     ->where('cvs.id','=',$id)
         ->get();
     return $cv_data;
    }
    function get_langue_data($id)
    {
     $cv_data = DB::table('cvs')
     ->join('langues','cvs.id','=','langues.cv_id')
     ->where('cvs.user_id','=',Auth::user()->id)
     ->where('cvs.id','=',$id)
         ->get();
     return $cv_data;
    }

    function get_competance_data($id)
    {
     $cv_data = DB::table('cvs')
     ->join('competances','cvs.id','=','competances.cv_id')
     ->where('cvs.user_id','=',Auth::user()->id)
     ->where('cvs.id','=',$id)
         ->get();
     return $cv_data;
    }
    function pdf($id)
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_cv_data_to_html($id));
     return $pdf->stream();
    }

    function convert_cv_data_to_html($id)
    { $cv_data1 = $this->get_cv_data1($id);
     $cv_data = $this->get_cv_data($id);
     $formations_data = $this->get_formation_data($id);
     $langues_data = $this->get_langue_data($id);
     $competance_data = $this->get_competance_data($id);

     
     $output = '
   <h5>'.Auth::user()->customRadio.'  '.Auth::user()->name.'  '.Auth::user()->lastname.'</h5>
   <h5>Numero de telephone:'.Auth::user()->phone.'</h5>
   <h5 align="right">Email:'.Auth::user()->email.'</h5> 
   <h5 align="right">Linked in:'.Auth::user()->profile->linkin.'</h5>
     ';  
    
     foreach($cv_data1 as $cv)
     {
      $output .= '
  
     <h2 align="center" style="color:red;">'.$cv->titre .'</h2 >
    
    
      ';
     }

     $output .= '
     
     <h3 align="center" style="color:green;">Mes experiences</h3>
  
     ';  
     foreach($cv_data as $cv)
     {
      $output .= '
  
    <li><h4 style="color:blue;">'.$cv->intitule .'</h4 > 
    <h5 >a:'.$cv->lieu.' </h5 >   <h5 > de:'.$cv->debut.'  jusqua: '.$cv->fin.' </h5 ></li>
 <h5 style="color:blue;">Descripion</h5><p>'.$cv->description.'</p>
    
      ';
     }
     $output .= '
     
     <h3 align="center" style="color:green;">Mes Formations</h3>
  
     ';  
     foreach($formations_data as $formation)
     {
      $output .= '
      
    <li style="color:blue;">Titre</li> <h5 >'.$formation->titre .'</h5 > 
    <li style="color:blue;">Diplome</li> <h5 >'.$formation->diplome .'</h5 >
    <li style="color:blue;">Domaine</li><h5 >'.$formation->domaine .'</h5 >
    <li style="color:blue;">Etablissement</li> <h5 >'.$formation->etablissement .'</h5 >
    <li style="color:blue;">lieu</li> <h5 >a:'.$formation->lieu.'    </h5 >   <li></li>  <h5 > de:'.$formation->debut.'  jusqua: '.$formation->fin.' </h5 >
     <li style="color:blue;" > descripion </li>
     <p>'.$formation->description.'</p>
    
      ';
     }
     $output .= '
     
     <h3 align="center" style="color:green;">Langues</h3>
  
     ';  
     foreach($langues_data as $langue)
     {
      $output .= '
  
      <li style="color:blue;">Langue : </li> <h5 >'.$langue->lang .'</h5 >
   
    
      ';
    }
    $output .= '
     
    <h3 align="center" style="color:green;">Mes Competences</h3>
 
    ';  
    foreach($competance_data as $competance)
    {
     $output .= '
 
     <li style="color:blue;">Description</li> <p>'.$competance->description .'</p >
  
   
     ';
    }
   
     $output .= '';
     return $output;
    }



    function get_cv($id)
    {
     $cv_data = DB::table('cvs')
     ->where('cvs.id','=',$id)
         ->get();
     return $cv_data;
    } 
    function get_cv2($id)
    {
     $cv_data = DB::table('cvs')
     ->join('experiences','cvs.id','=','experiences.cv_id')
     ->where('cvs.id','=',$id)
         ->get();
     return $cv_data;
    }   
    function get_formation($id)
    {
     $cv_data = DB::table('cvs')
     ->join('formations','cvs.id','=','formations.cv_id')
 
     ->where('cvs.id','=',$id)
         ->get();
     return $cv_data;
    }
    function get_langue($id)
    {
     $cv_data = DB::table('cvs')
     ->join('langues','cvs.id','=','langues.cv_id')

     ->where('cvs.id','=',$id)
         ->get();
     return $cv_data;
    }

    function get_competance($id)
    {
     $cv_data = DB::table('cvs')
     ->join('competances','cvs.id','=','competances.cv_id')
    
     ->where('cvs.id','=',$id)
         ->get();
     return $cv_data;
    }





    function pdf2($id)
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_cv_data_to_html2($id));
     return $pdf->stream();
    }

    function convert_cv_data_to_html2($id)
    { $cv_data1 = $this->get_cv($id);
     $cv_data = $this->get_cv2($id);
     $formations_data = $this->get_formation($id);
     $langues_data = $this->get_langue($id);
     $competance_data = $this->get_competance($id);

     
     $output = '
  
     ';  
    
     foreach($cv_data1 as $cv)
     {
      $output .= '
  
     <h2 align="center" style="color:red;">'.$cv->titre .'</h2 >
    
    
      ';
     }

     $output .= '
     
     <h3 align="center" style="color:green;">Mes experiences</h3>
  
     ';  
     foreach($cv_data as $cv)
     {
      $output .= '
  
    <li><h4 style="color:blue;">'.$cv->intitule .'</h4 > 
    <h5 >a:'.$cv->lieu.' </h5 >   <h5 > de:'.$cv->debut.'  jusqua: '.$cv->fin.' </h5 ></li>
 <h5 style="color:blue;">Descripion</h5><p>'.$cv->description.'</p>
    
      ';
     }
     $output .= '
     
     <h3 align="center" style="color:green;">Mes Formations</h3>
  
     ';  
     foreach($formations_data as $formation)
     {
      $output .= '
      
    <li style="color:blue;">Titre</li> <h5 >'.$formation->titre .'</h5 > 
    <li style="color:blue;">Diplome</li> <h5 >'.$formation->diplome .'</h5 >
    <li style="color:blue;">Domaine</li><h5 >'.$formation->domaine .'</h5 >
    <li style="color:blue;">Etablissement</li> <h5 >'.$formation->etablissement .'</h5 >
    <li style="color:blue;">lieu</li> <h5 >a:'.$formation->lieu.'    </h5 >   <li></li>  <h5 > de:'.$formation->debut.'  jusqua: '.$formation->fin.' </h5 >
     <li style="color:blue;" > descripion </li>
     <p>'.$formation->description.'</p>
    
      ';
     }
     $output .= '
     
     <h3 align="center" style="color:green;">Langues</h3>
  
     ';  
     foreach($langues_data as $langue)
     {
      $output .= '
  
      <li style="color:blue;">Langue : </li> <h5 >'.$langue->lang .'</h5 >
   
    
      ';
    }
    $output .= '
     
    <h3 align="center" style="color:green;">Mes Competences</h3>
 
    ';  
    foreach($competance_data as $competance)
    {
     $output .= '
 
     <li style="color:blue;">Description</li> <p>'.$competance->description .'</p >
  
   
     ';
    }
   
     $output .= '';
     return $output;
    }
}
