<?php

include 'template/header.php';
?>

<main>
    <h2 class="m-3">Add book to ur library</h2>

    <form class="m-3" action="" method="POST">
        <div class="form-group w-50 ">
            <label for="inputTitle">Title</label>
            <input name="title" type="text" class="form-control" id="inputTitle" aria-describedby="TitleHelp" placeholder="Enter title of ur book">
        </div>
        <div class="form-group w-50 ">
            <label for="inpoutAuthor">Author</label>
            <input name="author" type="text" class="form-control" id="inpoutAuthor" aria-describedby="AuthorHelp" placeholder="Enter author">
        </div>
        <div class="form-group w-50 ">
            <label for="inpoutRelease_date">Release Date</label>
            <input name="release_date" type="date" class="form-control" id="inpoutRelease_date" aria-describedby="Release_dateHelp" placeholder="Select date">
        </div>
        <div class="form-group w-50">
            <label for="categoriesFormControlSelect">Categories</label>
            <select name="categories" class="form-control" id="categoriesFormControlSelect">
                <option>animation</option>
                <option>fantastique</option>
                <option>thriller</option>
                <option>drame</option>
                <option>horreur</option>
            </select>
        </div>

        <div class="form-group w-50 ">
            <label for="inpoutSummary">Summary</label>
            <input name="summary" type="text" class="form-control" id="inpoutSummary" aria-describedby="SummaryHelp" placeholder="Enter summary" style="height : 20vh">
        </div>
        <!-- submit -->
        <div>
            <input  name="addbook" type="submit" class="btn btn-primary" value="Add book">
        </div>
    </form>
</main>




<?php 
if(isset($_POST["addbook"]) && !empty($_POST["addbook"])){
    $book = new Book($_POST);
    var_dump($book);
}


    include 'template/footer.php';
?>

