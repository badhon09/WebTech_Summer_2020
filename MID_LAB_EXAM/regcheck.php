<?php

	session_start();

	if(isset($_POST['submit'])){

        $id 		= $_POST['id'];
        $password 	= $_POST['password'];
        $name      = $_POST['name'];
        $email 		= $_POST['email'];
        $type       = $_POST['type'];
		

		if(empty($name) || empty($password) || empty($email) ){
			echo "null submission found!";
		}else{
            extract($_REQUEST);
			$file = fopen('user.txt', 'a');
			$user = $id."|".$password."|".$name. "|".$email. "|".$type. "\n";
			fwrite($file, $user);
			fclose($file);

			header('location: login.php');
		}	

	}else{
	
		header('location: login.php');
	}




?>