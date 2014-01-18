<html>

<body>

<?php
$con = mysql_connect("localhost","fcharpen","Ball12room");
  if (!$con){
  die('Could not connect: ' . mysql_error());
echo "NO!";
  }
else{
echo "YAY!";
}
mysql_select_db("fcharpen", $con);
$sql = "CREATE TABLE Persons
(
FirstName varchar(15),
LastName varchar(15),
Age int
)";

// Execute query
mysql_query($sql,$con);

// some code
?>

</body>

</html>
