<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CULTIVOS</title>

        <style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    min-width: 320px; 
    max-width: 660px;
    margin: 1em auto;
    background-color: rgba(255,255,255,0.8);
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
    background-color: rgba(255,255,255,0.8);
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background-color: rgba(255,255,255,0.8);
}
.highcharts-data-table tr:hover {
    background-color: rgba(255,255,255,0.8);
}

        </style>
    </head>
<?php
    //require 'conexion.php';
    /*require_once("include/cultivosDAO.php");
    $dao=new cultivosDAO();
    $todos=$dao->selectAll();*/
    require_once("include/g3DAO.php");
        $dao=new g3DAO();
        $todos=$dao->selectAll();
    $contador=0;
    
    echo '

    <body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="Highcharts/code/highcharts.js"></script>
<script src="Highcharts/code/modules/exporting.js"></script>
<script src="Highcharts/code/modules/export-data.js"></script>
<script src="Highcharts/code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Cultivos Totales.
    </p>
</figure>


        <script type="text/javascript">
// Build the chart';
        echo "
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'La grafica muestra el porcentaje de los cultivos cocechados en nuestra empresa, interpretando la cantidad de cada cultivo'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Cultivos',
        colorByPoint: true,
        data: [";
        
        if(!empty($todos)){
            
            foreach ($todos as $objeto) {
                
                if($contador>0){
                    echo ",";
                }
                echo "{  
                name: '".$objeto->getName()."',
                y: ".$objeto->getQuant().",
                sliced: true,
                selected: true        
                }"; 
                $contador = $contador + 1;
            }
        }
        
        echo"
        ]
    }]
});
        </script>
    </body>
</html>";
?>
