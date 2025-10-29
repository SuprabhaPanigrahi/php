<?php
    include_once '../autoload.php';
    use Models\Book;
    use Controllers\BookController;

    if(!isset($_POST))
    {
      $author = $_POST['author'] ?? ''; 
      $title = $_POST['title'] ?? '';
      $book = new Book(0, $title, $author, '', '', '', 0, '', '');

      $bookController = new BookController();
      $bookController->addBook(book: $book);
      header('Location: ../views/book-list.php');
      exit(); 
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <div>
       <form action="add-book.php" method="post">
          <label for="title">Book Title:</label>
          <input type="text" id="title" name="title" required>
          <br>
          <label for="author">Author:</label>
          <input type="text" id="author" name="author" required>
          <button type="submit">Add Book</button>
       </form>
    </div>
</body>
</html>