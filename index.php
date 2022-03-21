
<?php include('header.php');?>
<?php require('connect.php');?>


<?php

if(isset($_POST['login'])){
  //get info from form
  $salt ="anExtraBit";
  $username = trim($_POST['loginBox']);
  $password = trim($_POST['passwordBox']);
  $password = md5($password.$salt);

  $stmt=$conn->prepare("SELECT * FROM users WHERE username=:username AND password =:password");
  $stmt->bindParam("username",$username);
  $stmt->bindParam("password",$password);
  $stmt->execute();
  $row=$stmt->fetch(PDO::FETCH_ASSOC);

  if($stmt->rowCount()>0){
    
    $_SESSION['login']    =      true;
    $_SESSION['type']     =      $row['user_type'];
    $_SESSION['username'] =      $row['username'];
    $_SESSION['user_id']  =      $row['user_id'];
    
    ?>
    <div class="alert alert-success" role="alert">
      Login successful.
    </div>
    <?php
  }
  else{
    ?>
    <div class="alert alert-danger" role="alert">
      Login unsuccessful, please try again.
    </div>
    <?php
  }
}


if(!isset($_SESSION['login'])){
  ?>
  <form name="login" action="" method="POST">                     
  <div class="mb-3">
    <label for="loginBox" class="form-label">Username</label>
    <input type="text" class="form-control" id="loginBox" name="loginBox">
    <p id="text" style="display:none">Capslock is on</p>

  </div>
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="passwordBox">
  </div> 
    <button name="login" type="submit" value="login" class="btn btn-primary" onclick="setCookie('name',document.getElementById('loginBox').value,8);">Sign In</button>
  <p>Don't have an account? Sign up <a href="signup.php">here</a>
</form>

<?php
}
?>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner w-100">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/goonies.jpg" alt="First slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100 " src="images/jaws.jpg" alt="Second slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="images/jurassic.jpg" alt="Third slide">
      </div>

    </div><!--end of carousel inner-->
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div><!--end of carousel example controls-->

            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="images/goonies.jpg" alt="Goonies Cover" onclick="setCookie('movies','goonies',5);">
                    </div>
                    <div class="col">
                        <img src="images/jaws.jpg" alt="Scary Shark">
                    </div>
                    <div class="col">
                        <img src="images/jurassic.jpg" alt="Jurassic">
                    </div>

                </div>

            </div>

<?php include('footer.php');?>