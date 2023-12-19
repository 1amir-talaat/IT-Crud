<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>add</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
</head>

<body class="d-flex flex-column align-items-center justify-content-center vh-100">
  <form method="post" class="bg-light p-4 rounded-5 w-25">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input required type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby=" emailHelp" />
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <input required type="text" class="form-control" name="description" id="exampleInputPassword1" />
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Price</label>
      <input required type="number" class="form-control" name="price" id="exampleInputPassword1" />
    </div>
    <input type="submit" value="add" name="submit" class="btn btn-primary">
  </form>

  <?php
  require_once "./CRUD.php";
  $crud = new Crud();

  if (isset($_POST['submit'])) {
    $result = $crud->add_products($_POST);
    if ($result) {
      header("Location:index.php");
    }
  }

  ?>
</body>

</html>