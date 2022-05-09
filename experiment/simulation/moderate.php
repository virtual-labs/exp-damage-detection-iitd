<!DOCTYPE html>

<html lang="en">
	
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Experiment 7</title>
    

    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="jquerymin.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- BEGIN BASE CSS STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"type="text/css">
    
    <link href="bootstrap.css" rel="stylesheet" type="text/css">

    <link href="iitstyle.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="main.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- Graph Script link start-->
	<script language="javascript" type="text/javascript" src="t/excanvas.js"></script>
	<script language="javascript" type="text/javascript" src="t/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="t/jquery.flot.js"></script>
<!-- Graph Script link close -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


    <script>

        var simsubscreennum=0;

        var temp=0;

    </script>

</head>

<body style="margin:0; font-family: verdana;" >
<table align="center">
<tr><td>
    <div id="simscreen">

        <div id="title"><h3>Damage Detection & Qualitative Severity Estimation Using EMI Technique</h3></div>
 
         <!-- Scene 1 --> 
<body  >
<!-- Condition 1 Graph -->
<div class="simsubscreen" id="canvas3" style="visibility:;"></br>

           
		<div id="transwhite" style="width: 760px; margin-right: 20px; margin-left: 20px; padding-bottom: 20px; margin-top: 0px; padding-top: 40px;">

		<span id="dedata" style="visibility: hidden; width: 200px;"></span>
		<span id="pidata" style="font-size: 20px; position: absolute; left: 300px; top: 30px;">Line Graph for Moderate</span>

<table width="100%"> 
  <tr> 
    <td width="4%" height="440" valign="middle">
     <img src="images/cond.png" style=" height:130px;"/>
    </td> 
    <td width="71%" valign="top" style="text-align:center;">
    	<div id="placeholder"  align="center"  style="width:600px;height:400px;"></div>
    	<p><img src="images/frn.png" style=" height:20px;"/></p>
	</td> 
    <td width="20%" valign="middle" style="text-align:center;">
    	<p> </p>
      	<img src="images/fqmach.png" style="height:75px;" />
      	<p><a href="zip/moderate.zip">
      		<input type="button" value="Download Data!" style=" width: 115px; padding-top: 5px; padding-bottom: 5px; background-color: #2150a0; color: #FFF;">
      		</a></p>
    </td>  
  </tr> 
</table>

<canvas id="myChart" style="position: absolute; left: 45px; top: 95px; max-width: 600px; max-height: 425px;"></canvas>

</div>
			<input type="button" id="rest1" value="Restart" style="position: absolute; left: 655px; top: 500px; width: 115px; padding-top: 5px; padding-bottom: 5px; background-color: #2150a0; color: #FFF; visibility: ;" onclick="reset()">
      		
</div>
 
 
<script id="source" language="javascript" type="text/javascript">
$(function () {

 var linePoints =

<?php
$txt1 = $_POST['txt1'];
$txt2 = $_POST['txt2'];

$gap = ($txt2 - $txt1)*10;

$time = $gap < 500 ? 500 : 200;

$interval = ($gap <= 1000) ? 1 : ceil($gap/1000);

$count = 1;

$start_line_number = (($txt1 -1)*10 + 1);

$end_line_number = (($txt2 - 1)*10 );

$start = false;
$stop = false;



$array_string = "[";

$handle = @fopen("data/severe.txt", "r");
if ($handle) {

    while (($buffer = fgets($handle, 4096)) !== false) {
        if($count == $start_line_number) {
            $start = true;
        }
        
        if($count == $end_line_number + 1) {
            $stop = true;
        }
        
        if($start == true && $stop == false) {
            if (($count % $interval) == 0) {
                $tmp = explode("\t", $buffer);
                $current_value = "[" . $tmp[0] . "," . $tmp[1] . "] ,";
                $array_string = $array_string . $current_value;
            }   
        }
        $count++;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}

$array_string = substr($array_string, 0, strlen($array_string)-1);
$array_string = $array_string . "]";

echo " " .$array_string;
?>

    var i = 0;
    var arr = [[]];
    var timer = setInterval(function(){
     arr[0].push(linePoints[i]);
      $.plot($("#placeholder"), arr);
     i++;
     if(i === linePoints.length)
        clearInterval(timer);
},
    
    
    <?php
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];

    $gap = ($txt2 - $txt1)*10;
    
    if($gap < 200) {
        $time =  500;
    }
    else if($gap < 400) {
        $time = 400;
    }
    
    else if ($gap < 600) {
        $time = 300;
    }
    
    else if ( $gap < 800) {
        $time = 200;
    }
    
    else {
        $time = 100;
    
    }
    
    echo $time;
    
    ?>
    
    
    
    
    
    
    );
});
</script>
 


    </div><!--- First Div---->

<!---<div style="text-align: center; font-size: 11px; width:800px; border:1px solid #000; position: relative; border-top:none; color: #FFF; background-color: #000;">Developed by @ <a href="#" ><strong style="color: #FFF; font-size: 12px;">Virtuality India Pvt.Ltd</strong></a></div>
</body>
i class="fa fa-arrow-right" style="color: #82C91E"></i>
<i class="fa fa-arrow-left" style="color: #82C91E"></i>
<i class="fa fa-arrow-down" style="color: #82C91E"></i>
<i class="fa fa-arrow-up" style="color: #82C91E"></i>
<i class="fa fa-chevron-circle-right" style="color: #82C91E"></i>


<i class="fas fa-hand-point-right" style="color: #82C91E"></i--->

</td></tr>
</table>
</body>
</html>

