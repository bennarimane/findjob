@extends('layouts.app')
@section('content')
<div class="page-container">
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Ajouter une offre</strong> 
                                    </div>
                                    <div class="card-body card-block">
   <form action="{{ route('offre.update',$job->id) }}"  method="post"  class="form-horizontal">
   @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Intitulé du poste</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="intitule" value="{{ $job->intitule }}" class="form-control @error('intitule') is-invalid @enderror" value="{{ old('intitule') }}" required autocomplete="intitule" autofocus>
                                                    @error('intitule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>

                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Domaine</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="domaine" id="select"  value="{{ $job->domaine }}" class="form-control @error('domaine') is-invalid @enderror"  value="{{ old('domaine') }}" required autocomplete="domaine" autofocus>
                                                        <option value="Informatique">Informatique</option>
                                                        <option value="Sante">Santé</option>
                                                        <option value="Transport">Transport</option>
                                                        <option value="Urbanisme">Urbanisme</option>
                                                    </select>
                                                    @error('domaine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="multiple-select" class=" form-control-label">Diplomes requis</label>
                                                </div>
                                                <div class="col col-md-9">
                                                   <input type="text" name="diplome"   value="{{ $job->diplome }}" class="form-control  @error('diplome') is-invalid @enderror"  value="{{ old('diplome') }}" required autocomplete="diplome" autofocus>
                                                   @error('diplome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nombre d'années d'expérience</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="experience"  value="{{ $job->experience }}" class="form-control @error('experience') is-invalid @enderror"  value="{{ old('experience') }}" required autocomplete="experience" autofocus>
                                                    @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Description de l'offre</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="textarea-input" rows="9" class="form-control @error('description') is-invalid @enderror"  value="{{ old('description') }}" required autocomplete="description" autofocus>{{ $job->description }}</textarea>
                                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                @enderror
                                                </div>
                                            </div>






                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="lieu" class=" form-control-label">Lieu de travail</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="" name="lieu" value="{{ $job->lieu }}" class="form-control @error('lieu') is-invalid @enderror"  value="{{ old('lieu') }}" required autocomplete="lieu" autofocus>
                                                    @error('lieu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Compétences pour le poste</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="competence" id="textarea-input" rows="9"  class="form-control @error('competence') is-invalid @enderror"  value="{{ old('competence') }}" required autocomplete="competence" autofocus>{{ $job->competence}}</textarea>
                                                 @error('competence')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="remun" class=" form-control-label">Rémunération</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="remun" name="remun" value="{{ $job->remun }}" class="form-control @error('remun') is-invalid @enderror"  value="{{ old('remun') }}" required autocomplete="remun" autofocus>
                                                    @error('remun')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="date" class=" form-control-label">Date de depot de l'offre</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="date" name="depot" value="{{ $job->depot }}" class="form-control @error('depot') is-invalid @enderror" value="{{ old('depot') }}" required autocomplete="depot" autofocus>
                                                    @error('depot')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Type de l'offre</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                            <input type="text" name="type"  value="{{ $job->type }}"class="form-control @error('type') is-invalid @enderror"  value="{{ old('type') }}" required autocomplete="type" autofocus>
                                                            @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="date" class=" form-control-label">Date de debut  de l'offre</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="date" name="debut"value="{{ $job->debut}}" class="form-control @error('debut') is-invalid @enderror"  value="{{ old('debut') }}" required autocomplete="debut" autofocus>
                                                    @error('debut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>
                                         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="date" class=" form-control-label">Dernier délai de postulation</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="date" name="delai"value="{{ $job->delai}}" class="form-control @error('delai') is-invalid @enderror"  value="{{ old('delai') }}" required autocomplete="delai" autofocus>
                                                    @error('delai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>
                                            






                                           
                                    <div class="card-footer align-center" >
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Publier
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reinitialiser
                                        </button>
                                    </div>
                                </div></form></div></div></div></div></div></div></div></div>
@endsection('content')