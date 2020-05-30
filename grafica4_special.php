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
#container {
  height: 400px; 
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 310px; 
  max-width: 800px;
  margin: 1em auto;
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

    require_once("include/g2DAO.php");
        $dao=new g2DAO();
        $todos=$dao->selectAll();
        $contador=0;

    ?>
    <body>
<script src="Highcharts/code/highcharts.js"></script>
<script src="Highcharts/code/highcharts-3d.js"></script>
<script src="Highcharts/code/modules/exporting.js"></script>
<script src="Highcharts/code/modules/export-data.js"></script>
<script src="Highcharts/code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="g4"></div>
    <p class="highcharts-description">
        A variation of a 3D pie chart with an inner radius added.
        These charts are often referred to as donut charts.
    </p>
</figure>


        <script type="text/javascript">
Highcharts.chart('g4', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: 'Tratamientos realizados por hacienda'
    },
    subtitle: {
        text: 'Chiquita Banana'
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Tratamientos',
        data: [
        <?php
            if(!empty($todos)){
            
            foreach ($todos as $cant) {
                if($contador>0){
                    echo ",";
                }
                echo "['".$cant->getName();."',".$cant->getQuant();."]";
                $contador = $contador + 1;
            }
        }
        ?>
            ['Bananas', 8],
            ['Kiwi', 3],
            ['Mixed nuts', 1],
            ['Oranges', 6],
            ['Apples', 8],
            ['Pears', 4],
            ['Clementines', 4],
            ['Reddish (bag)', 1],
            ['Grapes (bunch)', 1]
        ]
    }]
});
        </script>
    </body>
</html>