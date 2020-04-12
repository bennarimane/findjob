
  
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
                        <h4 class="title title-line pb-5">Modifier Competence</h4>
                     
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
        
        <form action="{{ url('cmp/'.$competance->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

       
          <div class="form-group">
          <label for="">Description</label>
          <textarea name="description" class="form-control" >{{ $competance->description }}</textarea>
          </div>
          

      

          <div class="form-group">
          
          <input type="submit" class=" btn btn-primary rounded-pill" value="Modifier">
          </div>
        </form>

      </div>
    </div>
  </div>


