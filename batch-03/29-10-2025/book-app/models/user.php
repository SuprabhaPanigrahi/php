<?php
namespace Models;
class User
{
  private $id;
  private $name;
  public function __construct($id, $name)
  {
    $this->id = $id;
    $this->name = $name;
  }
  public function __tostring()
  {
    return "User ID: " . $this->id . ", Name: " . $this->name;
  }
}