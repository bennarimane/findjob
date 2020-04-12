<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield ('titre')
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/selectize.css')}}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />

</head>





 <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
 
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.html" class="logo">
                    <img src="/images/findjob3.png" alt="" class="logo-light" height="75" />
                    <img src="/images/findjob.png" alt="" class="logo-dark" height="75" />
                </a>
            </div>                 
            <div class="buy-button">
         
                        
            @guest
            
       
                                <a  href="{{ route('login') }}" class="text-light "> <i class="fas fa-sign-in-alt"></i> Se connecter  </a>
                          
                            @if (Route::has('register'))
                              
                                    <a class="btn btn-primary" href="{{ route('register') }}">S'inscrire</a>
                              
                            @endif
                        @else
                        <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                @if(Auth::check())
                <li>    <a href="{{ route('profile', ['name' => Auth::user()->name ]) }}">Mon profile</a></li>
                            <unread></unread>
                        @endif
                    &nbsp; &nbsp;
                        <li class="has-submenu">
                          <a href="javascript:void(0)">  <i class="mdi mdi-account mr-2"></i> {{ Auth::user()->name }}</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="{{ route('profile.edit') }}"><i class="fas fa-user-edit"></i>  Modifier profile</a></li>
                            <li><a href="{{ route('changepassword') }}"><i class="fas fa-lock"></i>  Changer de mot de passe</a></li>
                            <li><a href="{{ url('cvs') }}"><i class="far fa-file"></i>  Mes cvs</a></li>
                            <li><a href="{{ route('mespostulations') }}"> <i class="fas fa-file-signature"></i>  Mes postulation</a></li>
                            <li><a href="{{ route('mesfavorables') }}" ><i class="fab fa-gratipay"></i>  Mes offres favorables</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <i class="fas fa-sign-out-alt"></i> Déconnecter  
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       
                                        @csrf
                                        
                                    </form></li>
                        
                           
                        </ul>
                    </li>
    </ul></div>
                          
                            
                        @endguest

            </div><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
            <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                    <li><a href="{{ route('accueil')}}">Accueil</a></li>
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Offres</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="{{ url('emploi')}}">Liste des offres</a></li>
                           
                        </ul>
                    </li>
    
                    
                       
                    <li><a href="{{ url('about')}}">A propos de nous</a></li>
                            <li><a href="{{ route('contact.create') }}">Contactez nous</a></li>

                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->



@yield('content1')






      <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="{{asset('javascript:void(0)')}}"><img src="../images/findjob3.png" height="20" alt=""></a>
                    <p class="mt-4">At vero eos et accusamus et iusto odio dignissim os ducimus qui blanditiis praesentium</p>
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Company</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Media & Press</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Career</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Marketing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> CEOs </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Agencies</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Our Apps</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Resources</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Support</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Terms</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Accounting </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Billing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> F.A.Q.</a></li>
                    </ul>
                </div>
            
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Business Hours</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>Monday - Friday : 9:00 to 17:00</li>
                        <li class="mt-2">Saturday : 10:00 to 15:00</li>
                        <li class="mt-2">Sunday : Day Off (Holiday)</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>

    <!-- selectize js -->
    <script src="{{asset('js/selectize.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/counter.int.js')}}"></script>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
    </html> 
    <script src="{{asset('js/app.js')}}"></script>

<script>
  
  $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var title = button.data('mytitle') 
      var lieu = button.data('mylieu') 
      var description = button.data('mydescription') 
      var debut= button.data('mydebut') 
      var fin = button.data('myfin') 
      var cat_id = button.data('catid') 
   
      var modal = $(this)
      modal.find('.modal-body #title').val(title);
      modal.find('.modal-body #lieu').val(lieu);
      modal.find('.modal-body #description').val(description);
      modal.find('.modal-body #debut').val(debut);
      modal.find('.modal-body #fin').val(fin);
      
      modal.find('.modal-body #cat_id').val(cat_id);
 
})
  $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('catid') 
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
})
$('#edit2').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var title = button.data('mytitle') 
      var lieu = button.data('mylieu') 
      var description = button.data('mydescription') 
      var etablissement = button.data('myetablissement') 
      var debut= button.data('mydebut') 
      var type = button.data('mytype') 
      var domaine = button.data('mydomaine') 
      var diplome= button.data('mydiplome') 
      var fin = button.data('myfin') 
      var for_id = button.data('forid') 
   
      var modal = $(this)
      modal.find('.modal-body #titre').val(title);
      modal.find('.modal-body #lieu').val(lieu);
      modal.find('.modal-body #description').val(description);
      modal.find('.modal-body #etablissement').val(etablissement);
      modal.find('.modal-body #debut').val(debut);
      modal.find('.modal-body #type').val(type);
      modal.find('.modal-body #domaine').val(domaine);
      modal.find('.modal-body #diplome').val(diplome);
      modal.find('.modal-body #fin').val(fin);
      
      modal.find('.modal-body #for_id').val(for_id);
 
})
$('#edit4').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var description = button.data('mydescription') 
      var cmp_id = button.data('cmpid') 
   
      var modal = $(this)
      modal.find('.modal-body #description').val(description);
      modal.find('.modal-body #cmp_id').val(cmp_id);
 
})
$('#delete2').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var for_id = button.data('forid') 
      var modal = $(this)
      modal.find('.modal-body #for_id').val(for_id);
})
$('#delete3').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var lan_id = button.data('lanid') 
      var modal = $(this)
      modal.find('.modal-body #lan_id').val(lan_id);
})
$('#delete4').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cmp_id = button.data('cmpid') 
      var modal = $(this)
      modal.find('.modal-body #cmp_id').val(cmp_id);
})
$('#delete5').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cv_id = button.data('cvid') 
      var modal = $(this)
      modal.find('.modal-body #cv_id').val(cv_id);
})
</script>