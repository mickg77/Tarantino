<?php require('connect.php');?>
<?php include('header.php');?>
           
            <!--STUFF GOES HERE-->
            <?php
            $film_id=$_GET['film_id'];
            echo $film_id;
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
                ?>    
        
        </div>
          
            
            </div>
            
            <?php include('footer.php');?>