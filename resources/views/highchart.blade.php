@extends('layouts.app')
@section('content')


</head>
    
<div class="page-container">
           <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    </div>

                    <div class="row">

<div class="col-lg-offset-10 col-lg-2">
<form id="idForm" action="{{ route('chartbar2') }}" method="GET" class="demo-default">
        
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
     <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
     <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
     <script src="https://code.highcharts.com/stock/highstock.js"></script>
<script type="text/javascript">
      
        var data_click = <?php echo $click; ?>;
var data_viewer = <?php echo $viewer; ?>;

    Highcharts.chart('container', {

chart: {
    type: 'column'
},

title: {
    text: 'le nombre de postulations a des offres VS le nombre de postulations spontanées'
},



legend: {
    align: 'right',
    verticalAlign: 'middle',
    layout: 'vertical'
},

xAxis: {
    categories: ['Jan', 'Fev', 'Mar','Avr', 'Mai', 'Juin','Jui', 'Aout', 'Sep','Oct', 'Nov', 'Dec'],
    labels: {
        x: -10
    }
},

yAxis: {
    title: {
        text: 'le nombres d\'offres'
    }
},

series: [{
       name: 'Postuler',
       data:  data_viewer
     }, {
       name: 'Spontane',
       data: data_click
    }],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                align: 'center',
                verticalAlign: 'bottom',
                layout: 'horizontal'
            },
            yAxis: {
                labels: {
                    align: 'left',
                    x: 0,
                    y: -5
                },
                title: {
                    text: null
                }
            },
            subtitle: {
                text: null
            },
            credits: {
                enabled: false
            }
        }
    }]
}
});  
    Highcharts.chart('container', {

chart: {
    type: 'column'
},

title: {
    text: 'Offres chart'
},

subtitle: {
    text: '2020'
},

legend: {
    align: 'right',
    verticalAlign: 'middle',
    layout: 'vertical'
},

xAxis: {
    categories: ['Jan', 'Fev', 'Mar','Avr', 'Mai', 'Juin','Jui', 'Aout', 'Sep','Oct', 'Nov', 'Dec'],
    labels: {
        x: -10
    }
},

yAxis: {
    title: {
        text: 'Number of New Offres'
    }
},

series: [{
       name: 'CDD',
       data:  data_cdd
     }, {
       name: 'CDI',
       data: data_cdi
    }, {
       name: 'Stage',
       data: data_stage
    }],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                align: 'center',
                verticalAlign: 'bottom',
                layout: 'horizontal'
            },
            yAxis: {
                labels: {
                    align: 'left',
                    x: 0,
                    y: -5
                },
                title: {
                    text: null
                }
            },
            subtitle: {
                text: null
            },
            credits: {
                enabled: false
            }
        }
    }]
}
});




</script>

</div></div></div>
     @endsection


