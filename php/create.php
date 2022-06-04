<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$firstname = validate($_POST['firstname']);
	$lastname = validate($_POST['lastname']);
	$username = validate($_POST['username']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);
	

	$user_data = '&firstname='.$firstname. '&lastname='.$lastname. '&username='.$username. '&email='.$email. '&password='.$password;

	if (empty($firstname)) {
		header("Location: ../index.php?error=First Name is required&$user_data");
	}else if (empty($lastname)) {
		header("Location: ../index.php?error=Last Name is required&$user_data");
	}else if (empty($username)) {
		header("Location: ../index.php?error=Username is required&$user_data");
	}else if (empty($email)) {
			header("Location: ../index.php?error=Email is required&$user_data");
	}else if (empty($password)) {
				header("Location: ../index.php?error=Password is required&$user_data");
	}else {

       $sql = "INSERT INTO users(firstname, lastname, username, email, password) 
               VALUES('$firstname', '$lastname', '$username', '$email', '$password')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}