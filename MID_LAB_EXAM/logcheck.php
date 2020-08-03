<?php
	session_start();

	if(isset($_POST['submit'])){

		$id		= $_POST['id'];
        $password 	= $_POST['password'];
      //  $type   = 'user';

		if(empty($id) || empty($password) ){
			echo "null submission found!";
		}else{


			$file  = fopen('user.txt', 'r');
			$data  = fread($file, filesize('user.txt'));
			//fclose($data);

			$user = explode('|', $data);

			if($id == trim($user[0]) && $password == trim($user[1]) && trim($user[4]=='user')){
				$_SESSION['status'] = "OK";
				header('location: userhome.php');
			}else if($id == trim($user[0]) && $password == trim($user[1]) && trim($user[4])=='admin'){
				$_SESSION['status'] = "OK";
				header('location: adminhome.php');
			}
		}	

	}else{
		//echo "invalid request";
		header('location: login.php');
	}




?> 