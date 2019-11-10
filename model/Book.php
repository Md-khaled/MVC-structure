<?php 
class Book
{
 public $title;
 public $author;
 public $desscription;
 public function __construct($title,$author,$desscription)
 {
    $this->title=$title;
    $this->author=$author;
    $this->desscription=$desscription;
 }
}

?>