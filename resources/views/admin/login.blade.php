
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

<!--Material Icon -->
<link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/selectize.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('css/nice-select.css')}}" />


<div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->
    
    <div class="back-to-home rounded d-none d-sm-block">
        <a href="index.html" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
    </div>

    <!-- Hero Start -->
    <section class="vh-100" style="background: url('https://www.boulevarddustore.com/957-large_default/store-venitien-aluminium-bleu-ciel-1024.jpg') center center;">

        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="login-page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">{{ __('Administration login') }}</h4>  
                                </div>
                                <form class="login-form" method="POST" action="{{ route('admin.login') }}">
                                @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Votre email <span class="text-danger">*</span></label>
                                                <input type="email"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Mot de passe <span class="text-danger">*</span></label>
                                                <input type="password"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
                                            </div>
                                        </div>

                                
                                        <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                                        <div class="col-lg-12 mb-0">
                                            <button class="btn btn-primary w-100">
                                            {{ __('Login') }}</button>
                                        </div>
                                                                        <div class="col-12 text-center">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Vous n'avez pas de compte?</small> <a href="signup.html" class="text-dark font-weight-bold">S'inscrire</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div><!---->
                        </div> <!--end col-->
                    </div><!--end row-->
                </div> <!--end container-->
            </div>
        </div>
    </section>


