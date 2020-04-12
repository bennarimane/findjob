@extends('layouts.master')
@section('titre','Accueil')
@section('content1')
<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->
   
    <!-- Navbar End -->

    <!-- Start Home -->
    <section class="bg-home" style="background: url('/images/business.jpg') center center;">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center text-white">
                                <h6 class="small-title text-uppercase text-light mb-3">TROUVEZ DES EMPLOIS, CRÉEZ DES RÉSUMÉS SUIVANTS ET ENRICHISEZ VOS APPLICATIONS.</h6>
                                <h1 class="heading font-weight-bold mb-4">Le moyen le plus simple d'obtenir votre emploi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="home-form-position">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-registration-form p-4 mb-3">
                                    <form class="registration-form" action="{{ route('recherche') }}" method="GET">
                                 {{   csrf_field()}}
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-briefcase"></i>
                                                    <select id="select-country" class="demo-default" name="poste">
                                              <option value="">Poste</option>
                                              @foreach($offres as $job)
               <option value="{{$job->intitule}}">{{$job->intitule}}</option>
               
                                                     @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                       
                                                   <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-list-alt"></i>
                                              <select id="select-country" class="demo-default" name="job">
                                              <option value="">Categorie</option>
                                              @foreach($offres as $job)
               <option value="{{$job->domaine}}">{{$job->domaine}}</option>
               
                                                     @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-location-arrow"></i>
                                                    <select id="select-country" class="demo-default" name="ville" >
                                                        <option value="">Region</option>
                                                        @foreach($offres as $job)
               <option value="{{$job->lieu}}">{{$job->lieu}}</option>
               
                                                     @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                     
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Rechercher">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->
    <!-- How it Work start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Comment ça marche</h4>
                        <p class="text-muted para-desc mx-auto mb-1">
                        
Postez un emploi pour nous parler de votre projet. Nous vous mettrons rapidement en contact avec les bons pigistes.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                        <div class="how-it-work-img position-relative rounded-pill mb-3">
                            <img src="images/how-it-work/img-1.png" alt="" class="mx-auto d-block" height="50">
                        </div>
                        <div>
                            <h5>Créer un compte</h5>
                            <p class="text-muted">Donec pede justo fringilla vel aliquet nec vulputate eget arcu. In enim justo rhoncus ut a, justo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                        <div class="how-it-work-img position-relative rounded-pill mb-3">
                            <img src="images/how-it-work/img-2.png" alt="" class="mx-auto d-block" height="50">
                        </div>
                        <div>
                            <h5>Cherchez votre travail</h5>
                            <p class="text-muted">Aliquam lorem ante dapibus in, viverra feugiatquis a tellus. Phasellus viverra nulla ut Quisque rutrum.</p>
                         
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                        <div class="how-it-work-img position-relative rounded-pill mb-3">
                            <img src="images/how-it-work/img-3.png" alt="" class="mx-auto d-block" height="50">
                        </div>
                        <div>
                            <h5>Postuler pour un travail</h5>
                            <p class="text-muted">Nullam dictum felis eu pede mollis pretiumetus Integer tincidunt. Cras dapibus. semper nisi.</p>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it Work end -->
    <!-- popular category start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Entreprises</h4>
                        <p class="text-muted para-desc mx-auto mb-1">
Postez un emploi pour nous parler de votre projet. Nous vous mettrons rapidement en contact avec les bons pigistes.</p>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($companies as $company) 
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                            <a href="{{ url('entreprise/'.$company->id) }}"><img src="{{$company->logo}}" alt="" class="img-fluid mx-auto d-block">
</a> </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">{{$company->entreprise}}</h5>
                       
                            </div>
                        </div>
                    </a>
                </div>
              @endforeach
             
    
            </div>

        </div>
    </section>
    <!-- popular category end -->

  
    <!-- footer end -->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0">© 2019 Jobya. Design with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</p>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- selectize js -->
    <script src="js/selectize.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/counter.int.js"></script>

    <script src="js/app.js"></script>
    <script src="js/home.js"></script>

</body>
@endsection