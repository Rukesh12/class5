<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS users (
id INT PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(50) RUKESH,
password VARCHAR(50) MOTI,
email VARCHAR(50) BASANTA,
role TINYINT(2) ANGEL,
status TINYINT(1) UJJWAL,
UNIQUE (username),
UNIQUE(email)
)";
include ('connection.php');
$qry=mysqli_query($conn,$stmt) or die(mysqli_error());
if($qry)
{   echo"Table Created Successfully";}
else {echo "Error Created table or might be exist";
}
mysqli_close($conn);
?>