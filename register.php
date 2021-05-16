<?php
		header('Location:user.php');
    session_start();
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'imaginative'; 

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($conn->connect_error) {
            die("Connection error: " . $connection->connect_error);
        }
           
        $sqlQuery = "CREATE TABLE IF NOT EXISTS users (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(20) NOT NULL,
						username VARCHAR(20) NOT NULL,
            email VARCHAR(20) NOT NULL,
            password VARCHAR(10000) NOT NULL)";

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

     


    if (array_key_exists('username', $_POST) OR array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
        if ($_POST['email'] == '') {
            echo '<script type="text/javascript">'; 
            echo 'alert("Email address is required.");'; 
            echo '</script>';
            
        } else if ($_POST['password'] == '') {
            echo '<script type="text/javascript">'; 
            echo 'alert("Password is required.");'; 
            echo '</script>';
            
        } else if ($_POST['username'] == '') {
            echo '<script type="text/javascript">'; 
            echo 'alert("Username is required.");'; 
            echo '</script>';
        
        } else{
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashPass = hash('sha512',$password);

            $sqlUs = "SELECT * 
            FROM Users 
            WHERE (username='$username');";
            $resUs = mysqli_query($conn,$sqlUs);

            $sqlEm = "SELECT * 
            FROM Users 
            WHERE (email='$email');";
            $resEm = mysqli_query($conn,$sqlEm);

            if (mysqli_num_rows($resUs) > 0) {
                echo '<script type="text/javascript">'; 
                echo 'alert("A user with this username already exists. Please try another.");'; 
                echo '</script>'; 
            } else if(mysqli_num_rows($resEm) > 0){
                echo '<script type="text/javascript">'; 
                echo 'alert("A user with this email already exists. Please try another.");'; 
                echo '</script>'; 
            } else{
                $query = "INSERT INTO Users (username, email, password) VALUES('$username','$email','$hashPass')";
                
                $update = " UPDATE Users 
                            SET username = LOWER(userName)";
                $retval = mysqli_query( $conn, $update);

                if ($conn->query($query) === TRUE) {
                    
                   $_SESSION['email'] = $_POST['email'];
                    header("Location: session.php");

                } else {
                    $error = 'Error: ' . $query . $conn->error;
                    echo '<script type="text/javascript">'; 
                    echo 'alert("'.$error.'");'; 
                    echo '</script>'; 
                }
            } 
        }  
    }

?>
