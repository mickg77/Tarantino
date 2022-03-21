<?php session_start();?>
<!DOCTYPE html>
<html>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="JS/js_functions.js"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container-sm justify-content-center">
            <!-- Content here -->
            <img src="images/tarantino_logo_small.png" class="img-fluid" alt="Tarantino Logo">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="films.php">Films</a>
                        <a class="nav-link" href="admin.php">Admin</a>
                        <a class="nav-link" href="user.php">User</a>
                        <?php
                        if(isset($_SESSION['login'])){
                          echo'<a class="nav-link" href="logout.php">Logout</a>';
                        }
                      ?>
                        </div>
                    </div>
                
            </nav><!--end of top section-->