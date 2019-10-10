<?php include('includes/dbh.inc.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include('components/header.php') ?>
<section class="container grey-text">
    <h4 class="center">Login</h4>
    <form class="white" action="">
        <label for="">Email: </label>
        <input placeholder="example@email.com" type="email">
        <label for="">Password: </label>
        <input placeholder="************" type="password">
        <input type="submit" class="center">
    </form>
</section>
<?php include('components/footer.php') ?>
</html>
