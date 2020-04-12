@extends('layouts.master')
@section('titre','Modifier profil')
@section('content1')
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">

                        <h5 class="text-white mb-2">Michael Brown</h5>
                        <p class="text-white-50 h6 mb-2"><i class="mdi mdi-bank mr-2"></i>Web Themes.pvt.Ltd</p>
                        <p class="text-white-50 h6 mb-2">PHP Developer</p>
                        <ul class="candidates-profile-icons list-inline mb-3">
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                        </ul>

                        <ul class="list-unstyled social-icon social mb-0">
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

                        <div class="col-lg-12 mt-4 pt-2">
                            <div class="component-wrapper rounded shadow">
                                <div class="p-4 border-bottom bg-light">
                                    <h4 class="title mb-0"> Nav Tabs </h4>
                                </div>
    
                                <div class="p-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="nav nav-pills nav nav-pills bg-white rounded nav-justified flex-column flex-sm-row" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link rounded active" id="pills-cloud-tab" data-toggle="pill" href="#pills-cloud" role="tab" aria-controls="pills-cloud" aria-selected="true">Paramètres</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link rounded" id="pills-smart-tab" data-toggle="pill" href="#pills-smart" role="tab" aria-controls="pills-smart" aria-selected="false">Mes CVs</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link rounded" id="pills-apps-tab" data-toggle="pill" href="#pills-apps" role="tab" aria-controls="pills-apps" aria-selected="false">Service</a>
                                                </li>
                                            </ul>
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <div class="row mt-4 pt-2">
                                        <div class="col-12">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-cloud" role="tabpanel" aria-labelledby="pills-cloud-tab">
                                                       
<script type="text/javascript"> 
function bascule(id) 
{ 
    if (document.getElementById(id).style.visibility == "hidden")
            document.getElementById(id).style.visibility = "visible"; 
    else    document.getElementById(id).style.visibility = "hidden";
 if (document.getElementById(id).style.visibility == "hidden1")
            document.getElementById(id).style.visibility = "visible"; 
    else    document.getElementById(id).style.visibility = "hidden1";
     if (document.getElementById(id).style.visibility == "hidden2")
            document.getElementById(id).style.visibility = "visible"; 
    else    document.getElementById(id).style.visibility = "hidden2";
         if (document.getElementById(id).style.visibility == "hidden3")
            document.getElementById(id).style.visibility = "visible"; 
    else    document.getElementById(id).style.visibility = "hidden3";  } 
</script> 
 
 
<div class="float-right" id="bouton" onclick="bascule('header');">Modifier</div> 
<div class="float-left">Modifier le nom & le prenom:</div> <br>
 
<div id="header">      <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Nom</label>
                                        <input name="name" id="name2" type="text" class="form-control resume" placeholder="Enter Name..">
                                    </div>
                                </div>
                               <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Prenom</label>
                                        <input name="name" id="name2" type="text" class="form-control resume" placeholder="Enter Name..">
                                    </div>
                                </div>
                            
                            
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Modifier">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form></div>
                        <br> <br>
<div class="float-right" id="bouton" onclick="bascule('header1');">Modifier</div> 
<div class="float-left">Modifier Votre email:</div> <br>
 
<div id="header1">      <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Email</label>
                                        <input name="nmail" id="name2" type="text" class="form-control resume" placeholder="exmple@...">
                                    </div>
                                </div>
                            

                            
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Modifier">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form></div><br>

<div class="float-right" id="bouton" onclick="bascule('header2');">Modifier</div> 
<div class="float-left">Modifier Votre numero de telephone:</div> <br>
 
<div id="header2">      <form method="post" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Numero de telephone</label>
                                        <input name="name" id="name2" type="text" class="form-control resume" placeholder="+213000000">
                                    </div>
                                </div>
                            

                            
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Modifier">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form></div>


<br><div class="float-right" id="bouton" onclick="bascule('header3');">Modifier</div> 
<div class="float-left">Modifier Votre Mot de passe:</div> <br>
 
<div id="header3">      <form method="post" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Ancien mot de passe</label>
                                        <input name="password" id="name2" type="text" class="form-control resume" placeholder="*************">
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Nouveau mot de passe</label>
                                        <input name="password" id="name2" type="text" class="form-control resume" placeholder="*************">
                                    </div>
                                </div>
                                     <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Confirmer mot de passe</label>
                                        <input name="password" id="name2" type="text" class="form-control resume" placeholder="***************">
                                    </div>
                                </div>

                            
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Modifier">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form></div>


                                                </div><!--end teb pane-->
                                                
                                                <div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
                                                    <p class="text-muted mb-0"> 
        <div class="container">
             <div class="p-4">
                               

            <div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4">
                      

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter cv</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/insert" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titre CV <span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
               <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Langue de cv </label>
            <select class="form-control" id="recipient-name">
                <option>Francais</option>
                <option>Arabe</option>
            </select>
          </div>
                 <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Statut/Visibilité </label>
            <select class="form-control" id="recipient-name">
                <option>Activé</option>
                <option>Desactivé</option>
            </select>
            <p>Votre CV est activé et peut être consulté par les recruteurs.
