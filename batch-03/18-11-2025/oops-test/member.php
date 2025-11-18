<?php

class Member{
  //Instance variables
  private $name;
  private $memberID;
  private $borrowedBooks = array();

  //constructor
  public function __construct($name='', $memberID='', $borrowedBooks=array()){
    $this->name = $name;
    $this->memberID = $memberID;
    $this->borrowedBooks = $borrowedBooks;
  }

  //Getter and Setter methods

  public function getName(){
    return $this->name;
  }
  public function setName($name){
    $this->name = $name;
  }
  public function getMemberID(){
    return $this->memberID;
  }
  public function setMemberID($memberID){
    $this->memberID = $memberID;
  }
  public function getBorrowedBooks(){
    return $this->borrowedBooks;
  }
  public function setBorrowedBooks($borrowedBooks){
    $this->borrowedBooks = $borrowedBooks;
  }

   public function borrowBook($bookTitle){
    $this->borrowedBooks[] = $bookTitle;
    return "Book '{$bookTitle}' has been added to borrowed books.";
  }

  public function returnBook($bookTitle){
    $key = array_search($bookTitle, $this->borrowedBooks);
    if($key !== false){
      unset($this->borrowedBooks[$key]);
      // Reindex the array
      $this->borrowedBooks = array_values($this->borrowedBooks);
      return "Book '{$bookTitle}' has been returned.";
    } else {
      return "Book '{$bookTitle}' not found in borrowed books.";
    }
  } 
  //display member details
  public function displayMemberDetails(){
    return "Name: {$this->name}, Member ID: {$this->memberID}, Borrowed Books: " . implode(", ", $this->borrowedBooks);
  }
}