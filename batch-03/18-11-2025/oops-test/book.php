<?php
class Book{
  //Instance variables
  private $title;
  private $author;
  private $availability;

  //constructor
  public function __construct($title='', $author='', $availability=true){
    $this->title = $title;
    $this->author = $author;
    $this->availability = $availability;
  }

  //Getter and Setter methods

  public function getTitle(){
    return $this->title;
  }
  public function setTitle($title){
    $this->title = $title;
  }
  public function getAuthor(){
    return $this->author;
  }
  public function setAuthor($author){
    $this->author = $author;
  }
  public function getAvailability(){
    return $this->availability;
  }
  public function setAvailability($availability){
    $this->availability = $availability;
  }

  // Method to bowrrow the book
  public function borrowBook(){
    if($this->availability){
      $this->availability = false;
      return "You have successfully borrowed '{$this->title}'.";
    } else {
      return "Sorry, '{$this->title}' is currently unavailable.";
    }
  }

  // Method to return the book
  public function returnBook(){
    $this->availability = true;
    return "You have successfully returned '{$this->title}'.";
  }
  //display book details
  public function displayDetails(){
    $status = $this->availability ? "Available" : "Unavailable";
    return "Title: {$this->title}, Author: {$this->author}, Status: {$status}";
  }
}