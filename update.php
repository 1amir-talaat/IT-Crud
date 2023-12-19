<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
  <title>update</title>
</head>

<body class="d-flex flex-column align-items-center justify-content-center vh-100">
  <?php
  require_once("./CRUD.php");

  $id = $_GET['id'];

  $crud = new Crud();
  $product_detales = $crud->get_products($id);
  ?>

  <form method="post" class="bg-light p-4 rounded-5 w-25">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input require type="text" value="<?php echo $product_detales[0][1] ?>" class="form-control" id="exampleInputEmail1" name="name" aria-describedby=" emailHelp" />
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <input require type="text" value="<?php echo $product_detales[0][2] ?>" class="form-control" name="description" id="exampleInputPassword1" />
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Price</label>
      <input require type="number" value="<?php echo $product_detales[0][3] ?>" class="form-control" name="price" id="exampleInputPassword1" />
    </div>
    <input type="submit" value="update" name="submit" class="btn btn-primary">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $result = $crud->update_products($id, $_POST);
    if ($result) {
      header("Location:index.php");
    }
  }

  ?>
</body>

</html>