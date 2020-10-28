<?php
include 'template/header.php';
?>

<main>
    <div class="container">
        <div class="row">
            <div class="card col-7 m-3">
                <div class="card-header text-center">
                <h2> <?php echo $user->getFirstname() . " " . $user->getLastname() ; ?> </h2>
                <h4> Numéro identifiant:</h4>
                <p><?php echo $user->getId();?> </p>
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

            <div class="card col-4 m-3">
                <div class="card-header text-center">
                <h2>List of book(s) owned  </h2>
                </div>
                <div class="card-body">
                <?php foreach($booksByUser as $bookByUser){ ?>
                    <div class="card m-2 text-center">
                    <h5 class="card-title"> <?php echo $bookByUser->getTitle(); ?> </h5>
                    <p class="card-text"> <?php echo "Book ID : " . $bookByUser->getId(); ?> </p>
                    <a href="#" class="btn btn-danger m-2">given back</a>
                    </div>
                <?php } ?>
                    <form id="form" action="" method="post" class="m-3">
                    <h2>This guys want new book ?</h2>
                    <h3>Enter book ID to lend him </h3>
                    <div class="form-group">
                        <label for="InputBookID">Book ID</label>
                        <input name="BookID" type="number" class="form-control" id="InputBookID" aria-describedby="bookIDHelp" placeholder="Enter Book ID">
                    </div>
                    <div>
                        <input class="btn btn-primary" type="submit" name="lendbook" value="to lend">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>




<?php 
    include 'template/footer.php';
?>

