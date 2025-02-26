<?php
include "database.php";
$id = "";
$name = "";
$email = "";
$phone = "";
$error = "";
$success= "";
connectDB();
if($_SERVER["REQUEST_METHOD"] == 'GET'){
if(!isset($_GET['id'])){
    header('location:/ALLCRUD/CRUD_FIFTEEN/index.php');
    exit;
}
 $conn = connectDB();
  $id = $_GET['id'];
  $sql = "select * from employees where id=$id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  while(!$row){
    header('location:/ALLCRUD/CRUD_FIFTEEN/index.php');
    exit;
  }
  $name = $row['name'];
  $email = $row['email'];
  $phone=$row['phone'];
          
} else {
   $id = $_POST['id'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
      
   $conn = connectDB();   
   $sql = "update employees set
          name ='".$name."',
          email = '".$email."',
          phone = '".$phone."'
          where id =" .$id;
    if($conn->query($sql) === TRUE){
      echo "Data has been update";
    } else {
      echo "Error" .$sql. "<br>" .$conn->error;
    }
 $conn->close();
}

?>
<a href="index.php">back to home page</a>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Navbar</a>   
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="create.php">addnew</a>
        </li>               
      </ul>      
    </div>
  </div>
</nav>

 <div class="d-flex justify-content-center my-5">
  
<form method="post" class="card" style="width: 28rem;">

  <div class="card-body">
    <h5 class="card-title text-center">Update Employees Data</h5>
    <div><br>

    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">

    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control"><br>

    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"><br>

    <label>Phone:</label>
    <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control"><br>

    <button class="btn btn-success" type="submit" name="submit">Submit</button>
    <a class="btn btn-dark text-light fs-6" type="submit" name="cancel" href="index.php">Cancel</a>
    </div>
    
  </div>
</form>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>