<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{ asset('//fonts.gstatic.com')}}">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}" />
    
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />
    <link href="{{asset('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/vector-map/jqvmap.min.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('admin/css/theme.css')}}" rel="stylesheet" media="all">

</head>
<body>
<aside class="menu-sidebar2" >
            <div class="logo">
                <a href="#">
                    <img src="admin/images/icon/findjob22.png"  />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                    @if (Auth::user())      <img src="{{Auth::user()->avatar}}" alt="John Doe" />
@endif                    </div>
                    <h4 class="name">Recruteur</h4>
                   
                    @if(Auth::check())
                    <div class="account-dropdown__footer">
                                    <a class="dropdown-item "style="color:white;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></div>
                            <unread></unread>
                        @endif
                </div>
                <nav class="navbar-sidebar2" >
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ url('dashboard')}} ">
                                <i class="fas fa-tachometer-alt"></i>Tableau de board
                                
                            </a></li>
                           <!-- <ul class="list-unstyled navbar__sub-list js-sub-list">
                               <li>
                                    <a href="index.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                                </li>
                           </ul>
                        -->
                                        <li>
                            <a href="{{ route('profilerec.editrec') }}">
                                <i class="zmdi zmdi-account"></i>Modifier profil</a>
                           
                        </li>
                         <li>
                            <a href="{{ url('offres')}}" >
                                <i class="fas fa-table"></i>Mes offres</a>
                           
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Les statistiques</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{url('chart/'.'2020')}}">Le nombres d'offres par année</a>
                                </li>
                                <li>
                                    <a href="{{url('chart/abc/a/a/a/a')}}">Le nombre d'offres par wilaya</a>
                                </li>
                                <li>
                                    <a href="{{url('recruteur/barChart')}}"> Le nombre d'offres par type</a>
                                </li>
                                <li>
                                    <a href="{{url('chart/abc/a/a')}}"> Le nombre de postulations</a>
                                </li>
                            </ul>
                        </li>
                       <li> <a href="{{route('changepassword')}}">
                                                        <i class="zmdi zmdi-money-box"></i>Changer mot de passe</a></li>
                             <li>
                                <a href="{{ url('listcandida')}} ">

                                <?php 
                                   $com=Auth::user()->company->id;
                              
                                 
                                 $co =DB::table('spontanes')
                                 ->join('users', 'users.id', '=', 'spontanes.user_id')
                                 ->join('companies', 'spontanes.entre_id', '=', 'companies.id') ->where('lu','=',0)->where('spontanes.entre_id', '=',$com)->get();        ?>
                                <div class="noti__item js-item-menu">Liste des candidatures     &nbsp;&nbsp;   &nbsp;&nbsp;     
                                      
                                     @if ($co->count()>0)  
                                        <span class="quantity">    {{$co->count()}}</span> @endif</div></a>
                               
                            </li>
                             <li>
                                <a href="{{ route('company.edit') }}">
                                    <i class="far fa-check-square"></i>Mon entreprise</a>
                               
                            </li>
                            <li>
                                <a href="{{ url('companiess') }}">
                                    <i class="far fa-check-square"></i>Details entreprise</a>
                               
                            </li>
                          
                 

                                                       
  
     <!-- <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Les statistiques <b class="caret"></b> </a> 
        <ul class="dropdown-menu"  style="background:black;">
         
          <li><a href="{{url('chart/'.'2020')}}"></a>offres par année</li>
          <li><a href="{{url('chart/abc/a/a/a/a')}}">offres par willaya</a></li>
          <li><a href="{{url('recruteur/barChart')}}">4 niveau</a></li>
    
          <li><a href="{{url('bar/chart/sponane')}}">5 niveau</a></li>
        </ul>
      </li>  --> 
                    
                    </ul>
                </nav>
               
    
    
 
            </div>
        </aside>
        <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                     <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Rechercher " />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                         </form>
                   
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="admin/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        @if (Auth::user())            <img src="{{Auth::user()->avatar}}" alt="John Doe" />@endif
                                        </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ url('dashboard')}} ">
                                                        <i class="zmdi zmdi-account"></i>Profile</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('profilerec.editrec') }}">
                                                        <i class="zmdi zmdi-settings"></i>Modifier</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="{{route('changepassword')}}">
                                                        <i class="zmdi zmdi-money-box"></i>Changer mot de passe</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></div>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <div><div>
                </div>
            </div>
        </nav>
</div>
        <main class="py-4">
          
        </main>
    </div>
    </div> </div>
                    </div>
                </div>
            </header>
            @yield('content')
</body>
</html>
<script src="{{asset('admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('admin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('admin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('admin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('admin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin/vendor/select2/select2.min.js')}}">
    </script>
    <script src="{{asset('admin/vendor/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{asset('admin/vendor/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admin/vendor/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('admin/vendor/vector-map/jquery.vmap.world.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('admin/js/main.js')}}"></script>
   <script> $('#delete6').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var job_id = button.data('jobid') 
      var modal = $(this)
      modal.find('.modal-body #job_id').val(job_id);
})
</script>