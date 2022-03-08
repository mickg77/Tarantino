<?php include('header.php');?>
<?php require('connect.php');?>
<?php session_start();?>

<?php
    if(session_destroy()){
    ?>
        <div class="alert alert-success" role="alert">
        Logout Complete.
    </div>
    <?php
    }
?>

<?php include('footer.php');?>