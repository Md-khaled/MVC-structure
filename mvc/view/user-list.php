<?php 
foreach ($books as $key => $book) {
    echo('<pre>');
?>
<a href="index.php?book=<?php echo($key); ?>"><?php echo($book->title);?></a> 
<?php echo('Title: '.$book->title.' Author: '.$book->author.' Description: '.$book->desscription);?>
  
<?php } ?>