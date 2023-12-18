<?php

abstract class Person {
  public $name;
  public $password;
  public $email;

  public function __construct($name, $password, $email) {
    $this->name = $name;
    $this->password = $password;
    $this->email = $email;
  }
}

class User extends Person {
  public const x = 15;

  public function get_name() {
    return $this->name;
  }

  public function get_password() {
    return $this->password;
  }

  public function get_email() {
    return $this->email;
  }

  public function set_name($name) {
    $this->email = $name;
  }

  public function set_password($password) {
    $this->password = $password;
  }

  public function set_email($email) {
    $this->email = $email;
  }

  public function get_self() {
    return self::x;
  }
}

$user1 = new User("amir", "26121982", "amir@gmail.com");

echo $user1->get_name() . "<br>";
echo $user1->get_email() . "<br>";
echo $user1->get_password() . "<br>";
$user1->set_password("28102006");
echo $user1->get_password() . "<br>";
echo $user1->get_self() . "<br>";
