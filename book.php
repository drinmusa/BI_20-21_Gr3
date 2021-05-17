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
	
	if ($conn->query($query) === TRUE) {
		echo "Booking successfully";
	}
}
?>