@extends('layouts.app')
@section('content')


<div class="page-container">
            <div class="main-content">
         



 <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liste Candidature :</h5>
                        </div>
                    </div>

                    <div class="row m-t-30">
                            <div class="col-md-12">
                              
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                    <h5></h5>
                                        <thead>
                                        <tr>  
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                       <th>Etat</th>
                                                <th>Etat</th>
                                                <th>Cv</th>
                                                <th>lettre de motivation</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($spontanes as $spontane)

                                            <tr>
                                                <td>{{$spontane->name}} </td><td> {{$spontane->lastname}}</td>
                                                <td>{{$spontane->email}}</td>
                                              
                                                 @if($spontane->etat == 0) <td><a style ="color:green;"href="{{ url('spontaneaccpt/'.$spontane->id.'/email/'.$spontane->email) }}">Accepter</a></td>
                                            <td>     <a  style ="color:red;" href="{{ url('spontanerefuse/'.$spontane->id) }}">refuser</a></td>
                                                 @endif
                                                <td class="process"><a   href="{{ url('condidature/spontane/postuler/'.$spontane->doc. '/id/' .$spontane->user_id) }}"> Voir </a></td>
                                           
                                                <td>
<A HREF="{{$spontane->lettre}}"> <i class="fa fa-download"></i> Télécharger</A>

                                       </td>
                                    
                             
                                            </tr>
                                        
@endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>

                  

               
               </div></div> 
    @endsection