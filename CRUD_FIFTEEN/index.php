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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a type="button" class="btn btn-primary text-light nav-link active" href="create.php">addnew</a>
        </li>               
      </ul>      
    </div>
  </div>
</nav>
<!-- table area -->
<div class="container my-4">
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>PHONE</th>
      <th>JOINING DATE</th>
      <th>ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    <?php  
      include 'database.php';
      $conn = connectDB();
      $sql = "select * from employees";
      $result = $conn->query($sql);
       if(!$result){
         die("Invalid query!");
       }
        while($row=$result->fetch_assoc()){
            echo " 
            <tr>
            <th>$row[id]</th>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[phone]</td>
            <td>$row[join_date]</td>
            <td>
              <a class='btn btn-success' href='update.php?id=$row[id]'>Edit</a>
              <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
            </td>
          </tr>
          ";
        }    
    ?>
  </tbody>
</table>
</div>
<!--end of table area -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>