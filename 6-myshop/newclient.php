<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <div class="container">
    <title>New Client</title>
</head>

<body>
  <div class="container">
    <h1>New Client</h1>
    <form action="save.php" method="POST" class="form mt-5">
      <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label">Name</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="name">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label">Email</label>
        <div class="col-md-8">
          <input type="email" class="form-control" name="email">
        </div>
      </div>
      <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label">Phone</label>
        <div class="col-md-8">
          <input type="tel" class="form-control" name="phone">
        </div>
      </div>
      <div class="form-group row">
        <label for="address" class="col-md-4 col-form-label">Address</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="address">
        </div>
      </div>
      <input type="submit" value="Submit" class="col-3 btn btn-primary offset-5">

      <a href="index.php" class="col-3 btn btn-outline-secondary">Cancel</a>
    </form>

  </div>




  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>