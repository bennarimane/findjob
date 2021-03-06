
  
  @extends('layouts.master')
@section('titre','Profile')
@section('content1')
    
<section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <img src="" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">
                        <h5 class="text-white mb-2"></h5>
                        <p class="text-white-50 h6 mb-2"><i class="mdi mdi-bank mr-2"></i>Web Themes.pvt.Ltd</p>
                        <p class="text-white-50 h6 mb-2"></p>
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
    
    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Modifier  Formation</h4>
                     
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
        
        <form action="{{ url('for/'.$formation->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

          <div class="form-group">
          <label for="">Titre</label>
          <input type="text" name="titre" class="form-control" value="{{ $formation->titre}}">
          </div>

          <div class="form-group">
          <label for="">diplome</label>
          <input type="text" name="diplome" class="form-control" value="{{ $formation->diplome}}">
          </div>
          <div class="form-group">
          <label for="">etablissement</label>
          <input type="text" name="etablissement" class="form-control" value="{{ $formation->etablissement}}">
          </div>
          <div class="form-group">
          <label for="">lieu</label>
          <input type="text" name="lieu" class="form-control" value="{{ $formation->lieu}}">
          </div>
          <div class="form-group">
          <label for="">description</label>
          
          <textarea name="description"  cols="30" rows="10">{{ $formation->description}}</textarea>
          </div>
          <div class="form-group">
			 <label for="type">Type</label>
			 <select   type="text" name="type">
             <option value="etatique">etatique</option>
             <option value="prive">privé</option>
             </select>
			</div>
          <div class="form-group">
			 <label for="titre">domaine</label>
			 <input type="text" name="domaine" class="form-control" value="{{ $formation->domaine }}">
			</div>

			<div class="form-group">
			 <label for="datedebut">Date debut</label>
			 <input type="date" name="debut" class="form-control" value="{{ $formation->debut }}" >
			</div>

			<div class="form-group">
			 <label for="datefin">Date fin</label>
			 <input type="date" name="fin" class="form-control" value="{{ $formation->fin }}">
			</div>

      

          <div class="form-group">
          
          <input type="submit" class=" btn btn-primary rounded-pill" value="Modifier">
          </div>
        </form>

      </div>
    </div>
  </div>


