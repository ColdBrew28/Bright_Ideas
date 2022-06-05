<?php
ini_set('display_errors', '1');
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'bright_ideas');
if (isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE Username='$Username' AND Password='$Password'");
    $row = mysqli_fetch_array($query);

    $stmt = mysqli_query($conn, "SELECT * FROM users WHERE Username='$Username' AND Password='$Password'");
    
    if(isset($_POST["submit"])) {

        if (empty($Username) and empty($Password)) {
          echo "<script>
                        alert('Please enter your Username and Password.');
                        window.location='/bright_ideas/login.html';
                    </script>";
        } elseif (empty($Username)) {
          echo "<script>
                        alert('Please enter your Username.');
                        window.location='/bright_ideas/login.html';
                    </script>";
        } elseif (empty($Password)) {
          echo "<script>
                        alert('Please enter you Password.');
                        window.location='/bright_ideas/login.html';
                    </script>";
        } else {
    
          if($Username == $Username and $Password == $Password) {
            echo "<script>
                            window.location='/bright_ideas/index.html';
                        </script>";
          } elseif($Username == $Username and $Password != $Password) {
            echo "<script>
                            alert('Incorrect credentials! Please recheck your Username or Password.');
                            window.location='/bright_ideas/login.html';
                        </script>";
          } elseif($Username != $Username) {
            echo "<script>
                            alert('Account does not exist. Please register or try again.');
                            window.location='/bright_ideas/login.html';
                        </script>";
          } else {
            echo "<script>
                            alert('An error occurred. Please try again.');
                            window.location='/bright_ideas/login.html';
                        </script>";
          }
        }
    }
}