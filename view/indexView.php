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
  <?php foreach ($books as $book) {  ?>
           <tr>
           <th scope="row"><?php echo $book->getId();?></th>
           <td><?php echo $book->getTitle(); ?></td>
           <td><?php echo $book->getAuthor(); ?></td>
           <td><?php echo $book->getStatus(); ?></td>
           <td><a href="book.php?id=<?php echo $book->getId(); ?>">Gerer</a></td>
         </tr>
   <?php } ?>

  </tbody>
</table>



</main>








<?php 
    include 'template/footer.php';
?>
