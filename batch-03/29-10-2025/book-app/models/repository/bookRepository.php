<?php
declare(strict_types=1);
namespace Models\Repository;
session_start();
use Models\Book;
class BookRepository
{
  private array $books = [];

  public function addBook(Book $book): void
  {
    $this->books[] = $book;
    $_SESSION['books'] = serialize($this->books);
  } 
  public function getBooks(): array
  {
    return $this->books;
  }
  public function findBookById($id): ?Book
  {
    foreach ($this->books as $book) {
      if ($book->getId() === $id) {
        return $book;
      }
    }
    return null;
  }

  public function removeBookById($id)
  {
    foreach ($this->books as $index => $book) {
      if ($book->getId() === $id) {
        unset($this->books[$index]);
        $this->books = array_values($this->books); // Reindex array
        return true;
      }
    }
    return false;
  }

  public function updateBook($id, Book $newBook)
  {
    foreach ($this->books as $index => $book) {
      if ($book->getId() === $id) {
        $this->books[$index] = $newBook;
        return true;
      }
    }
    return false;
  }
}