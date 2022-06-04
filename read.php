<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Read</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
				<th scope="col">#</th>
			      <th scope="col">First Name</th>
			      <th scope="col">Last Name</th>
				  <th scope="col">Username</th>
				  <th scope="col">Email</th>
				  <th scope="col">Password</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
				<th scope="row"><?=$i?></th>
			      <td><?=$rows['firstname']?></td>
			      <td><?php echo $rows['lastname']; ?></td>
				  <td><?php echo $rows['username']; ?></td>
				  <td><?php echo $rows['email']; ?></td>
				  <td><?php echo $rows['password']; ?></td>
			      <td><a href="update.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="php/delete.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-info">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a href="index.php" class="btn btn-info">Create</a>
				<br>
				<a href="index.html" class="btn btn-success">Go to THE ATTIC LIBRARY Bookstore</a>
			</div>
		</div>
	</div>
</body>
</html>