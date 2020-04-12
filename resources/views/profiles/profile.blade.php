
  @extends('layouts.master')
@section('titre','Profile')
@section('content1')
<section class="bg-half page-next-level" style="background: url('/images/img4.jpg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <img src="{{$user->avatar}}" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">
                        <h5 class="text-white mb-2">{{$user->name}} {{$user->lastname}}</h5>
                        <p class="text-white-50 h6 mb-2"><i class="fab fa-linkedin"></i>{{ $user->profile->linkin}}</p>
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-envelope-open-text"></i>{{$user->email}}</p>
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
    <br>

    <!-- CANDIDATES PROFILE START -->
    <section class="section">
        <div class="container">
    

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Competences:</h4>
                </div>
            </div>

            <div class="row">
            @foreach($competances as $competance)
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4">
                        <div class="job-detail-desc">
                            <p class="text-muted f-14 mb-3">{{$competance->description}}</p>

                           
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
                <div class="col-lg-4 col-md-6 mt-4 pt-5">
                    <div class="border rounded candidates-profile-education text-center text-muted">
                        <div class="profile-education-icon border rounded-pill bg-white text-primary">
                            <i class="mdi mdi-36px mdi-school"></i>
                        </div>
                        <h6 class="text-uppercase f-17"><a href="#" class="text-muted">{{$formation->titre}}</a></h6>
                        <p class="f-14 mb-1">{{$formation->debut}} - {{$formation->fin}}</p>
                        <p class="pb-3 mb-0">Diplome {{$formation->diplome}} ,domaine {{$formation->domaine}}</p>
                        
                        <p class="pt-3 border-top mb-0">{{$formation->description}}.</p>
                    </div>
                </div>
@endforeach
            

            
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Experiences :</h4>
                </div>
            </div>

            <div class="row">
            @foreach($cvs as $cv)
                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="/images/expe.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">{{$cv->intitule}}</a></h5>
                                    <p class="text-muted mb-0 f-16">{{$cv->description}}</p>
                                    <p class="text-muted mb-0 f-16">{{$cv->debut}} - {{$cv->fin}}</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker mr-2"></i>{{$cv->lieu}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


          

                @endforeach
                
            </div>

            
                </div>
            </div>         
        </div>
    </section>
    <!-- CANDIDATES PROFILE END -->
