

  @extends('layouts.master')
@section('titre','Profile')
@section('content1')
<section class="bg-half page-next-level" style="background: url('/images/img4.jpg') center center;"> 
     <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">{{$cvs->titre}}</h4>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
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
   @if ($message = Session::get('danger'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif</div>
<div class="container" id="app">
	<div class="row">
		<div class="col-md-12">
<!---------------------------------Ajouter experience ------------------------------>
	
			
<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
					
						<div class="col-md-2 text-right">

		
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouvelle experience</h4>
      </div>
      <form action="{{route('experience.store',[$cvs->id])}}"   method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('profiles.createexp')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
	        <button type="submit" class="btn btn-primary">Enregistrer</button>
	      </div>
      </form>
    </div>
    </div>
    </div>
		<!-- Modal -->

    				</div>
					</div>
					
				</div>
				<!-------Afficher experience--------------------->
				<div class="faq-content">
                    
                        <div class="faq-content mt-3">
                            <div class="accordion" id="accordionExample">
							
                                <div class="card border rounded shadow mb-3">
                                    <a data-toggle="collapse" href="#collapseOne" class="faq position-relative" aria-expanded="true" aria-controls="collapseOne">
									
                                        <div class="card-header bg-light p-3" id="headingOne">
                                            <h4 class="title mb-0 faq-question"> Experience   </h4>
                                            <div class="offset-md-10 col-md-2 text-right">
						<button type="button" class="btn btn-primary align-right" data-toggle="modal" data-target="#myModal">
+
</button></div>
                                        </div> </a>
       
					@foreach($experiences as $experience)
					
      
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
										<div class="col-lg-12 mt-4 pt-2">
                            <div class="job-list-box border rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                       
                                        <div class="col-lg-9 col-md-9">
                                            <div class="job-list-desc">
                                                <h5 class="mb-2"><a href="#" class="text-dark">{{$experience->intitule}}</a></h5>
                                                <p class="text-dark">	{{$experience->description}}.</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item mr-3">
                                                        <p class="text-dark"><i class="mdi mdi-map-marker mr-2"></i>{{$experience->lieu}}</p>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <p class="text-dark"><i class="mdi mdi-clock-outline mr-2"></i>{{$experience->debut}} -{{$experience->fin}}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="job-list-button-sm text-right">
                                 
											<a role="button"  data-toggle="modal" data-target="#edit"data-mytitle="{{$experience->intitule}}" data-mydescription="{{$experience->description}}"data-mylieu="{{$experience->lieu}}"data-mydebut="{{$experience->debut}}"data-myfin="{{$experience->fin}}" data-catid="{{$experience->id}}" ><i class="fa fa-pen text-success"></i>

</a>

                                                <div class="mt-3">
									
                                    <a  role ="button" data-catid="{{$experience->id}}" data-toggle="modal" data-target="#delete"><i class="fa fa-times text-danger"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        </div>
                                    </div>


                          <!------------------------modifier experiece ------------------------------------------>   
          
						@endforeach
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modifier Experience</h4>
      </div>
      <form action="{{route('experience.update',[$cvs->id])}}" method="post">
      		
      		{{csrf_field()}}
	       <div class="modal-body">
         <input type="hidden" name="category_id" id="cat_id" value="">
				@include('profiles.createexp')
	         </div>
	       <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save Changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{url('exp/'.$cvs->id)}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="category_id" id="cat_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">Non,Annuler</button>
	        <button type="submit" class="btn btn-danger">Oui, supprimer</button>
	      </div>
      </form>
    </div>
  </div>
</div>

						</div> </div>
								</div>
                                    </div>
                         
			</div>

			<hr>
<!------------------------------------ajouter formation ---------------------->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
				
						<div class="col-md-2 text-right">
          
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouvelle formation</h4>
      </div>
      <form action="{{route('formation.store',[$cvs->id])}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('profiles.createfor')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
	        <button type="submit" class="btn btn-primary">Enregistrer</button>
	      </div>
      </form>
    </div>
  </div>
</div>

						</div>
					</div>
					
				</div>
<!---------------------afficher formation---------------->
<div class="faq-content">
                    
					<div class="faq-content mt-3">
						<div class="accordion" id="accordionExample">
						
							<div class="card border rounded shadow mb-3">
								<a data-toggle="collapse" href="#collapseTwo" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapseTwo">
								
									<div class="card-header bg-light p-3" id="headingOne">
										<h4 class="title mb-0 faq-question"> Formation  </h4>
                    <div class="offset-md-10 col-md-2 text-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
+
</button></div></div> </a>                       
					@foreach($formations as $formation)
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
										<div class="col-lg-12 mt-4 pt-2">
                            <div class="job-list-box border rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                      
                                        <div class="col-lg-9 col-md-9">
                                            <div class="job-list-desc">
                                                <h5 class="mb-2"><a href="#" class="text-dark">{{$formation->titre}}</a></h5>
                                                <p class="text-dark">{{$formation->diplome}} , {{$formation->domaine}}.</p>
												<p class="text-dark">Etablissement:{{$formation->etablissement}} </p>
												<p class="text-dark">{{$formation->description}} </p>
                                                <ul class="list-inline mb-0">
												    <li class="list-inline-item mr-3">
                                                        <p class="text-dark"><i class="mdi mdi-map-marker mr-2"></i>{{$formation->lieu}}</p>
                                                    </li>
                                                    <li class="list-inline-item mr-3">
													  <p class="text-dark"><i class="mdi mdi-clock-outline mr-2"></i>{{$formation->debut}} -{{$formation->fin}}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
				
					                 	<div class="col-lg-3 col-md-3">
                                            <div class="job-list-button-sm text-right">
                                            <a role="button"  data-toggle="modal"  data-target="#edit2"data-mytitle="{{$formation->titre}}"data-mytype="{{$formation->type}}" data-mydiplome="{{$formation->diplome}}"data-mydomaine="{{$formation->domaine}}" data-myetablissement="{{$formation->etablissement}}"data-mydescription="{{$formation->description}}"data-mylieu="{{$formation->lieu}}"  data-mydebut="{{$formation->debut}}" data-myfin="{{$formation->fin}}" data-forid="{{$formation->id}}" ><i class="fa fa-pen text-success"></i>

</a>
                                                 <div class="mt-3">
												    <!--  <a href="{{ url('for/'. $formation->id.'/edit') }}" class="btn btn-success btn-circle"><i class="fa fa-pen"></i>
												     </a>--> <a  role ="button" data-forid="{{$formation->id}}" data-toggle="modal" data-target="#delete2"><i class="fa fa-times text-danger"></i></a>
											         	  
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        </div>
                                    </div>
                                  
					      	@endforeach
                  <div class="modal fade" id="edit2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel2">Modifier Formation</h4>
      </div>
      <form action="{{route('formation.update',[$cvs->id])}}" method="post">
      		
      		{{csrf_field()}}
	       <div class="modal-body">
         <input type="hidden" name="formation_id" id="for_id" value="">
				@include('profiles.createfor')
	         </div>
	       <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">enregistrer</button>
	      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal modal-danger fade" id="delete2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">confirmation la supprimation</h4>
      </div>
      <form action="{{url('for/'.$cvs->id)}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
				
Voulez-vous vraiment supprimer cela?
				</p>
	      		<input type="hidden" name="formation_id" id="for_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">Non, annuler</button>
	        <button type="submit" class="btn btn-danger">Oui, supprimer</button>
	      </div>
      </form>
    </div>
  </div>
</div>
						   </div> </div>
								</div>
                                    </div>
                         
			</div>
			<hr>
			 <!--------------------------------------Ajouter langue---------------------------------------------------------->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
				
						<div class="col-md-2 text-right">
		
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouvelle langue</h4>
      </div>
      <form action="{{route('langue.store',[$cvs->id])}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('profiles.createlang')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Enregistrer</button>
	      </div>
      </form>
    </div>
  </div>
</div>
						</div>
					</div>
					
				</div>
				<div class="faq-content">
                    
					<div class="faq-content mt-3">
						<div class="accordion" id="accordionExample">
						
							<div class="card border rounded shadow mb-3">
								<a data-toggle="collapse" href="#collapsethree" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsethree">
								
									<div class="card-header bg-light p-3" id="headingOne">
										<h4 class="title mb-0 faq-question"> Langue  </h4>
                    <div class="offset-md-10 col-md-2 text-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
+
</button></div>	</div> </a>
					@foreach($langues as $langue)
					<div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
					  <div class="card-body">
						
					
					
							<h5 class="mb-2"><a href="#" class="text-dark">{{$langue->lang}}</a></h5>
           
							 
              &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  <a  role ="button" data-lanid="{{$langue->id}}" data-toggle="modal" data-target="#delete3">   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <i class="fa fa-times text-danger"></i></a>
                                  
						</div>
                                    </div>
                               
						@endforeach
            <div class="modal modal-danger fade" id="delete3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">confirmation la supprimation</h4>
      </div>
      <form action="{{url('lang/'.$cvs->id)}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
				
Voulez-vous vraiment supprimer cela?
				</p>
	      		<input type="hidden" name="langue_id" id="lan_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">Non, annuler</button>
	        <button type="submit" class="btn btn-danger">Oui, supprimer</button>
	      </div>
      </form>
    </div>
  </div>
</div>
			
					</div>
				</div>
			</div>

			<hr>
<!-------------------------------------------ajouter competance-------------------------------------->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
					
						<div class="col-md-2 text-right">
      
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouvelle competence</h4>
      </div>
      <form action="{{route('competance.store',[$cvs->id])}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('profiles.createcmp')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
	        <button type="submit" class="btn btn-primary">Enregister</button>
	      </div>
      </form>
    </div>
  </div>
</div>
					</div>
					
				</div>
        <!-------------------------------------afficher competence--------------------------->
		<div class="faq-content">
                    
					<div class="faq-content mt-3">
						<div class="accordion" id="accordionExample">
						
							<div class="card border rounded shadow mb-3">
								<a data-toggle="collapse" href="#collapsefour" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsefour">
								
									<div class="card-header bg-light p-3" id="headingfour">
										<h4 class="title mb-0 faq-question"> Competence </h4>
                    <div class="offset-md-10 col-md-2 text-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
+
</button></div>		</div> </a>
					@foreach($competances as $competance)
				
						<div  id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                                        <div class="card-body">
										<div class="col-lg-12 mt-4 pt-2">
                            <div class="job-list-box border rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                       
                                        <div class="col-lg-9 col-md-9">
                                            <div class="job-list-desc">
                                              
												<p class="text-dark">{{$competance->description}}. </p>
                                                
                                            </div>
                                        </div>
				
					                 	<div class="col-lg-3 col-md-3">
                                            <div class="job-list-button-sm text-right">
                                                 <div class="mt-3">
                                                 <a role="button"  data-toggle="modal" data-target="#edit4"data-mydescription="{{$competance->description}}" data-cmpid="{{$competance->id}}" ><i class="fa fa-pen text-success"></i>
												      
												     </a> &nbsp; &nbsp; &nbsp;
                             <a  role ="button" data-cmpid="{{$competance->id}}"  data-toggle="modal" data-target="#delete4"><i class="fa fa-times text-danger"></i></a>
											         	   
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        </div>
                                    </div>
						@endforeach
            <div class="modal fade" id="edit4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel2">Modifier Competence</h4>
      </div>
      <form action="{{route('competance.update',[$cvs->id])}}" method="post">
      		
      		{{csrf_field()}}
	       <div class="modal-body">
         <input type="hidden" name="competance_id" id="cmp_id" value="">
				@include('profiles.createcmp')
	         </div>
	       <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
	        <button type="submit" class="btn btn-primary">enregistrer</button>
	      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal modal-danger fade" id="delete4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">confirmation la supprimation</h4>
      </div>
      <form action="{{url('cmp/'.$cvs->id)}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
				
Voulez-vous vraiment supprimer cela?
				</p>
	      		<input type="hidden" name="competance_id" id="cmp_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">Non, annuler</button>
	        <button type="submit" class="btn btn-danger">Oui, supprimer</button>
	      </div>
      </form>
    </div>
  </div>
</div>
			
						</div> </div>
								</div>
                                    </div>
                         
			</div>
			<hr>
                  <!------------------------------------------------------------------->
			</div>
		   
		    </div>
	       </div>


          </div>
</div></div></div>