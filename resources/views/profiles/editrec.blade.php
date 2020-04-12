@extends('./layouts.app')
@section('content')
<div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <form action="{{ route('profilerec.update1') }}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Modifier vos informations personnels</strong>
                                        
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                              <label for="name">Nom</label>
                              <input type="text" name="name" value="{{ $info->name }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="lastname">Prenom</label>
                              <input type="text" name="lastname" value="{{ $info->lastname }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="phone">Numero de telephone</label>
                              <input type="text" name="phone" value="{{ $info->phone }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" name="email" value="{{ $info->email }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <p class="text-center">
                                    <button class="btn btn-primary" type="submit">
                                         Modifier
                                    </button>
                              </p>
                        </div>
                        </div>
                                </div></div>
                    </form>
                </div>
        
@endsection