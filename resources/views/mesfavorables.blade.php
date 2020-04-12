@extends('layouts.master')
@section('titre','Modifier profil')
@section('content1')
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('/images/img4.jpg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <img src="{{ $info->avatar}}" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">

                        <h5 class="text-white mb-2">{{ $info->name }}&nbsp;{{ $info->lastname}}</h5>
                        <p class="text-white-50 h6 mb-2"><i class="fab fa-linkedin"></i>{{ $info->profile->linkin}}</p>
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-envelope-open-text"></i>{{ $info->email }}</p>
                 
                            <!--
                        -->

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Mes favorables</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Choisir l'offre qui vous convient, et faites nous connaitre vos connaissances.</p>
                    </div>
                </div>
            </div>

            <div class="row">
            

                <div class="col-lg-12 ">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="show-results">
                                <div class="float-left">
                                    <h5 class="text-dark mb-0 pt-2 f-18">nombre de resultat   {{$favor->count()}}</h5>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    @foreach($favor as $favo)
                        <div class="col-lg-12 mt-4 pt-2">
                            <div class="job-list-box border rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-2">
                                            <div class="company-logo-img">
                                                <img src="{{$favo->logo}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-9">
                                            <div class="job-list-desc">
                                            <input type="hidden" id="pro_id" value="{{$favo->id}}"/>

                                                <h6 class="mb-2"><a href="{{ url('emplois/'.$favo->id) }}" class="text-dark">{{$favo->intitule}}</a></h6>
                                                <p class="text-muted mb-0"><i class="mdi mdi-bank mr-2"></i>{{$favo->domaine}}</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item mr-3">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{{$favo->lieu}}</p>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-clock-outline mr-2"></i>{{$favo->depot}}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="job-list-button-sm text-right">
                                            <div class="modal-header">
              
                                            @guest
                                      
                                      <div class="mt-3">
                                          <a href= "{{ url('favorite/'.$favo->id) }}" ><i class="fa fa-heart"></i></a></div>  @else    
                                  <?php        $co =DB::table('post_users')->where('job_id','=',$favo->id)->where('user_id','=',Auth::user()->id)->get();       
                 
                            
                          if ($co->count()>0)            { ?>            <div class="mt-3">
                              <a href= "{{ url('favorite/sup/'.$favo->id) }}" > <i class="fa fa-heart"></i></a></div>  <?php } 
                          
                          
                          else  { ?><div class="mt-3">
                          <a href= "{{ url('favorite/'.$fov->id) }}" ><i class="far fa-heart"></i></a></div><?php }?>  @endguest
                                                    <div class="mt-3">
                                                    <a href= "{{ url('emplois/'.$favo->id) }}" class="btn btn-sm btn-primary">Voi details</a>
                                                </div>
                                            </div>
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
        </div>
    </section>                        

                                                