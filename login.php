<?php
   session_start();
	 $dbhost = 'localhost';
	 $dbuser = 'root';
	 $dbpass = '';
	 $dbname = 'imaginative'; 

	 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	 if ($conn->connect_error) {
			 die("Connection error: " . $connection->connect_error);
	 }
			
	 $sqlQuery = "CREATE TABLE IF NOT EXISTS Users (
			 id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
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

	 
if (isset($_POST['login'])){
            $user = $_POST['usernameL'];
            $pass = $_POST["passwordL"];
            $hashPass = hash('sha512',$pass);

            $sql = "SELECT * 
                    FROM Users 
                    WHERE (username='$user' AND password='$hashPass');";
            $res = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($res)>0){
                

                $cookie_value =  $user;
                $cookie_name = "loggedin";
                /** Cookie creation */
                setcookie($cookie_name, $cookie_value, time()+(180),"/");

                if(!empty($_POST["remember"])) {
                    setcookie ("usernameL",$_POST["usernameL"],time()+ 3600);
                    setcookie ("passwordL",$_POST["passwordL"],time()+ 3600);
                    echo '<p>Login data are remembered</p>';
                } else {
                    setcookie("usernameL","");
                    setcookie("passwordL","");
                    echo '<p>Login data are not remembered</p>';
                } 

                if(isset($_COOKIE[$cookie_name])){
                    $cookie_value = $_COOKIE[$cookie_name];
                    echo '<form method="post"><p>You are logged in as '.$cookie_value.'. Do you want to log out? &emsp;&emsp;&emsp;';
                    echo '<input name="logout" type="submit" id="submit" value = "Logout" style="width:100px;"></p></form>';

                    /** Cookie destruction */
                    if(isset($_POST["logout"])){ 
                        setcookie("loggedin","val",time()-(120),"/");
                    }
                }
            }
            else{
                echo "<p>Username or password is incorrect</p>";
            }
        }



				?>