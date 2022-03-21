<?php require('connect.php');?>
<?php include('header.php');

            //check for session information
            if(isset($_SESSION['login'])){
                ?>

                <!--welcome cookie-->
                <h1 id="welcome">Welcome, <script>document.write( getCookie("name"));</script></h1>
                <?php

                    if(isset($_POST['update_user'])){
                        $user_id    = $_POST['user_id'];
                        $username   = $_POST['username'];
                        $password   = $_POST['password'];
                        $stmt=$conn->prepare("UPDATE users SET username=:username, password=:password WHERE user_id=:user_id");

                        $stmt->bindParam("user_id",$user_id);
                        $stmt->bindParam("username",$username);
                        $stmt->bindParam("password",$password);

                        if($stmt->execute()){
                            ?>
                            <div class="alert alert-success" role="alert">
                                Changes Made
                            </div>
                            <?php
                            
                        }
                        else{
                            ?>
                                <div class="alert alert-success" role="alert">
                                 Changes not made
                                </div>
                            <?php
                        }

                    }

                    





                        $stmt=$conn->prepare("SELECT * FROM users WHERE user_id =:user_id");
                        $stmt->bindParam("user_id",$_SESSION['user_id']);
                        $stmt->execute();
                        $row=$stmt->fetch(PDO::FETCH_ASSOC);
                        ?>
                        
                        <form name="update_user" action="" method="POST">
                            <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" aria-describedby="username" value="<?php echo $row['username'];?>">  
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $row['password'];?>">
                            </div>

                            <button name="update_user" type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    
                    <?php
                    
                   
                    

                ?>
                <!--check for resubmission of user form-->
                <?php
                
                if(isset($_POST['update_form'])){
                    
                 

                }
                ?>
                
                


                <?php
            }

            else {
                ?>
                <div class="alert alert-danger" role="alert">
                    You need to be logged in to access this page. Please login <a href="index.php">here.</a>
                </div>
                <?php

            }

include('footer.php');?>