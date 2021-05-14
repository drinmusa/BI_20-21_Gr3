<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = '';
$dbname = 'imaginative'; 
$conn = new mysqli($dbhost, $dbuser, $dbpass);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<br>';

$sql = 'CREATE Database '.$dbname;
if($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} 
else{
    echo "Error creating database: " . $conn->error;
}
echo '<br>';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




mysqli_close($conn);
?>