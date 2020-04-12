@extends('layouts.app')
@section('content')
<div class="page-container">
           <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    </div>

<div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                               <h3 class="title-5 m-b-35">Les offres de mon entreprise</h3>
                              
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" align="left">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>Num Offre</th>
                                                <th>Intitulé</th>
                                                <th>Domaine</th>
                                                <th>Diplome</th>
                                                
                                                
                                                <th>Rémunération</th>
                                                <th></th>
                                            </tr>
                                        </thead>
         
                                        <tbody>
                                            @foreach($offres as $job)
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>{{$job->id}}</td>
                                                <td>
                                                    <span class="block-email">{{$job->intitule}}</span>
                                                </td>
                                                <td class="desc">{{$job->domaine}}</td>
                                                
                                                <td>
                                                    <span class="status--process">{{$job->diplome}}</span>
                                                </td>
                                                <td>{{$job->remun}}DA</td>
                                                <td>
                                               
                                                    <div class="table-data-feature">
                                                        
                                                            <a href="{{ url('jobs/'. $job->id.'/edit') }}"  class="btn btn-success btn-circle " style="border-radius: 50%;" ><i class="fa fa-pen text-light"></i></a>&nbsp;
                                                            <a  role ="button" data-jobid="{{$job->id}}"  data-toggle="modal" data-target="#delete6" class="btn btn-danger btn-circle " style="border-radius: 50%;"><i class="zmdi zmdi-delete text-light"></i></a>
                                                        
                                                        <a href="{{ url('emplois/'.$job->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Details">
                                                        <i class="zmdi zmdi-more">  </i>         <?php   $co =DB::table('postules')
                                 ->join('jobs', 'jobs.id', '=', 'postules.job_id') ->where('lu','=',0)->where('etat','=',0)->where('postules.job_id', '=',$job->id)->get();        ?>
                                                         <div class="noti__item js-item-menu">   
                                      
                                      @if ($co->count()>0)  
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="quantity">    {{$co->count()}}</span> @endif</div>  
                                
                                                         
                                 
                                
                        
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                               <tr class="spacer"></tr>
                                           @endforeach
                                         
                                        </tbody>
                                    </table>
                                    
                                </div> </div> </div>                           <br>     <ul class="pagination job-pagination mb-0 justify-content-center">
                            <li class="page-item active"> &nbsp;{{$offres->links()}} </li>
      </ul> <br></div></div></div>
      
<div class="modal modal-danger fade" id="delete6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">confirmation la supprimation</h4>
      </div>
      <form action="{{url('jobs/'.$job->id)}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
				
Voulez-vous vraiment supprimer cela?
				</p>
	      		<input type="hidden" name="offre_id" id="job_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">Non, annuler</button>
	        <button type="submit" class="btn btn-danger">Oui, supprimer</button>
	      </div>
      </form>
    </div>
  </div>
</div>
@endsection