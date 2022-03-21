<!-- set up connections-->

<!--check if form has been submitted-->
    <!--get data from form-->
    <!--check if username already exists-->
        <!--if not then add to DB-->
    <!--display error-->

<!-- create form-->


<?php include('header.php');?>
<?php require('connect.php');?>


<?php

if(isset($_POST['signup'])){
  
  $salt ="anExtraBit";
  $username = trim($_POST['loginBox']);
  $password = trim($_POST['passwordBox']);
  $password = md5($password.$salt);
  

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
    $user_type="user";
    $stmt=$conn->prepare("INSERT INTO 
    users (username, password, active, user_type)
    VALUES
    (:username, :password, 1, :user_type)");   
    $stmt->bindParam("username",$username);
    $stmt->bindParam("password",$password);
    $stmt->bindParam("user_type",$user_type);

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
  <form name="login" action="" method="POST" class="inline">                     
  <div class="mb-3">
    <label for="loginBox" class="form-label">Username</label>
    <input type="text" class="form-control" id="loginBox" name="loginBox">

  </div>
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="passwordBox">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Re-Enter Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" name="passwordBox2">
  </div>
    

    
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