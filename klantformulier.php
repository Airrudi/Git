<?php
$host="localhost";
$user="root";
$password="";
$dbname="klantformulier";

$cxn=mysqli_connect($host,$user,$password,$dbname)	
	or die ("Couldn't connect to server");
$query="SELECT*FROM klant ORDER BY naam";
$result=mysqli_query($cxn,$query)
	or die ("Couldn't execute query.");

echo "<table border='1' style='width:30%'> <b>Klantformulier</b>";

$column=True;

while ($row=mysqli_fetch_assoc($result)) {
	
	if ($column){
	echo "<tr>";
	foreach($row as $colname => $value) {
		echo "<td><input type='submit' value='".$colname."' /></td>";
	}
	echo "</tr>";
	}
	$column=false;
	
	echo "<tr>";
	foreach($row as $colname => $value) {
		echo "<td>".$value."</td>";
	}
	echo "</tr>";
	
}	
echo "</table>";
mysqli_close($cxn);
?>
  