<?php
namespace Models;
class Book
{
  private $id;
  private $name;
  private $author;
  private $publisher;
  private $category;
  private $format;
  private $price;
  private $review;

  private $image;

  public function __construct($id, $name, $author, $publisher, $category, $format, $price, $review, $image)
  {
    $this->id = $id;
    $this->name = $name;
    $this->author = $author;
    $this->publisher = $publisher;
    $this->category = $category;
    $this->format = $format;
    $this->price = $price;
    $this->review = $review;
    $this->image = $image;
  }

  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getAuthor()
  {
    return $this->author;
  }
  public function setAuthor($author)
  {
    $this->author = $author;
  }

  public function getPublisher()
  {
    return $this->publisher;
  }
  public function setPublisher($publisher)
  {
    $this->publisher = $publisher;
  }
  public function getCategory()
  {
    return $this->category;
  }
  public function setCategory($category)
  {
    $this->category = $category;
  }
  public function getFormat()
  {
    return $this->format;

  }
  public function setFormat($format)
  {
    $this->format = $format;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function setPrice($price)
  {
    $this->price = $price;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReview($review)
  {
    $this->review = $review;
  }
  public function getImage()
  {
    return $this->image;
  }
  public function setImage($image)
  {
    $this->image = $image;
  }
  public function __toString()
  {
    return "Book [id=" . $this->id . ", name=" . $this->name . ", author=" . $this->author . ", publisher=" . $this->publisher . ", category=" . $this->category . ", format=" . $this->format . ", price=" . $this->price . ", review=" . $this->review . ", image=" . $this->image . "]";
  }
}

class Author{}