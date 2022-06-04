<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
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
	$id = validate($_POST['id']);

	if (empty($firstname)) {
		header("Location: ../update.php?id=$id&error=First Name is required");
	}else if (empty($lastname)) {
		header("Location: ../update.php?id=$id&error=Last Name is required");
	}else if (empty($username)) {
		header("Location: ../update.php?id=$id&error=Username is required");
	}else if (empty($email)) {
		header("Location: ../update.php?id=$id&error=Email is required");
	}else if (empty($password)) {
		header("Location: ../update.php?id=$id&error=Password is required");
	}else {

       $sql = "UPDATE users
               SET firstname='$firstname', lastname='$lastname', username='$username', email='$email', password='$password'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}