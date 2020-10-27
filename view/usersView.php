<?php

include 'template/header.php';
?>

<main>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">age</th>
        <th scope="col">City</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Gestion</th>

        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) {  ?>
            <tr>
            <th scope="row"><?php echo $user->getId();?></th>
            <td><?php echo $user->getFirstname(); ?></td>
            <td><?php echo $user->getLastname(); ?></td>
            <td><?php echo $user->getAge(); ?></td>
            <td><?php echo $user->getCity(); ?></td>
            <td><?php echo $user->getPhone(); ?></td>
            <td><?php echo $user->getEmail(); ?></td>
            <td><a href="user.php?id=<?php echo $user->getId(); ?>">Gerer</a></td>
            </tr>
    <?php } ?>

    </tbody>
    </table>
</main>



<?php 
    include 'template/footer.php';
?>

