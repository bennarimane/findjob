

    <div class="container">
    	<div class="row">
    		<div class="col-md-12">

    		  <h1 class="page-header">{{ $cv->titre }}</h1>
    			
    			<table class="table">
    				<thead>
    					<tr>
    						<th>Intitulé</th>
                            <th>Lieu</th>
    						<th>Debut</th>
    						<th>Fin</th>
                            <th>Description</th>
    					</tr>
    				</thead>
    				<tbody>

    				  @foreach($cv->experiences as $experience)
    					<tr>
    						<td><a href="{{ url('cvs/'.$cv->id) }}">{{ $experience->intitule }}</a> </td>
                            <td>{{ $experience->lieu }}</td>
    						<td>{{ $experience->debut }}</td>
    						<td>{{ $experience->fin }}</td>
                            <td>{{ $experience->description }}</td>
    					</tr>

    				   @endforeach
    				</tbody>
    			</table>

    		</div>
    	</div>
    </div>

