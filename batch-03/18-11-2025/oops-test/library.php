<?php

class Library{
  private $books = array();
  private $members = array();

  private $allocatedBooks = array(); // To track issued books 

  public function __construct($books = array(), $members = array()){
    $this->books = $books;
    $this->members = $members;
  }
  
  public function addBook($book){
    $this->books[] = $book;
  }
  public function removeBook($bookTitle){
    foreach($this->books as $key => $book){
      if($book->getTitle() === $bookTitle){
        unset($this->books[$key]);
        // Reindex the array
        $this->books = array_values($this->books);
        return "Book '{$bookTitle}' has been removed from the library.";
      }
    }
    return "Book '{$bookTitle}' not found in the library.";
  }

   public function displayBooks(){
    foreach($this->books as $book){
      echo $book->displayDetails() . "\n";
    }
  }
  public function addMember($member){
    $this->members[] = $member;
  }

  public function removeMember($memberID){
    foreach($this->members as $key => $member){
      if($member->getMemberID() === $memberID){
        unset($this->members[$key]);
        // Reindex the array
        $this->members = array_values($this->members);
        return "Member with ID '{$memberID}' has been removed from the library.";
      }
    }
    return "Member with ID '{$memberID}' not found in the library.";
  }

  public function displayMembers(){
    foreach($this->members as $member){
      echo $member->displayMemberDetails() . "\n";
    }
  }

  public function searchMember($memberID){
    foreach($this->members as $member){
      if($member->getMemberID() === $memberID){
        return $member;
      }
    }
    return null;
  }

  public function searchBook($bookTitle){
    foreach($this->books as $book){
      if($book->getTitle() === $bookTitle){
        return $book;
      }
    }
    return null;
  }

  public function issueBook($memberID, $bookTitle){
    // Check if member exists
    $member = $this->searchMember($memberID);
    if(!$member){
      return "Member with ID '{$memberID}' not found.";
    }

    // Check if book exists and is available
    $book = $this->searchBook($bookTitle);
    if(!$book){
      return "Book '{$bookTitle}' not found.";
    }
    if($book->getAvailability() === 'unavailable'){
      return "Book '{$bookTitle}' is currently unavailable.";
    }

    // Issue the book
    $book->setAvailability('unavailable');
    $this->allocatedBooks[$memberID][] = $book;
    return "Book '{$bookTitle}' has been issued to member ID '{$memberID}'.";
  }

  public function receieveBook($memberID, $bookTitle){
    if(isset($this->allocatedBooks[$memberID])){
      foreach($this->allocatedBooks[$memberID] as $key => $book){
        if($book->getTitle() === $bookTitle){
          // Mark book as available
          $book->setAvailability('available');
          // Remove from allocated books
          unset($this->allocatedBooks[$memberID][$key]);
          // Reindex the array
          $this->allocatedBooks[$memberID] = array_values($this->allocatedBooks[$memberID]);
          return "Book '{$bookTitle}' has been returned by member ID '{$memberID}'.";
        }
      }
    }
    return "No record of book '{$bookTitle}' being issued to member ID '{$memberID}'.";
  }
  public function displayIssuedBooks(){
    foreach($this->allocatedBooks as $memberID => $books){
      echo "Member ID: {$memberID}\n";
      foreach($books as $book){
        echo "- " . $book->displayDetails() . "\n";
      }
    }
  }
}