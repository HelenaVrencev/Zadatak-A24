<!DOCTYPE html>
<?php
require 'config.php';
$query = "SELECT * FROM Uspeh";
$result = mysqli_query($db, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ Razred:'".$row["Razred"]."', Prosek:".$row["ProsOcena"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
<html>
 <head>
  <title>Grafik</title>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <nav>
<ul>
  <li><a href="index.php">Pocetna</a></li>
  <li><a href="oautoru.html">O autoru</a></li>
</ul>
</nav>
<br>
<br>
  <br /><br />
    <h3 class="text-center">Grafik Proseka</h3> 
  <div class="container" style="width:900px;"> 
   <br /><br />
   <div id="chart"></div>
  </div>

 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'Razred',
 ykeys:['Prosek'],
 labels:['Prosek'],
 hideHover:'auto',
 stacked:true
});
</script>