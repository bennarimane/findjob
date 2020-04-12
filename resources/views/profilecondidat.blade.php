@extends('layouts.app')
@section('content')

<div class="page-container">
            <div class="main-content">
            <div class="section__content section__content--p30">
            <div class="container-fluid">
                    </div>
                    
            <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{$user->avatar}}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                           {{$user->customRadio}} {{$user->name}}  {{$user->lastname}}</h4>
                        <small><cite title="San Francisco, USA">{{$user->phone}}<i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><i class="fas fa-envelope-open-text"></i>{{$user->email}}
                            <br />
                            <i class="fab fa-linkedin"></i><a href="http://www.jquery2dotnet.com">{{ $user->profile->linkin}}</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>{{ $user->profile->date_naissance}}<br/>
                            <i class="mdi mdi-map-marker mr-2"></i>{{ $user->profile->location}}</p>

                        <!-- Split button -->
                      
                    </div>
                </div>
            </div>
        </div>
          
            </div>

   

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Competences:</h4>
                </div>
            </div>

            <div class="row">
            @foreach($competances as $competance)
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4 bg-white ">
                        <div class="job-detail-desc bg-white ">
                            <p class="text-muted f-14 mb-3 bg-white ">{{$competance->description}}</p>

                           
                        </div>
                    </div>
                </div>
                @endforeach
            </div>






            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Langues:</h4>
                </div>
            </div>

            <div class="row">
            @foreach($langues as $langue)
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4 bg-white ">
                        <div class="job-detail-desc bg-white ">
                            <p class="text-muted f-14 mb-3 bg-white ">{{$langue->lang}}</p>

                           
                        </div>
                    </div>
                </div>
                @endforeach
            </div>




            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Formations :</h4>
                </div>
            </div>

            <div class="row">
            @foreach($formations as $formation)
                <div class="col-lg-4 col-md-6 mt-4 pt-5  ">
                    <div class="border rounded candidates-profile-education text-center text-muted bg-white ">
                        <div class="profile-education-icon border rounded-pill bg-white text-primary">
                            <i class="mdi mdi-36px mdi-school"></i>
                        </div>
                        <br>
                        <h6 class="text-uppercase f-17 bg-white " ><a href="#" class="text-muted">{{$formation->titre}}</a></h6>
                        <p class="f-14 mb-1 bg-white ">{{$formation->debut}} - {{$formation->fin}}</p>
                        <p class="pb-3 mb-0">Diplome {{$formation->diplome}} ,domaine {{$formation->domaine}}</p>
                        <p class="pb-3  mb-0">{{$formation->description}}.</p>
                    </div>
                </div>
@endforeach
            

            
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Experiences :</h4>
                </div>
            </div>

            <div class="row" >
            @foreach($experiences as $experience)
                <div class="col-md-6 mt-3 mt-md-0 pt-3" >
                    <div class="border rounded job-list-box p-4" style="background: white;">
                        <div class="row" >
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="/images/expe.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">{{$experience->intitule}}</a></h5>
                                    <p class="text-muted mb-0 f-16">{{$experience->description}}</p>
                                    <p class="text-muted mb-0 f-16">{{$experience->debut}} - {{$experience->fin}}</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker mr-2"></i>{{$experience->lieu}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


          

                @endforeach
                
            </div>

           
        </div>











       </div><div>
     
     @endsection