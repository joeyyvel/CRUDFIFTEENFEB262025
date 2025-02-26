<?php
include 'database.php';
connectDB();
echo "Welcome to create page<br><br>";
echo '<script>  alert("you are entering create page"); </script>';

if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $q = "INSERT INTO employees(name, email, phone)
          VALUES('".$name."', '".$email."', '".$phone."')";
    $conn=connectDB(); 
    $query = $conn->query($q);      
}
?>
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
    <h5 class="card-title text-center">Create New Member</h5>
    <div><br>
    <label>Name:</label>
    <input type="text" name="name" class="form-control"><br>

    <label>Email:</label>
    <input type="text" name="email" class="form-control"><br>

    <label>Phone:</label>
    <input type="text" name="phone" class="form-control"><br>

    <button class="btn btn-success" type="submit" name="submit">Submit</button>
    <a class="btn btn-dark text-light fs-6" type="submit" name="cancel" href="index.php">Cancel</a>
    </div>
    
  </div>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>