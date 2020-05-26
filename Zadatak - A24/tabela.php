<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Grafik</title>
</head>
<html>
<body>
<nav>
<ul>
  <li><a href="grafik.php">Grafik</a></li>
  <li><a href="oautoru.html">O autoru</a></li>
</ul>
</nav>
<?php
require 'config.php';

$q = mysqli_query($db,"select * from Uspeh order by ProsOcena desc ") or die(mysqli_error());

echo "<table class='tabela' border='3'  align='center' >";
echo "<tr  align='center'>";
echo"<td>Razred</td>";
echo"<td>Odlican</td>";
echo"<td>Vrlodobar</td>";
echo"<td>Dobar</td>";
echo"<td>Dovoljan</td>";
echo"<td>Nedovoljan</td>";
echo"<td>ProsekOcena</td>";

echo "</tr>";


while($data = mysqli_fetch_row($q))
{
echo "<tr  align='center'>";
echo "<td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td>";
echo "</tr>";
}
echo "</table>";
$db->close();
?>
</body>
</html>