</p>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Pièce jointe</label>
              <input type="file" class="form-control" >
          </div>
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ok</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

                        <ul class="list-inline pt-3 border-top mb-0">
                            <li class="list-inline-item mr-3">
                              <h4> Mes CVs</h4>
                            </li>

                            <li class="list-inline-item mr-3">
                               
                            </li>

                            <li class="list-inline-item mr-3">
                               
                            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <li class="list-inline-item mr-3">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">+</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

<div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4">


<div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Nouvelle expérience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titre du poste <span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
               <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Date de début </label>
               <input type="date" class="form-control" id="recipient-name">
          </div>
                     <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Date de fin </label>
               <input type="date" class="form-control" id="recipient-name">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nom de l'enreprise  <span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Lieu <span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
             <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ok</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

                        <ul class="list-inline pt-3 border-top mb-0">
                            <li class="list-inline-item mr-3">
                              <h4> Expérience</h4>
                            </li>

                            <li class="list-inline-item mr-3">
                               
                            </li>

                            <li class="list-inline-item mr-3">
                               
                            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                            <li class="list-inline-item mr-3"style="">
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example" >+</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4">
                      



<div class="modal fade" id="example3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal3">Nouvelle formation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titre de la formation  <span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
               <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Date de début </label>
               <input type="date" class="form-control" id="recipient-name">
          </div>
                     <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Date de fin </label>
               <input type="date" class="form-control" id="recipient-name">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nom de l'établissement  <span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Lieu <span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
                 <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Type d'établissement</label>
            <select>
                <option>Lycee</option>
                <option>Autre</option>
            </select>
          </div>
                 <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Niveau d'études</label>
            <select class="form-control" id="recipient-name">
                <option>Niveau secondaire</option>
                <option>Niveau terminal</option>
                 <option>Formation Professionnelle</option>
                <option>Bacculaureat</option>
                 <option>Universitaire sans diplome</option>
                <option>TS Bac +2</option>
                 <option>Licence(LMD),Bac+3</option>
                <option>Master 1,bac+4</option>
                 <option>Master 2,bac+5 </option>
                 <option> Magistere bac+7</option>
                 <option>Doctorat</option>
                 <option>Certification</option>
            </select>
          </div>
             <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ok</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

                        <ul class="list-inline pt-3 border-top mb-0">
                            <li class="list-inline-item mr-3">
                              <h4> Diplômes et formations</h4>
                            </li>

                            <li class="list-inline-item mr-3">
                               
                            </li>

                            <li class="list-inline-item mr-3">
                               
                            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <li class="list-inline-item mr-3">
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example3" >+</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          
 <div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4">
                      



<div class="modal fade" id="example4" tabindex="-1" role="dialog" aria-labelledby="exampleModal4" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal4">Langue</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Langue  <span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
             
         
          
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ok</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

                        <ul class="list-inline pt-3 border-top mb-0">
                            <li class="list-inline-item mr-3">
                              <h4> Langues</h4>
                            </li>

                            <li class="list-inline-item mr-3">
                               
                            </li>

                            <li class="list-inline-item mr-3">
                               
                            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <li class="list-inline-item mr-3">
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example4" >+</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          
          
<div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4">
                      



<div class="modal fade" id="example5" tabindex="-1" role="dialog" aria-labelledby="exampleModal5" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal5">Compétences</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description <span style="color: red;">*</span></label>
             <textarea class="form-control" id="message-text"></textarea>
          </div>
             
         
          
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ok</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

                        <ul class="list-inline pt-3 border-top mb-0">
                            <li class="list-inline-item mr-3">
                              <h4> Compétences</h4>
                            </li>

                            <li class="list-inline-item mr-3">
                               
                            </li>

                            <li class="list-inline-item mr-3">
                               
                            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <li class="list-inline-item mr-3">
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example5" >+</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          
        
            </div>



      
        </div>
                      
                                                </div><!--end teb pane-->
                    
                                                <div class="tab-pane fade" id="pills-apps" role="tabpanel" aria-labelledby="pills-apps-tab">
                                                                    
                                                </div><!--end teb pane-->
                                            </div><!--end tab content-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                            </div>
                        </div>