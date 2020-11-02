<?php

include 'template/header.php';
 // FAIRE CARTE LIVRE + VUE 
?>

<main>
    <div class="container">
        <div class="row">
            <div class="card col-7 m-3">
                <div class="card-header text-center">
                <h2> <?php echo $book->getTitle(); ?> </h2>
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
                    <p class="card-text"><?php echo $book->getOwner_id(); ?></p>
                    <hr class="my-4">
                    <form action="" method="POST">
                        <input  name="removebook" type="submit" value="Remove definitely" class="btn btn-danger">
                    </form>
                </div>
            </div>
            <!-- if user have book, show his card -->
            <?php  if($userByBook){ ?>
                    <div class="card col-4 m-3">
                        <div class="card-header text-center">
                        <h2> Owner </h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Name</h5>
                            <p class="card-text"><?php echo $userByBook->getFirstname() . " " . $userByBook->getLastname() ;?></p>
                            <hr class="my-4">
                            <h5 class="card-title">Id number</h5>
                            <p class="card-text"><?php echo $userByBook->getId(); ?></p>
                            <hr class="my-4"> 
                            <form action="" method="POST">
                                <input  name="updatenull" type="submit" value="This user has give back" class="btn btn-info">
                            </form>
                        </div>
            <?php }else{?>  
            <!-- else, show form to add one owner -->
            <form id="form" action="" method="post" class="m-3">
                <h2>Nobody has this book</h2>
                <h3>Enter user ID to lend him </h3>

            <div class="form-group">
                <label for="selectUser">Select user</label>
                <select class="form-control" id="selectUser" name="UserID">
                <!-- catch all users for display them -->
                <?php foreach ($users as $user) {  ?>
                <option> <?php echo $user->getId() . " - " . $user->getFirstname() . " " . $user->getLastname(); ?> </option>
                <?php } ?>

                </select>
            </div>

            <div>
                    <input class="btn btn-primary" type="submit" name="lendbook" value="to lend">
                </div>
            </form>

          

            <?php }?>

            </div>
        </div>
    </div>  
</main>


<?php 
    include 'template/footer.php';
?>

