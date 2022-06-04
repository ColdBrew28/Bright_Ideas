<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link, "delete from booktable1 where id=$id");
?>
<script type="text/javascript">
window.location="bookstorage.php";
</script>