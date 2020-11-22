<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "world";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);?>
<!--
<pre><?php print_r($con)?> </pre>
-->

<?php
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}


// Select the database
/*$selectdb = mysqli_select_db($con, $dbname);*/
$con->select_db($dbname);


// Check the database selection succeeded
if (!$con->select_db($dbname)) {
    die("DB Selection failed: " . mysqli_error());
}

// Check the database selection succeeded
/*if (!$selectdb) {
    die("DB Selection failed: " . mysqli_error());
}*/
?>