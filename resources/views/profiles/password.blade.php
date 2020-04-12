@extends('layouts.app')
@section('content')
    <!-- Start home -->
    
    <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <form action="{{ route('profile.updatepassword') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       
                        <div class="form-group">
                              <label for="current_password">Mot de passe</label>
                              <input type="password" name="current_password" id="current_password"  class="form-control" required>
                        </div>
                   
                        <div class="form-group">
                              <label for="new_password">nouveau mot de passe</label>
                              <input type="password" name="new_password" id="new_password"class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="new_password_confirmation">confirmer</label>
                              <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
                        </div>
                     
                        <div class="form-group">
                              <p class="text-center">
                                    <button class="btn btn-primary" type="submit">
                                        changer mot de passe
                                    </button>
                              </p>
                        </div>
                    </form>
                    @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                    @endif
                    @if(session('message'))
                    <div class="alert alert-success" role="alert">
                    {{session('message')}}
                    @endif
                    </div>
                             

                                                </div></div></div></div>