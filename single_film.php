<?php require('connect.php');?>
<?php include('header.php');?>

           
            <!--STUFF GOES HERE-->
            <?php
           
            if(isset($_POST['comment_submit'])){
                $film_id=$_POST["film_id"];
                $title=$_POST["title_box"];
                $comment=$_POST["comment_box"];
                $user_id=1;

                $stmt=$conn->prepare("INSERT INTO 
                comments
                (comment_title, comment, user_id, film_id)
                VALUES
                (:comment_title,:comment,:user_id,:film_id)");
                $stmt->bindParam("comment_title",$title);
                $stmt->bindParam("comment",$comment);
                $stmt->bindParam("user_id",$user_id);
                $stmt->bindParam("film_id",$film_id);
                $stmt->execute();    
            }

            $film_id=$_GET['film_id'];
            $stmt=$conn->prepare("SELECT * FROM films WHERE film_id =:film_id");
            $stmt->bindParam("film_id",$film_id);
            $stmt->execute();
            $row=$stmt->fetch(PDO::FETCH_ASSOC);

            ?>
            <div class="card movie">
            
            <img src="images/goonies.jpg" class="card-img-top" alt="Goonies Poster">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['film_name'];?></h5>
                <p class="card-text">Blah blah....</p>
                            
            </div>
            <!-- comments section-->
            <div class="list-group">
            <?php
                $stmt=$conn->prepare("SELECT * FROM comments WHERE film_id =:film_id");
                $stmt->bindParam("film_id",$film_id);
                $stmt->execute();
              

                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <h5 class="mb-1 ms-3"><?php echo $row['comment_title'];?></h5>
                    <p class="mb-1 ms-3"><?php echo $row['comment'];?> </p>
                    <a class="mb-1 ms-3 small" href="#">Remove Comment</a>
                <?php
                }
                if(isset($_SESSION['login'])){
                    ?>
                        <form name="comment" action="" method="POST">
                        
                            
                            <input type="hidden" name="film_id" value="<?php echo $film_id;?>">
                            
                                <h4 class="display-6">Add a comment</h4>
                            
                            <!--textbox for head-->
                            <div class="form-group">
                                <label  for="title_box">Comment Title</label>
                                <input type="text" name="title_box" id="title_box" class="form-control mx-sm-3">
                            </div>
                            <!--textarea for comment-->
                            <div class="form-group">
                                <label for="comment_box">Comment</label>
                                <textarea name="comment_box" class="form-control mx-sm-3"></textarea>
                            </div>
                            <button type="submit" name="comment_submit" class="w-50 my-1 btn btn-primary">Submit</button>    

                              
                        </form>
                        
                        

                    <?php

                }

                ?>    
        
        </div>
          
            
            </div>
            
            <?php include('footer.php');?>