<?php
include 'database.php';
if(isset($_GET['id'])){
  
    $id = $_GET['id'];
    $sql = "DELETE from `employees` where id=$id";
    $conn = connectDB();
    $conn->query($sql);
}

header('location:/ALLCRUD/CRUD_FIFTEEN/index.php');
 exit;
?>

