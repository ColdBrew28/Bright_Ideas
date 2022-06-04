<?php
include "connection.php";
?>

<html lang="en">

<head>

<link rel="stylesheet" href="css/bootstrap.min.css">
<style>

.table {
  table-layout: fixed;
  width: 100%;
  word-break:break-all;
}

.table{
  border: 2px solid orange;
  text-align: center;
}

.badge-notify{
  background:red;
  position:relative;
  top: -20px;
  right: 10px;
}
.my-cart-icon-affix {
  padding-top: 15px;
  padding-left: 12px;
  padding-bottom: 10px;
  position: fixed;
  z-index: 999;
  background-color: orange;
  border-radius: 10px
}
</style>
<!-- ADDTOCART STYLE END -->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Settings | ADD BOOKS</title>
<!-- google font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
<!-- boxicons -->
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- app css -->
<link rel="stylesheet" href="shop.css">
<link rel="shortcut icon" type="image/png" href="small.png">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<!-- header -->
<header>
    <!-- mobile menu -->
    <div class="mobile-menu bg-second">
        <a href="#" class="mb-logo">THE ATTIC LIBRARY</a>
        <span class="mb-menu-toggle" id="mb-menu-toggle">
            <i class='bx bx-menu'></i>
        </span>
    </div>
    <!-- end mobile menu -->
    <!-- main header -->
    <div class="header-wrapper" id="header-wrapper">
        <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
            <i class='bx bx-x'></i>
        </span>
        <!-- top header -->
        <div class="bg-second">
            <div class="top-header container">
                <ul class="devided">
                    <li>
                        <a href="#">863-30114</a>
                    </li>
                    <li>
                        <a href="#">TCPinquire@gmail.com</a>
                    </li>
                </ul>
                <ul class="devided">
                    <li class="dropdown">
                        <a href="">USD</a>
                        <i class='bx bxs-chevron-down'></i>
                        <ul class="dropdown-content">
                            <li><a href="#">VND</a></li>
                            <li><a href="#">JPY</a></li>
                            <li><a href="#">EUR</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="">ENGLISH</a>
                        <i class='bx bxs-chevron-down'></i>
                        <ul class="dropdown-content">
                            <li><a href="#">VIETNAMESE</a></li>
                            <li><a href="#">JAPANESE</a></li>
                            <li><a href="#">FRENCH</a></li>
                            <li><a href="#">SPANISH</a></li>
                        </ul>
                    </li>
                    <li><a href="#">ORDER TRACKING</a></li>
                </ul>
            </div>
        </div>
        <!-- end top header -->
        <!-- mid header -->
        <div class="bg-main">
            <div class="mid-header container1">
                <a class="navbar-brand" href="index.html"><img src="logo (2).png"></a>
                <div class="search">
                    <input type="text" placeholder="Search">
                    <i class='bx bx-search-alt'></i>
                </div>
                <ul class="user-menu">
                    <li><a href="#"><i class='bx bx-bell'></i></a></li>
                    <li><a href="index.php"><i class='bx bx-user-circle'></i></a></li>
                </ul>
            </div>
        </div>
        <!-- end mid header -->
        <!-- bottom header -->
        <div class="bg-second">
            <div class="bottom-header container">
                <ul class="main-menu">
                    <li><a href="index.html">home</a></li>
                    <!-- mega menu -->
                    <li class="mega-dropdown">
                        <a href="./products.html">Shop<i class='bx bxs-chevron-down'></i></a>
                        <div class="mega-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="box">
                                        <h3>Categories</h3>
                                        <ul>
                                            <li><a href="shop.html">All Products</a></li>
                                            <li><a href="ent.html">Entertainment</a></li>
                                            <li><a href="fichis.html">Fictional Historical</a></li>
                                            <li><a href="fic.html">Fiction</a></li>
                                            <li><a href="his.html">History</a></li>
                                            <li><a href="hor.html">Horror</a></li>
                                            <li><a href="educ.html">Educational</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <!-- end mega menu -->
                    <li><a href="about us.html">About Us</a></li>
                    <li><a href="contact.html">contact</a></li>
                </ul>
            </div>
        </div>
        <!-- end bottom header -->
    </div>
    <!-- end main header -->
</header>
<!-- end header -->

