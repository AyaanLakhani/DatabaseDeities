<!DOCTYPE html>
<html>
<title>User's Table</title>
<style>
table, th, td {
border: solid 1px ;
width: 200px;
color: #ff0000;
font-family: monospace;
font-size: 25px;
text-align: left;
}
</style>
<body>
<p>Here is the Marvel table<p><br>
<table>
<tr>
<th>RealName</th>
<th>HeroName</th>
<th>Strength</th>
<th>Intelligence</th>
<th>Durability</th>
<th>Energy</th>
<th>Speed</th>
<th>FightingSkills</th>
</tr>
<?php
$conn = mysqli_connect("mysql.eecs.ku.edu", "447s24_a332l217", "Eemoor4d", "447s24_a332l217");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM MARVEL";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
   while($row = $result->fetch_assoc()) 
   {
      echo "<tr>";
      echo "<td>" . $row["RealName"]. "</td>";
      echo "<td>" . $row["HeroName"]. "</td>";
      echo "<td>" . $row["Strength"]. "</td>";
      echo "<td>" . $row["Intelligence"]. "</td>";
      echo "<td>" . $row["Durability"]. "</td>";
      echo "<td>" . $row["Energy"]. "</td>";
      echo "<td>" . $row["Speed"]. "</td>";
      echo "<td>" . $row["FightingSkills"]. "</td>";     
      echo "</tr>";
   }
   echo "</table>";
} 
$conn->close();
?>
</table>


</body>
