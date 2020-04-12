
@extends('layouts.master')
@section('titre','Profile')
@section('content1')
    
<section class="bg-half page-next-level" style="background: url('/images/img4.jpg') center center;"> 
    <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <img src="{{ Auth::user()->avatar}}" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">

                        <h5 class="text-white mb-2">{{ Auth::user()->name }}&nbsp;{{ Auth::user()->lastname}}</h5>
                        
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-envelope-open-text"></i>{{ Auth::user()->email }}</p>
                 
                            <!--
                        -->

                    
                    </div>
                </div>
            </div>
        </div>
    </section>
     <br><br>
    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Modifier cv</h4>
                     
                    </div>
  @if(count($errors))
    <div class="alert alert-danger" role="alert">
      
      <ul>
      @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
        @endforeach
        </ul>
    </div>

  @endif
 
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
        <form action="{{ url('cvs/'.$cv->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

          <div class="form-group">
          <label for="">Titre</label>
          <input type="text" name="titre" class="form-control" value="{{ $cv->titre }}">
          </div>

          <div class="form-group">
          <label for="">Présentation</label>
          <textarea name="presentation" class="form-control">{{ $cv->presentation }}</textarea>
          </div>
           
            <div class="form-group">
              <label for="">Image</label>
              <input class="form-control" type="file" name="photo">
            </div>

      

          <div class="form-group">
          
          <input type="submit" class="btn btn-primary" value="Modifier">
          </div>
        </form>

      </div>
    </div>
  </div>


