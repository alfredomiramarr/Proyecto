<?php
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

	require 'conexion.php';

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
        ${demo.css}
		</style>
		<script type="text/javascript">
        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Cultivos por Hacienda'
                },
                subtitle: {
                    text: 'Source: Wikipedia.org'
                },
                xAxis: {
                    categories: [
        <?php
        // $sql=mysql_query("select * from deudas order by monto_deudor desc");
        // while($res=mysql_fetch_array($sql)){		
        $sql = "SELECT * FROM T_Crop;";
         $result = mysqli_query($conexion,$sql);
         while ($row =mysqli_fetch_assoc($result)){ 	
        ?>
        			
        			['<?php echo $res['Crop_Name'] ?>'],
        			
        <?php
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
                        text: 'Cultivos (decenas)',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                tooltip: {
                    valueSuffix: ' millions'
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
                    y: 100,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                    shadow: true
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Cantidad',
                    data: [
        			<?php
        // $sql=mysql_query("select * from deudas order by monto_deudor desc");
        // while($res=mysql_fetch_array($sql)){	
        $sql = "SELECT * FROM T_Crop;";
         $result = mysqli_query($conexion,$sql);
         while ($row =mysqli_fetch_assoc($result)){	
        ?>			
        			[<?php echo $res['Crop_Quant'] ?>],
        		
        <?php
        }
        ?>			
        			]
                }]
            });
        });
		</script>
	</head>
	<body>
<script src="Highcharts/code/highcharts.js"></script>
<script src="Highcharts/code/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
<br><br>
<center><a href="ejemplo4.php">Ver ejemplo 4</a></center>
	</body>
</html>
