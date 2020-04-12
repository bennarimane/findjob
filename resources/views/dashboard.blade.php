@extends('layouts.app')
@section('content')

    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
      
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
        
            <!-- END HEADER DESKTOP-->

      
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="statistic__item">
                         <?php    $com=Auth::user()->company->id;       $co =DB::table('spontanes')
                                 ->join('users', 'users.id', '=', 'spontanes.user_id')
                                 ->join('companies', 'spontanes.entre_id', '=', 'companies.id')->where('spontanes.entre_id', '=',$com)->get();        ?>
                                    <h2 class="number"> {{$co->count()}}</h2>
                                    <span class="desc">Candidat spontane</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="statistic__item">
                                    <h2 class="number"> <?php 
                                    
                                    $com=Auth::user()->company->id;  $p =DB::table('postules')
                                 ->join('jobs', 'jobs.id', '=', 'postules.job_id') ->where('jobs.user_id','=',$com)->get();  ?> {{ $p->count() }}  </h2>
                                    <span class="desc">Condidats postulés</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="statistic__item">
                                    <h2 class="number"> <?php $com=Auth::user()->company->id;  $job =DB::table('jobs')
                              ->  where('jobs.user_id','=',$com)->get();  ?> {{ $job->count() }}</h2>
                                    <span class="desc">Offres</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                </div>
                            </div>
                           
                         
                            <!--<div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">$1,060,386</h2>
                                    <span class="desc">total earnings</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </section>
         

          
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Details</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                          <center>  <img class="rounded-circle " src="{{Auth::user()->avatar}}"  alt="Card image cap" style="height:100px;width:100px">
                                          </center>                                   <h5 class="text-sm-center mt-2 mb-1">{{Auth::user()->customRadio}}  {{Auth::user()->name}}   {{Auth::user()->lastname}}</h5>
                                            <div class="location text-sm-center">
                                                <i class="fa fa-mail"></i> {{Auth::user()->email}}</div>
                                        </div>
                                        <hr>
                                      
                                    </div>
                                </div>
                            </div>


                        </div>      </div>      </div>      </div>
    
            <!-- END PAGE CONTAINER-->
     

            </div>

</div>

@endsection