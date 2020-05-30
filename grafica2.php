<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Highcharts Example</title>

        <style type="text/css">
.hch-figure, .hch-data-table table {
    min-width: 310px; 
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.hch-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
.hch-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.hch-data-table th {
    font-weight: 600;
    padding: 0.5em;
}
.hch-data-table td, .hch-data-table th, .hch-data-table caption {
    padding: 0.5em;
}
.hch-data-table thead tr, .hch-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.hch-data-table tr:hover {
    background: #f1f7ff;
}

        </style>
    </head>
    <?php
                        
        require_once("include/g2DAO.php");
        $dao=new g2DAO();
        $todos=$dao->selectAll();
        $dq=new g2DAO();
        $quant=$dq->selectAll();
        require_once("include/cultivosDAO.php");
        $daocul=new cultivosDAO();
        $cultivos=$daocul->selectAll();
        $contador=0;
    ?>

    <body>
<script src="Highcharts/code/highcharts.js"></script>
<script src="Highcharts/code/modules/exporting.js"></script>
<script src="Highcharts/code/modules/export-data.js"></script>
<script src="Highcharts/code/modules/accessibility.js"></script>

<figure class="hch-figure">
    <div id="container2"></div>
    <p class="hch-description">
        Cantidades totales de cultivos cosechados agrupados por hacienda.
    </p>
</figure>



        <script type="text/javascript">
Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Cosechas Totales por hacienda'
    },
    subtitle: {
        text: 'Chiquita Banana'
    },
    xAxis: {
        categories: [
        <?php

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
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Cosechas por hacienda'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Cosechas Totales',
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
