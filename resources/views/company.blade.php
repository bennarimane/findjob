@extends('layouts.master')
@section('titre','Resume')
@section('content1')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel" >Spontanee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="{{ route('spontane.store',[$companies->id]) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
 
          <div class="form-group" id="mobileno_textbox2">
            <label for="recipient-name" class="col-form-label">Mon cv<span style="color: red;">*</span></label>
     <select name="doc" class="form-control"  > 
     @foreach($cvs as $cv)
               <option value="{{$cv->id}}">{{$cv->titre}}</option>
               @endforeach
            </select>
          </div>
              
          <div class="form-group">
            <label for="message-text" class="col-form-label">Lettre de motivation</label>
              <input type="file" class="form-control" name="lettre" >
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
              <textarea  class="form-control" name="description" cols="30" rows="10"></textarea>
          </div>
     

           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Spontane</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
<section class="bg-half page-next-level" style="background: url('/images/img4.jpg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Entreprise details</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Accueil</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Pages</a></li> 
                            <li><a href="#" class="text-uppercase font-weight-bold">Employer</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Entreprise details</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- EMPLOYERS DETAILS START -->
    <section class="section">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
            @if(session('message'))
                    <div class="alert alert-success" role="alert">
                    {{session('message')}}
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                    @endif
                    </div>
                <div class="col-lg-12">
      
                                      
               
                    <div class="text-sm-center">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <button type="button"class="btn btn-success mb-1" data-toggle="modal" data-target="#exampleModal" > Spontane
                                        </button>
                        <img src="{{$companies->logo}}"alt="" class="img-fluid mx-md-auto d-block">
                        <h4 class="mt-3"><a href="#" class="text-dark">{{$companies->entreprise}}</a></h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{{$companies->adresse}},{{$companies->wilaya}},{{$companies->pays}}</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-success mb-0"><i class="mdi mdi-bookmark-check mdi-18px mr-2"></i>Verified</p>
                            </li>
                        </ul>

                        <ul class="list-inline mb-2">
                            <li class="list-inline-item mr-3 ">
                                <p class="text-muted"><i class="mdi mdi-earth mr-2"></i>{{$companies->site}}</p>
                            </li>

                            <li class="list-inline-item mr-3">
                                <p class="text-muted"><i class="mdi mdi-email mr-2"></i>{{$companies->email}}</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted"><i class="mdi mdi-cellphone-iphone mr-2"></i>{{$companies->tlp}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="border-top border-bottom pt-4 pb-4">
                        <div class="row justify-content-sm-center">
                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Employer</h5>
                                    <p class="text-muted mb-0">5540 +</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Type</h5>
                                    <p class="text-muted mb-0">{{$companies->type}}</p>
                                </div>
                            </div>

                <div>
                        
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4>Description d'entreprise:</h4>
                    <div class="rounded border p-4 mt-3">
                        <p class="text-muted">{{$companies->description}}.</p>
                    </div>
                </div>
            </div>

    

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4>Mes offres:</h4>
                </div>
                @foreach($jobs as $job)
                <div class="col-lg-8 col-md-7">
                    <div class="shadow rounded p-4 mt-4">
                        <img src="{{$companies->logo}}" alt="" height="90" class="float-left shadow rounded-pill mr-3">
                        <div class="d-block overflow-hidden">
                            <h6 class="text-muted font-weight-light float-right mb-0"><i class="mdi mdi-clock-outline mr-1"></i>{{$job->created_at}}</h6>
                            <h5 class="mb-1"><a href="{{ url('emplois/'.$job->id) }}"  class="text-dark">{{$job->intitule}}</a></h5>
                            <small class="text-muted font-weight-bold">{{$job->domaine}}</small>
                           
                      
                        </div>
                    </div>

   

                

                </div>@endforeach

              
            </div>
        </div>
    </section>
    <!-- EMPLOYERS DETAILS END -->

    