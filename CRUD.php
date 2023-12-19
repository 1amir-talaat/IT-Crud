<?php

require_once("db.php");

class CRUD extends DB {
  public function get_all_products() {
    $query = "SELECT * FROM `products`";
    $result = $this->connection->query($query);

    if (!$result) {
      return false;
    }

    $data = $result->fetch_all();
    return $data;
  }

  public function get_products($id) {
    $query = "SELECT * FROM `products` WHERE id = $id";
    $result = $this->connection->query($query);

    if (!$result) {
      return false;
    }

    $data = $result->fetch_all();
    return $data;
  }

  public function delete_products($id) {
    $query = "DELETE FROM `products` WHERE id = $id";
    $result = $this->connection->query($query);
    if (!$result) {
      return false;
    } else {
      return true;
    }
  }

  public function update_products($id, $data) {
    $query = "UPDATE `products` SET `name`='{$data["name"]}',`description`='{$data["description"]}',`price`='{$data["price"]}' WHERE id = $id";
    $result = $this->connection->query($query);
    if (!$result) {
      return false;
    } else {
      return true;
    }
  }

  public function add_products($data) {
    print_r($data);
    $query = "INSERT INTO `products` (`name`, `description`, `price`) VALUES ('{$data["name"]}','{$data["description"]}','{$data["price"]}');";
    $result = $this->connection->query($query);
    if (!$result) {
      return false;
    } else {
      return true;
    }
  }
}
