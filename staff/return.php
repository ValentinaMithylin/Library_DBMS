<?php
include 'connection.php';
$id = $_GET["Issue_ID"];
$a = date("d-m-y");
$res = mysqli_query($link, "update issue books set Return_date='$a' where id = $id");
?>

<script type="text/javascript">
    window.location="return_books.php";
</script>