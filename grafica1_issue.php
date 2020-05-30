<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require 'conexion.php';
    require_once("include/cultivosDAO.php");
    $dao=new cultivosDAO();
    $todos=$dao->selectAll();
    $contador=0;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Highcharts Example</title>

        <style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
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
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

        </style>
    </head>
    <?php

    require_once("include/g1issueDAO.php");
        $dao=new g1issueDAO();
        $todos=$dao->selectAll();
        $dq=new g1issueDAO();
        $quant=$dq->selectAll();
    ?>
    <body>
<script src="Highcharts/code/highcharts.js"></script>
<script src="Highcharts/code/modules/exporting.js"></script>
<script src="Highcharts/code/modules/export-data.js"></script>
<script src="Highcharts/code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="cissue"></div>
    <p class="highcharts-description">
        Esta grafica muestra las haciendas que presentan más problemas de riesgos haciendo una comparacion.
    </p>
</figure>



        <script type="text/javascript">
Highcharts.chart('cissue', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Riesgos detectados por hacienda'
    },
    subtitle: {
        text: 'Chiquita Banana'
    },
    xAxis: {
        categories: [<?php

            if(!empty($todos)){
            
            foreach ($todos as $objeto) {
                
                if($contador>0){
                    echo ",";
                }
                echo "'".$objeto->getName()."'";
                $contador = $contador + 1;
            }
        }
        ?>
        ],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Riesgos Registrados',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: 'Piezas'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Totales',
        data: [
        <?php
        $contador = 0;
           if(!empty($quant)){
            
            foreach ($quant as $cant) {
                
                if($contador>0){
                    echo ",";
                }
                //echo $cant->getQuant();
                $variable=$cant->getQuant();
                echo $variable;
                $contador = $contador + 1;
            }
        }
        ?>
        ]
    }]
});
        </script>
    </body>
</html>