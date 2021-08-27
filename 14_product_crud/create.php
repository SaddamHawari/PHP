<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root',''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 


// $tittle = $_POST['tittle'];
// $description = $_POST['description'];
// $price = $_POST['price'];
// $date = date('Y-m-d H:i:s');

// $pdo->exec("INSERT INTO products (tittle, image, description, price,    create_date)
//                   VALUE ('$tittle', '', '$description', $price, '$date')
//              ");
// ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="app.css">
    <title>Product CRUD</title>
  </head>
  <body>
    <h1>Create new product</h1>
  
    <form action="" method="post">
  <div class="form-group">
    <label>Product Image</label><br>
    <input type="file" name="Image">
  </div>
  <div class="form-group">
    <label>Product Tittle</label>
    <input type="text" name="Tittle" class="form-control">
  </div>
  <div class="form-group">
    <label>Product Description</label>
    <textarea type="text" name="Description" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label>Product Price</label>
    <input type="number" name="Price" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </body>
</html>