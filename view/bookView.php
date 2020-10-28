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
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
            <?php }else{?>  
            <!-- else, show form to add one owner -->
            <form id="form" action="" method="post" class="m-3">
                <h2>Nobody has this book</h2>
                <h3>Enter user ID to lend him </h3>
                <div class="form-group">
                    <label for="InputUserID">User ID</label>
                    <input name="UserID" type="number" class="form-control" id="InputUserID" aria-describedby="userIDHelp" placeholder="Enter User ID">
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" name="lendbook" value="to lend">
                </div>
            </form>
          

            <?php  } 
            // TEST $_POST
            // var_dump($_POST);
            // echo $_POST['UserID'];
            ?>

            </div>
        </div>
    </div>  
</main>


<?php 
    include 'template/footer.php';
?>

