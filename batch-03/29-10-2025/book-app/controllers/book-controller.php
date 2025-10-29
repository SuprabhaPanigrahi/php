<?php
declare(strict_types=1);
namespace Controllers;
include_once __DIR__ . '/autoload.php';
use Models\Book;
use Models\Repository\BookRepository;
class BookController
{
    public function getBookDetails()
    {
        return "Book details from BookController";
    }
    public function addBook(Book $book)
    {
        $bookRepo = new BookRepository();
        $bookRepo->addBook($book);
    }
}