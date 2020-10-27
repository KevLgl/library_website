<?php
include 'template/header.php';
?>

<main>
    <div class="card w-50 m-3">
        <div class="card-header text-center">
        <h2> <?php echo $user->getFirstname() . " " . $user->getLastname() ; ?> </h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">Age: </h5>
            <p class="card-text"><?php echo $user->getAge(); ?></p>
            <hr class="my-4">
            <h5 class="card-title">City: </h5>
            <p class="card-text"><?php echo $user->getCity(); ?></p>
            <hr class="my-4">
            <h5 class="card-title">Phone: </h5>
            <p class="card-text"><?php echo $user->getPhone(); ?></p>
            <hr class="my-4">
            <h5 class="card-title">Email: </h5>
            <p class="card-text"><?php echo $user->getEmail(); ?></p>
            <hr class="my-4">
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</main>




<?php 
    include 'template/footer.php';
?>

