<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">First Name</label>
		     <input type="firstname" 
		           class="form-control" 
		           id="firstname" 
		           name="firstname" 
		           value="<?php if(isset($_GET['firstname']))
		                           echo($_GET['firstname']); ?>" 
		           placeholder="Enter firstname">
		   </div>

		   <div class="form-group">
		     <label for="email">Last Name</label>
		     <input type="lastname" 
		           class="form-control" 
		           id="lastname" 
		           name="lastname" 
		           value="<?php if(isset($_GET['lastname']))
		                           echo($_GET['lastname']); ?>"
		           placeholder="Enter lastname">
		   </div>

		   <div class="form-group">
		     <label for="email">Username</label>
		     <input type="username" 
		           class="form-control" 
		           id="username" 
		           name="username" 
		           value="<?php if(isset($_GET['username']))
		                           echo($_GET['username']); ?>"
		           placeholder="Enter username">
		   </div>

		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>"
		           placeholder="Enter email">
		   </div>

		   <div class="form-group">
		     <label for="email">Password</label>
		     <input type="password" 
		           class="form-control" 
		           id="password" 
		           name="password" 
		           value="<?php if(isset($_GET['password']))
		                           echo($_GET['password']); ?>"
		           placeholder="Enter password">
		   </div>

		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-warning"
		           name="update">Update</button>
		    <a href="read.php" class="btn btn-warning">View</a>
			<br>
			<a href="index.html" class="btn btn-success">Go to THE ATTIC LIBRARY Bookstore</a>
	    </form>
	</div>
</body>
</html>