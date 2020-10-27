<?php

include 'template/header.php';

var_dump($book); // FAIRE CARTE LIVRE + VUE 
?>

<main>
    <div class="card w-50 m-3">
    <div class="card-header text-center">
        <?php echo $book->getTitle(); ?>
    </div>
    <div class="card-body">
        <h5 class="card-title">Author:</h5>
        <p class="card-text"><?php echo $book->getAuthor(); ?></p>
        <hr class="my-4">
        <h5 class="card-title">Release date:</h5>
        <p class="card-text"><?php echo $book->getRelease_date(); ?></p>
        <hr class="my-4">
        <h5 class="card-title">Status:</h5>
        <p class="card-text"><?php echo $book->getStatus(); ?></p>
        <hr class="my-4">
        <h5 class="card-title">Categories:</h5>
        <p class="card-text"><?php echo $book->getCategories(); ?></p>
        <hr class="my-4">
        <h5 class="card-title">Summary:</h5>
        <p class="card-text"><?php echo $book->getSummary(); ?></p>
        <hr class="my-4">
        <h5 class="card-title">Owner id:</h5>
        <p class="card-text"><?php echo $book->getAuthor(); ?></p>
        <hr class="my-4">
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>




    <hr class="my-4">
</main>


<?php 
    include 'template/footer.php';
?>

