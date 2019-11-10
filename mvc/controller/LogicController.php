<?php 
include 'model/Model.php';
class LogicController{
public $modal;
 public function __construct()
 {
    $this->modal=new Model();
 }
 public function invoke()
 {
    if (!isset($_GET['book'])){
        $books=$this->modal->setBookInfo();
        include './view/user-list.php';
    } else {
        $book=$this->modal->getBook($_GET['book']);
        include './view/view-user.php';

    }
 }
}
?>