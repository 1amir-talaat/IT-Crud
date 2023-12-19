<?php

include("./CRUD.php");

$id = $_GET["id"];

$crud = new Crud();

$result = $crud->delete_products($id);

if ($result) {
  header("Location:index.php");
}
