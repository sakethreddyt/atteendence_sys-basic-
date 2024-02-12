<?php 
session_start(); 
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['pwd'])) {
	$uname = $_POST['uname'];
	$pass = $_POST['pwd'];

	if (empty($uname)||empty($pass)) {
        echo "alert(Username and Password is required)";
		exit();
	}
    else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	header("Location: index.html");
		        exit();
            }else{
				 echo "Incorect User name or password";
                 header("Location: home.html");
		        exit();
			}
		}else{
			echo "Incorect User name or password";
            header("Location: home.html");
		        exit();
		}
	}
	
}
else{
	header("Location: home.html");
	exit();
}