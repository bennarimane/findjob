<!DOCTYPE html>
<html>
 <head>
  <title>Laravel - How to Generate Dynamic PDF from HTML using DomPDF</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Laravel - How to Generate Dynamic PDF from HTML using DomPDF</h3><br />
   
   <div class="row">
    <div class="col-md-7" align="right">
     <h4>Cv Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
      <th>nom</th>
       <th>titre</th>
       <th>presentation</th>
       <th>photo</th>
       <th>diplome</th>
       <th>description</th>
       <th>intitule</th>
      </tr>
     </thead>
     <tbody>
     @foreach($cv_data as $cv)
      <tr>
      <td>{{ $cv->name }}</td>
       <td>{{ $cv->titre }}</td>
       <td>{{ $cv->presentation }}</td>
       <td>{{ $cv->photo }}</td>
       <td>{{ $cv->diplome }}</td>
       <td>{{ $cv->description }}</td>
       <td>{{ $cv->intitule }}</td>
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>