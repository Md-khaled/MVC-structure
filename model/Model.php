<?php 
include 'Book.php';
class Model{
public function setBookInfo()
{
   return [
        'php'=>new Book('PHP','Md.Khaled','PHP is a scripting language'),
        'java'=>new Book('JAVA','Md.Rakib','PHP is a programming language'),
        'c'=>new Book('C','Md.Golam','PHP is a structural language'),
    ];
}
public function getBook($title)
{
    $allbooks=$this->setBookInfo();
    return $allbooks[$title];
}
}
 ?>