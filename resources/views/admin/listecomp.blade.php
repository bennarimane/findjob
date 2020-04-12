@extends('admin.layouts.app')
@section('content')
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Salut 
                                <span>admin</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>>
            <!-- END BREADCRUMB-->


        

  
                        

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Table des Entreprises</h3>
                         
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            
                                            <th>Entreprise</th>
                                            <th>Télephone</th>
                                            <th>Email</th>
                                            <th>Site</th>
                                            <th>Adresse</th>
                                            <th>Wilaya</th>
                                            
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        
                                       
                                        
                                      
                                        @foreach($lists as $list)
                                        <tr class="tr-shadow">
                                       
                                            <td>{{$list->entreprise}}</td>
                                            <td>
                                                <span class="block-email">{{$list->tlp}}</span>
                                            </td>
                                            <td class="desc">{{$list->email}}</td>
                                           
                                            <td>
                                                <span class="status--process">{{$list->site}}</span>
                                            </td>
                                            <td>
                                                <span class="status--process">{{$list->adresse}}</span>
                                            </td>
                                            <td>
                                                <span class="status--process">{{$list->wilaya}}</span>
                                            </td>
                                           
                                            <td>
                                                <div class="table-data-feature">
                                                   
                                                   
                                                    <form action ="{{url('comp/'.$list->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}
                                                             
                                                                            <button  class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                                                                <i class="zmdi zmdi-delete"></i>
                                                                            </button></form>
                                                 
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr class="spacer"></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
            @endsection