@extends('layouts.app')
@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>
    
<div class="page-container">
           <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    </div>

                    <div class="row">

<div class="col-lg-offset-10 col-lg-2">
<form id="idForm" action="{{ route('chart') }}" method="GET" class="demo-default">
        
                {{ csrf_field() }}

          <div class="form-group ">
        <select class="form-control"  name=annee id="annee" onchange="document.getElementById('idForm').submit();">
        <option value="">Select Année</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        </select>
        </div>          
        </form>  
</div></div>
<figure class="highcharts-figure">
    <div id="container"></div>
</figure>
 



<script type="text/javascript">
   let chart =  JSON.parse(`<?php echo $chart ?>`);
    
    Highcharts.chart('container', {
        title: {
            text: 'Nombre d\'offre'
        },
    
         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Numbre d\'offre'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'les offres ',
            data: chart
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
    </div></div></div></div> 
     @endsection