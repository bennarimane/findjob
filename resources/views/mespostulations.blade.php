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
                        <p class="text-white-50 h6 mb-2"><i class="mdi mdi-bank mr-2"></i>{{ $info->profile->linkin}}</p>
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-envelope-open-text"></i>{{ $info->email }}</p>
                 
                            <!--
                        -->

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
              
            <table class="table">
  <thead class="thead-dark">
    <tr>
     
      <th scope="col">Intitule de l'offre</th>
      <th scope="col">Domaine</th>
      <th scope="col">Cv</th>
      <th scope="col">Etat</th>
    </tr>
  </thead>
  <tbody>
  @foreach($postuler as $postule)
    <tr>

      <td>{{$postule->intitule}}</td>
      <td>{{$postule->domaine}}</td>
      <td>{{$postule->nom}}</td>
      @if($postule->etat == 1)
      <th scope="row">Votre postulation est deja accepté</th>@endif
      @if($postule->etat == 0)
      <th scope="row">pas encore</th>@endif
    </tr>
    @endforeach
  </tbody>
</table>


                </div>
            </div>
        </div>
    </div>
</div>
                                     

                                                