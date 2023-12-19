<?php

require_once("./CRUD.php");

$crud = new CRUD();
$all_products = $crud->get_all_products();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <title>CRUD</title>
</head>

<body>
  <div class="container">
    <header class="text-center p-5 display-1 mb-5 bg-link-light">
      CRUD App
    </header>
    <table class="table table-striped">
      <thead>
        <th>#</th>
        <th>Name</th>
        <th style="width: 55%">Description</th>
        <th>Price</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php
        for ($i = 0; $i < count($all_products); $i++) {
          echo "<tr>";
          for ($j = 0; $j < count($all_products[$i]); $j++) {
            echo "<td>";
            echo $all_products[$i][$j];
            echo "</td>";
          }
          echo "<td class='align-middle m-auto'>
                  <div class='d-flex align-items-center gap-3'>
                    <a href='./update.php?id={$all_products[$i][0]}' class='btn btn-primary'>
                      edit
                    </a>
                    <a href='./delete.php?id={$all_products[$i][0]}' class='btn btn-danger'>
                      delete
                    </a>
                  </div>
                </td></tr>";
        }
        ?>
      </tbody>
    </table>
    <a href="./add.php" class="btn btn-success">add prodect</a>
  </div>


  <script src="./bootstrap/js/bootstrap.bundle.js"> </script>
</body>

</html>