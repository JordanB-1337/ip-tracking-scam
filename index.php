<?php
$servername = "localhost";
$username = "DATABASEUSERNAME";
$password = "DATABASEPASSWORD";
$dbname = "DATABASENAME";
$yourip = $_SERVER['REMOTE_ADDR'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("error cannot load beta");
} 

$sql = "INSERT INTO `iptest3` (`ips`, `anotheripslot`) VALUES ('$yourip', '$yourip')";

if ($conn->query($sql) === TRUE) {
    header("Location: http://thecodingcrew.github.io");
die();
} else {
	echo "error the beta cannot be loaded";

}

$conn->close();
?>
