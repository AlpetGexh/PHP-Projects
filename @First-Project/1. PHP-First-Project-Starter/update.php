<?php include('config.php');
if(isset($_POST['update'])){
$id = $_POST['update'];
$body = $_POST['body'];
$emri_post = $_POST['emri_post'];

$update = "UPDATE post set body= '$body', emri_post= '$emri_post' where id=$id";
mysqli_query($db,$update);
header("Location:userpost.php");
}
?>