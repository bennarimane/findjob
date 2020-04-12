@extends('layouts.app')
@section('content')


<div class="page-container">
            <div class="main-content">
            <div class="section__content section__content--p30">
            <div id="message">  @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-sm-center">
                   
                 &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                    <button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#scrollmodal">
                    <i class="fa fa-plus-circle"></i> 	Publier une offre
										</button>
                  
                    @foreach ($companies as $company)
                        <img src="{{$company->logo}}"alt="" class="img-fluid mx-md-auto d-block">
                        <h4 class="mt-3"><a href="#" class="text-dark">{{$company->entreprise}}</a></h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{{$company->adresse}},{{$company->wilaya}},{{$company->pays}}</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-success mb-0"><i class="mdi mdi-bookmark-check mdi-18px mr-2"></i>Verified</p>
                            </li>
                        </ul>

                        <ul class="list-inline mb-2">
                            <li class="list-inline-item mr-3 ">
                                <p class="text-muted"><i class="mdi mdi-earth mr-2"></i>{{$company->site}}</p>
                            </li>

                            <li class="list-inline-item mr-3">
                                <p class="text-muted"><i class="mdi mdi-email mr-2"></i>{{$company->email}}</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted"><i class="mdi mdi-cellphone-iphone mr-2"></i>{{$company->tlp}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row" >
                <div class="col-lg-12" >
                    <div class="border-top border-bottom pt-4 pb-4" style="background: white;">
                        <div class="row justify-content-sm-center">
                          

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Type</h5>
                                    <p class="text-muted mb-0">{{$company->type}}</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Willaya</h5>
                                    <p class="text-muted mb-0">{{$company->wilaya}}</p>
                                </div>
                            </div>
                    

                      
                        </div>
                    </div>
                </div>
            </div>
      
            <div class="row">
                <div class="col-lg-12 mt-4 pt-2" >
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description d'entreprise:</h4>
                    <div class="rounded border p-4 mt-3" style="background: white;">
                        <p class="text-muted">{{$company->description}}.</p>
                    </div>
                </div>
            </div>



            <br>

             
            </div>
            <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="scrollmodalLabel">Ajouter une offre</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('offre.store',[$company->id]) }}"  method="post"  class="form-horizontal">
              @csrf
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="text-input" class=" form-control-label">Intitulé du poste</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="text" id="text-input" name="intitule" placeholder="Ingénieur" class="form-control @error('intitule') is-invalid @enderror" value="{{ old('intitule') }}" required autocomplete="intitule" autofocus>
                                                               @error('intitule')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
           
                                                         <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="select" class=" form-control-label">Domaine</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <select name="domaine" id="select" class="form-control @error('domaine') is-invalid @enderror"  value="{{ old('domaine') }}" required autocomplete="domaine" autofocus>
                                                                   
                                                                 
                                                                
                                                                
                                                                   <optgroup label="A">
                                                        <option value="Architecte" >Architecte</option>
                                                        <option value="Ascensoriste" >Ascensoriste</option>
                                                        <option value="Assistant de projet">Assistant de projet</option>
                                                </optgroup>
                                                <optgroup label="C">
                                                        <option value="Carreleur">Carreleur</option>
                                                        <option value="Couvreur">Couvreur</option>
                                                        <option value="Conducteur">Conducteur</option>
                                                        <option value="Comptabilite">Comptabilite</option>
                                                        <option value="Chef de chantier">Chef de chantier</option>
                                                        <option  value="Chef de la sécurité">Chef de la sécurité</option>
                                                        <option value="Chef de projet">Chef de projet</option>
                                                </optgroup>
                                                <optgroup label="D">
                                                <option value="Directeur de sécurité">Directeur de la sécurité</option>
                                                <option  value="Directeur des services">Directeur des services</option>
                                                <option value="Délégué">Délégué</option>
                                                </optgroup>
                                                <optgroup label="E">
                                                <option value="Education">Education</option>
                                                        <option value="Electricien">Electricien</option>
                                                        <option value="Estimateur">Estimateur</option>
                                                        <option value="Étanchéiste" >Étanchéiste</option>
                                                </optgroup>
                                                <optgroup label="F">
                                                        <option value="Façadier">Façadier</option>
                                                </optgroup>
                                                <optgroup label="G">
                                                <option value="Gestion">Gestion</option>
                                                        <option value="Grutier">Grutier</option>
                                                </optgroup>
                                                <optgroup label="I">
                                                <option value="Informatique">Informatique</option>
                                                        <option value="Ingénieur civil">Ingénieur civil</option>
                                                        <option value="Ingénieur en bâtiment" >Ingénieur en bâtiment</option>
                                                        <option value="Ingénieure réseau">Ingénieure réseau</option>
                                                        <option value="Ingénieur structures">Ingénieur structures</option>
                                                        <option value="Inspecteur">Inspecteur</option>
                                                        <option value="Installateur de panneaux solaires">Installateur de panneaux solaires</option>
                                                </optgroup>
                                                <optgroup label="M">
                                                        <option value="Maçon">Maçon</option>
                                                        <option value="Main oeuvre">Main oeuvre</option>
                                                        <option value="Menuisier">Menuisier</option>
                                                        <option value="Menuisier Aluminium">Menuisier Aluminium</option>
                                                        <option value="Métreur">Métreur</option>
                                                        <option value="Miroitier">Miroitier</option>
                                                        
                                                        <option value="Mecanique">Mecanique</option>
                                    
                                                                
                                    <option value="Marketing">Marketing</option>

                                    <option value="Maintenancier">Maintenancier</option>
                                
                                  
                                   
                                 
                                  
                                    <option value="Marketing">Marketing</option>
                                                </optgroup>
                                                <optgroup label="P">
                                                        <option value="Peintre">Peintre</option>
                                                        <option value="Planificateur">Planificateur</option>
                                                        <option value="Plâtrier">Plâtrier</option>
                                                        <option value="Plombier">Plombier</option>
                                                </optgroup>
                                                <optgroup label="R">
                                                <option value="Responsable d'achat">Responsable d'achat</option>
                                                </optgroup>
                                                <optgroup label="S">
                                                <option value="Securite">Securite</option>
                                                <option value="Secrétariat">Secrétariat</option>
                                                <option value="Sante">Santé</option>
                                                        <option value="Soudeur">Soudeur</option>
                                                </optgroup>
                                                <optgroup label="T">
                                                <option value="Technique">Technique</option>
                                                <option value="Transport">Transport</option>
                                                <option value="Tuyauteur" >Tuyauteur</option>
                                                </optgroup>
                                                <optgroup label="U">
                                                <option value="Urbanisme">Urbanisme</option></optgroup>
                                                               </select>
                                                               @error('domaine')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="multiple-select" class=" form-control-label">Diplomes requis</label>
                                                           </div>
                                                           <div class="col col-md-9">
                                                           <select name="diplome" id="select" class="form-control @error('diplome') is-invalid @enderror"  value="{{ old('diplome') }}" required autocomplete="diplome" autofocus>
                                                                   <option value="BEM">BEM</option>
                                                                   <option value="BAC">BAC</option>
                                                                   <option value="BAC+1">BAC+1</option>
                                                                   <option value="BAC+2">BAC+2</option>
                                                                   <option value="BAC+3">BAC+3</option>
                                                                   <option value="BAC+4 ou master 1">BAC+4 ou master 1</option>
                                                                   <option value="BAC+5 ou master 2">BAC+5 ou master 2</option>
                                                                   <option value="doctorat">DOCTORAT</option>
                                                               </select>
                                                              @error('diplome')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
           
           
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="text-input" class=" form-control-label">Nombre d'années d'expérience</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="number" id="text-input" name="experience" placeholder="2ans" class="form-control @error('experience') is-invalid @enderror"  value="{{ old('experience') }}" required autocomplete="experience" autofocus>
                                                               @error('experience')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
           
           
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="textarea-input" class=" form-control-label">Description de l'offre</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control @error('description') is-invalid @enderror"  value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                                                               @error('description')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
           
           
           
           
           
           
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="lieu" class=" form-control-label">Lieu de travail</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               
                                                           <select name="lieu" id="select" class="form-control @error('lieu') is-invalid @enderror"  value="{{ old('lieu') }}" required autocomplete="lieu" autofocus>
                                                           <option value="Adrar">Adrar 01</option>
                                    <option value="Chlef">Chlef 02</option>
                                    <option value="Laghouat">Laghouat 03</option>
                                    <option value="Oum El Bouaghi ">Oum El Bouaghi 04</option>
                                    <option value="Batna">Batna 05</option>
                                    <option value="Béjaïa">Béjaïa 06</option>
                                    <option value="Biskra">Biskra 07</option>
                                    <option value="Béchar">Béchar 08</option>
                                    <option value="blida">blida 09</option>
                                    <option value="Bouira">Bouira 10</option>
                                    <option value="Tamanrasset">Tamanrasset 11</option>
                                    <option value="Tébessa">Tébessa 12</option>
                                    <option value="Tlemcen">Tlemcen 13</option>
                                    <option value="Tiaret">Tiaret 14</option>
                                    <option value="Tizi Ouzou">Tizi Ouzou 15</option>
                                     <option value="Alger">Alger 16</option>
                                    <option value="Djelfa">Djelfa 17</option>
                                    <option value="Jijel ">Jijel 18</option>
                                    <option value="Sétif">Sétif 19</option>
                                  <option value="saida">Saida 20</option>
                                    <option value="Skikda">Skikda 21</option>
                                    <option value="sidi belabes">sidi be abbes 22</option>
                                    <option value="annaba">Annaba 23</option>
                                    <option value="ghalma">Gualma 24</option>
                                    <option value="Costantine">Costantine 25</option>
                                     <option value="media">media 26</option>
                                    <option value="mostaganem">Mostaganem 27</option>
                                    <option value="Msila">Msila 28</option>
                                    <option value="Mascara">Mascara 29</option>
                                    <option value="ourgla">ourgla 30</option>
                                <option value="Oran">Oran 31</option>
                                                               </select>
                                                              
                                                               @error('lieu')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
           
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="textarea-input" class=" form-control-label">Compétences pour le poste</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <textarea name="competence" id="textarea-input" rows="9" placeholder="Content..." class="form-control @error('competence') is-invalid @enderror"  value="{{ old('competence') }}" required autocomplete="competence" autofocus></textarea>
                                                            @error('competence')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
                                                        <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="remun" class=" form-control-label">Rémunération</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="text" id="remun" name="remun" placeholder="00.00DA" class="form-control @error('remun') is-invalid @enderror"  value="{{ old('remun') }}" required autocomplete="remun" autofocus>
                                                               @error('remun')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
                                                        <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="date" class=" form-control-label">Date de depot de l'offre</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="date" id="date" name="depot" placeholder="Ajouter un lieu" class="form-control @error('depot') is-invalid @enderror" value="{{ old('depot') }}" required autocomplete="depot" autofocus>
                                                               @error('depot')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label class=" form-control-label">Type de l'offre</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               
                                                                      
                                                                      <select name="type" class="form-control">
                                                                      <option value="CDD">CDD</option>
                                                                      <option value="CDI">CDI</option>
                                                                      <option value="Stage">Stage</option>
                                                                      </select> 
                                                                       @error('type')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                               
                                                           </div>
                                                       </div>
                                                      <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="date" class=" form-control-label">Date de debut  de l'offre</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="date" id="date" name="debut" placeholder="Ajouter un lieu" class="form-control @error('debut') is-invalid @enderror"  value="{{ old('debut') }}" required autocomplete="debut" autofocus>
                                                               @error('debut')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
                                                    <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="date" class=" form-control-label">Dernier délai de postulation</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="date" id="date" name="delai" placeholder="Ajouter un lieu" class="form-control @error('delai') is-invalid @enderror"  value="{{ old('delai') }}" required autocomplete="delai" autofocus>
                                                               @error('delai')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
                                                       
           
           
           
           
           
           
                                                      
                                               <div class="card-footer align-center" >
                                                   <button type="submit" class="btn btn-primary btn-sm">
                                                       <i class="fa fa-dot-circle-o"></i> Publier
                                                   </button>
                                                   <button type="reset" class="btn btn-danger btn-sm">
                                                       <i class="fa fa-ban"></i> Reinitialiser
                                                   </button>
                                               </div>
                                           </div></form></div></div></div></div></div></div></div></div>
          </div>
        
        </div>
      </div>
    </div>
    <!-- end modal scroll -->
            @endforeach

        </div>
 </div></div>


               

               
                
    @endsection