<!-- product-detail content -->
<div class="bg-main">
    <div class="container">
        <div class="box">
            <div class="breadcumb">
                <a href="./index.html">home</a>
                <span><i class='bx bxs-chevrons-right'></i></span>
                <a href="">Settings</a>

                <center><div class="container">
                <div class="col-lg-4">
                <h2>Insert Books</h2><br>
                <form action="" name="form1" method="post" enctype="multipart/form-data">
                <div class="form-group">
                <label for="booktitle">Book's Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter Book Title" name="title">
                </div>
                <div class="form-group">
                <label for="bookauthor">Author</label>
                <input type="text" class="form-control" id="author" placeholder="Enter Author's Name" name="author">
                </div>
                <div class="form-group">
                <label for="bookgenre">Genre</label>
                <input type="text" class="form-control" id="genre" placeholder="Enter Book's Genre" name="genre">
                </div>
                <div class="form-group">
                <label for="bookprice">Price</label>
                <input type="text" class="form-control" id="price" placeholder="Enter Book's Price" name="price">
                </div>

                <div class="form-group">
                <label for="bookoverview">Overview</label>
                <input type="text" class="form-control" id="overview" placeholder="Enter Book's Overview" name="overview">
                </div>

                <div class="form-group">
                <label for="booksypnosis">Sypnosis</label>
                <input type="text" class="form-control" id="sypnosis" placeholder="Enter Book's Sypnosis" name="sypnosis">
                </div>



                <div class="form-group">
                <label for="bookimage">Image</label>
                <input type="file" class="form-control" name="f1">
                </div>

                <br>
                <button type="submit" name="insert" class="btn-flat btn-hover">Insert</button>
                </form>
                </div>
                </div>

                <div class="container">
                <div class="col-lg-12">

                <table class="table table-bordered" width="100%">
                <thead>
                <tr>
                <th>Id</th>

                <th>Image</th>

                <th>Book Title</th>

                <th>Author</th>

                <th>Genre</th>

                <th>Price</th>

                <th>Overview</th>

                <th>Sypnosis</th>

                </tr>
                </thead>
                <tbody>

                <br>
                <br>

                <?php
                $res=mysqli_query($link,"select * from booktable1");
                while($row=mysqli_fetch_array($res))
                {
                echo "<tr>";

                echo "<td>"; echo $row["id"]; echo "</td>";
                echo "<td>"; ?> <img src="<?php echo $row["image"]; ?>" height="140" width="100"> <?php echo "</td>";
                echo "<td>"; echo $row["title"]; echo "</td>";
                echo "<td>"; echo $row["author"]; echo "</td>";
                echo "<td>"; echo $row["genre"]; echo "</td>";
                echo "<td>"; echo $row["price"]; echo "</td>";
                echo "<td>"; echo $row["overview"]; echo "</td>";
                echo "<td>"; echo $row["sypnosis"]; echo "</td>";
                echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"<button type="button" class="btn-flat btn-hover">Edit</button> <?php echo
                "</td>";
                echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"<button type="button" class="btn-flat btn-hover">X</button> <?php echo
                "</td>";
                echo "</tr>";
                }
                ?>
                </tbody>
        </table>

    </div>
</div>

<br><br></center>

<!-- footer -->
<footer class="bg-second">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3 class="footer-head">Additional Information</h3>

                <p style="text-align: justify;">The THE ATTIC LIBRARY is one of the top publishing company in the Philippines.  It produces high quality books that every book lover deserves.  </p>
                    <br>
                <p style="text-align: justify;">In addition, the firm strives to offer a welcoming environment for its customers that encourages browsing, relaxation, and an enjoyable environment.</p>
            </div>
            <div class="col-4 ">
                <h3 class="footer-head" style="text-align: center;">Connect</h3>
                <ul class="menu" style="text-align: center;">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google"></a>
                </ul>
            </div>
            <div class="col-4 ">
                <h3 class="footer-head" style="text-align: center;">Address</h3>
                <ul class="menu">
                    <p style="text-align: center;">Robinsons Pioneer Complex Pioneer St.</br>
                        Mandaluyong City 1550 Philippines</p>
                        <br>
                        <h3 style="text-align: center;">CONTACT</h3><br>
                     <p style="text-align: center;">TCPinquire@gmail.com

                     <br/>0998-527-6381

                     <br/>863-30114</p>
                </ul>
            </div>

        </div>
    </div>
    <div class="footer-copyright text-center" style="text-align: center;">© 2021 The City Pages
        <br/>ALL RIGHTS RESERVED.</div>
</footer>
<!-- end footer -->

</body>

<?php
if(isset($_POST["insert"]))
{

$tm=md5(time());
$fnm=$_FILES["f1"]["name"];
$dst="./images/".$tm.$fnm;
$dst1="images/".$tm.$fnm;
move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);

mysqli_query($link,"insert into booktable1
values(NULL,'$_POST[title]','$_POST[author]','$_POST[genre]','$_POST[price]','$_POST[overview]','$_POST[sypnosis]','$dst1')");
?>
<script type="text/javascript">
window.location.href=window.location.href;
</script>
<?php
}

?>

</html>
