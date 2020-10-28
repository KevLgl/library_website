<?php
include 'template/header.php';
?>
<main>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Status</th>
      <th scope="col">Gestion</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($books as $book) {  
    ?>    
           <tr>
           <th scope="row"><?php echo $book->getId();?></th>
           <td><?php echo $book->getTitle(); ?></td>
           <td><?php echo $book->getAuthor(); ?></td>
           <?php 
           // IF THIS BOOK HAVN'T OWNER, his status is available
           if($book->getOwner_id() === NULL){
            $book->setStatus("available");
            echo $status;
           }
           // IF THIS BOOK HAS OWNER, his status is unavailable
           else{
            $book->setStatus("unavailable") ;
           }
           // Store status
           $status = $book->getStatus();
            ?>
           <?php 
           //if STATUS === AVAILABLE, the text is green
           if($status === "available"){ 
            echo "<td style='color: green'>" . $status . "</td>"; 
            }
           //if STATUS === UNAVAILABLE, the text is red
            elseif($status === "unavailable"){
              echo "<td style='color: red'>" . $status . "</td>"; 
            } 
            ?>

           <td><a href="book.php?id=<?php echo $book->getId(); ?>">Gerer</a></td>
         </tr>
   <?php } ?>

  </tbody>
</table>



</main>








<?php 
    include 'template/footer.php';
?>
