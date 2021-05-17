<?php
				$dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'imaginative'; 

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($conn->connect_error) {
            die("Connection error: " . $connection->connect_error);
        }
           
        $sqlQuery = "CREATE TABLE IF NOT EXISTS bookings (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            fullname VARCHAR(35) NOT NULL,
						phone VARCHAR(35) NOT NULL,
           	month VARCHAR(30) NOT NULL,
            destination VARCHAR(35) NOT NULL)";

			 $fullname = $_POST["fullname"];
			 $phone = $_POST["phone"];
			 $month = $_POST["month"];
			 $destination = $_POST["destination"];

  if ($conn->query($sqlQuery) === TRUE) {
		echo '<script type="text/javascript">'; 
		echo 'console.log("Table created successfully!");'; 
		echo '</script>';
} else {
		$error = 'Error creating SQL table: ' . $conn->error;
		echo '<script type="text/javascript">'; 
		echo 'console.log("'.$error.'");'; 
		echo '</script>';
}   
if ($fullname == '') {
	echo '<script type="text/javascript">'; 
	echo 'alert("Name is required.");'; 
	echo '</script>';
	
} else if ($phone == '') {
	echo '<script type="text/javascript">'; 
	echo 'alert("Phone is required.");'; 
	echo '</script>';
	
} else if ($month == '') {
	echo '<script type="text/javascript">'; 
	echo 'alert("Month is required.");'; 
	echo '</script>';

}
else if ($destination == '') {
	echo '<script type="text/javascript">'; 
	echo 'alert("Destination is required.");'; 
	echo '</script>';

} 
else{
	$fullname = $_POST['fullname'];

	$phone = $_POST['phone'];
	$month = $_POST['month'];
	$destination = $_POST['destination'];

	$query = "INSERT INTO bookings (fullname, phone, month,destination) VALUES('$fullname','$phone','$month','$destination')";
	
	$conn->query($query); 
}
function split_name($name) {
	$name = trim($name);
	$last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
	$first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
	return array($first_name, $last_name);
}
?>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
	
<header>
<div class="container">
<img src="images/logo.png" alt="Logo">

</div>

</header>
<div class="container" style="display:flex; flex-direction:column; justify-content:center;align-items:center; height:80vh;">
<h1 style="color:#97445e; margin-bottom:35px;">Booking Reservation</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last name</th>
      <th scope="col">Month</th>
			<th scope="col">Destination</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo split_name($fullname)[0]  ?></td>
      <td><?php echo split_name($fullname)[1]  ?></td>
      <td><?php echo $month ?></td>
			<td><?php echo $destination?></td>
    </tr>
 
  
  </tbody>
</table>
<h4 style="color:#97445e; margin-top:35px;">Someone from out staff will contact your for further steps and more details</h4>
<button  class="btn" style="color:#fff; background:#97445e; margin-top:50px;" onclick="printTicket()" >Print Reservation</button>
<a href="index.php" class="btn" style="color:#fff; background:#97445e; margin-top:50px;"s  >Homepage</a>
</div>
<div class="container" style="margin-top:-35px; display:flex; justify-content:space-between">
<p>Time: <?php echo  date("F j, Y, g:i a");?></p>
<p>I</p>
</div>
</body>
<script type="text/javascript">
function printTicket(){
	window.print();
}
</script>
</html>