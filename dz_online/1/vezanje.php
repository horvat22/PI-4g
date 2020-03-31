<?php
$veza = new mysqli('localhost', 'root', '', 'tomislav_horvat');
if($veza === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
if($result = mysqli_query($veza, "SELECT * FROM shop")){
  if(mysqli_num_rows($result) > 0){
    echo "<table>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>ime</th>";
    echo "<th>velicina</th>";
    echo "</tr>";
  }
}
while($row = mysqli_fetch_array($result)){
  echo "<tr>";
  echo "<td>" . $row['idShop'] . "</td>";
  echo "<td>" . $row['ime'] . "</td>";
  echo "<td>" . $row['velicina'] . "</td>";
  echo "<tr>";
}
echo "</table>";
mysqli_free_result($result);
?>
