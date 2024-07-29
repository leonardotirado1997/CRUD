<?php
include 'conexion.php';

$id = $_GET['id'];

$query = "SELECT * FROM clients WHERE id = $id";
$result = mysqli_query($conexion, $query);
$row = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <div class="container">
    <title>Edit</title>
</head>

<body>
  <div class="container">
    <h1>Update Client</h1>
    <form action="submit.php?id=<?= $row['id'] ?>" method="post" class="form mt-5">
      <div class="form-group row">
        <label for="id" class="col-sm-2 col-form-label">Code</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="id" disabled value="<?= $row['id'] ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Edit name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="<?= $row['name'] ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Edit email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" value="<?= $row['email'] ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="phone" class="col-sm-2 col-form-label">Edit phone</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" name="phone" value="<?= $row['phone'] ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label">Edit address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="address" value="<?= $row['address'] ?>">
        </div>
      </div>

      <input type="submit" class="btn btn-primary col-3 offset-4" value="Save">
      <a href="index.php" class="col-3 btn btn-outline-secondary">Cancel</a>
    </form>
  </div>
</body>

</html>