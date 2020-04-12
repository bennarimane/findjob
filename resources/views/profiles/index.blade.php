
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  @extends('layouts.master')
@section('titre','Profile')
@section('content1')

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouveau cv</h4>
      </div>
      <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('profiles.moncv')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
	        <button type="submit" class="btn btn-primary">Enregistrer</button>
	      </div>
      </form>
    </div>
    </div>
    </div>
    <section class="bg-half page-next-level" style="background: url('/images/img4.jpg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <img src="{{$info->avatar}}" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">
                        <h5 class="text-white mb-2">{{$info->name}}</h5>
                            <p class="text-white-50 h6 mb-2"><i class="fab fa-linkedin"></i>{{$info->profile->linkin}}</p>
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-envelope-open-text"></i>{{$info->email}}</p>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="container">
	<div class="row">
		<div class="col-md-12">
            
           <br>
    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Liste de mes cvs</h4>
                     
                    </div>

                    <div class="buy-button">
 
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
               &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                     
                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                  
               
         <!--  <a href="{{ route('profile.cv') }}" class="btn btn-success" style="text-align: right;"><i class="mdi mdi-cloud-upload"></i> Nouveau cv</a>-->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="mdi mdi-plus"></i> Nouveau cv
</button>
              </div>
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
             
      

			


<section class="section">
        <div class="container">
            <div class="row">
            @foreach($cvs as $cv)
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog position-relative overflow-hidden shadow rounded">
                        <div class="position-relative overflow-hidden">
                            <img src="{{$cv->photo}}" class="img-fluid rounded-top" alt="">
                            <div class="overlay rounded-top bg-dark"> </div>
                            <div class="likes">
                                <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mr-2">    <a href="{{ url('cvs/'.$cv->id.'/edit') }}"  role="button"> <i class='fas fa-pen text-success'></i></a></li>
                                <li class="list-inline-item"><a  role ="button" data-cvid="{{$cv->id}}"  data-toggle="modal" data-target="#delete5"><i class="fa fa-times text-danger"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="content p-4">
                            <h4><a href="javascript:void(0)" class="title text-dark">{{ $cv->titre }}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('dynamic_pdf/pdf/'.$cv->id) }}" ><i class="fa fa-file-download text-dark"></i></a> </h4>
                            <p class="text-muted">{{$cv->presentation}}</p>   
                            <a href="{{ url('experiences/'.$cv->id) }}" class="text-dark readmore">Details <i class="mdi mdi-chevron-right "></i></a>
                        </div>
                        <div class="author">
                            <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">{{Auth::user()->name}}  {{Auth::user()->lastname}}</a></p>
                            <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> {{$cv->created_at}}</p>
                        </div>
                    </div>
                </div><!--end col-->
                
            @endforeach
               

            <div class="col-lg-12 mt-4 pt-2">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination job-pagination mb-0 justify-content-center">
                                  
                                    <li class="page-item ">{{$cvs->links()}}</li>
                                </ul>
                            </nav>
                            <br>   <br><br>
                        </div>
            </div>
        </div>

    
	
    </section>
    <div class="modal modal-danger fade" id="delete5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">confirmation la supprimation</h4>
      </div>
      <form action="{{url('cvdelete')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="cvs_id" id="cv_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">Non annuler</button>
	        <button type="submit" class="btn btn-danger">Oui, supprimer</button>
	      </div>
      </form>
    </div>
  </div>
</div>
			
    </div>
</div>
</div>