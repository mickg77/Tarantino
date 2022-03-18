<!-- set up connections-->

<!--check if form has been submitted-->
    <!--get data from form-->
    <!--check if username already exists-->
        <!--if not then add to DB-->
    <!--display error-->

<!-- create form-->

<?php session_start();?>
<?php include('header.php');?>
<?php require('connect.php');?>


<?php

if(isset($_POST['signup'])){
  //get info from form
  $username = $_POST['loginBox'];
  $password = $_POST['passwordBox'];
  $stmt=$conn->prepare("SELECT * FROM users WHERE username=:username");
  $stmt->bindParam("username",$username);
  $stmt->execute();
  
  if($stmt->rowCount()>0){
      
    ?>
    <div class="alert alert-danger" role="alert">
      Account already exists.
    </div>
    <?php
  }
  else{
    INSERT INTO `users` (`user_id`, `username`, `password`, `active`, `user_type`) VALUES (NULL, 'michael', '1234', '1', 'user');
    $stmt=$conn->prepare("INSERT INTO 
    users (username, password, active, user_type)
    VALUES
    (:username, :password, :active, :user_type)");   
    $stmt->bindParam("username",$username);
    $stmt->bindParam("password",$password);
    $stmt->bindParam("username",1);
    $stmt->bindParam("username","user");

    $stmt->execute();
    ?>
    <div class="alert alert-success" role="alert">
      Account added.
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

  </div>
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="passwordBox">
  </div>
    
   <select class="form-select mb-3" aria-label="user type">
      <option selected>Choose User Type</option>
      <option value="user">User</option>
      <option value="staff">Staff</option>
      
    </select>
    
    <button name="signup" type="submit" value="login" class="btn btn-primary" onclick="setCookie('name',document.getElementById('loginBox').value,8);">Sign In</button>
</form>

<?php
}
?>
           

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