<?php
include 'config.php';
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'bright_ideas';

// Create connection
$connection = new mysqli($servername, $username, $password, $database);


$Username = "";
$Email_Address = "";
$Password = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = $_POST["Username"];
    $Email_Address = $_POST["Email_Address"];
    $Password = $_POST["Password"];

    do {
        // if empty($id_num) || empty($Name) || empty($Payable_Fee) || empty($Balance)) || empty($Username)) {
        //     $errorMessage = "All the fields are required";
        //     break;
        // }

        // add new client to database
        $sql =  "INSERT INTO users (Username, Email_Address, Password) " .
            "VALUES ('$Username', '$Email_Address', '$Password')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $Username = "";
        $Email_Address = "";
        $Password = "";        

        $successMessage = "Client added correctly";

        header("location: login.php");
        exit;
    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login.css" />
	<link rel="shortcut icon" type="image/png" href="images/logo - Copy.png">
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form name="signin" action="login_connection.php" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="Username" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="Password" required>
            </div>
            
            <input type="submit" name="submit" value="Login" class="btn solid" />
            <div class="link"> <a href="index.html"></a></div>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

          
          <form name="signup" action="" class="sign-up-form" method="post">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="Username" value="<?php echo $Username; ?>" >
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Enter your Email_Address" name="Email_Address" value="<?php echo $Email_Address; ?>" >
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Enter Password" name="Password" value="<?php echo $Password; ?>" >
            </div>
            
            <?php
            if (!empty($successMessage)) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>

            <input type="submit" class="btn" value="Sign up" />
            <div class="link"> <a href="index.html"></a></div>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1>The Attic Library</h1>
            <h3>Are you new here?</h3>
            <p>
              Sign up and be one of us, as we launch our first website The Attic Library in which we offer finest products
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h1>The Attic Library</h1>
            <h3>Are you one of us?</h3>
            <p>
              Sign in now so you can get the latest features of The Attic Library's finest products
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
            <p>or</p>
            <button class="btn transparent" id="sign-in-btn">
              <a href="admin.html">
              Sign in as Admin
              </a>
            </button>
          </div>
          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="login.js"></script>
  </body>
</html>