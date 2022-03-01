<?php require('connect.php');?>
<?php include('header.php');?>
           
            <!--STUFF GOES HERE-->
            <h1>Films</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Page</th>
                    </tr>
                </thead>
                <tbody>
                <!--php will read from db here-->
                <?php
                $stmt=$conn->prepare("SELECT * FROM films");
                $stmt->execute();
                if($stmt->rowCount()>0){
                    //we have found record
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                    echo'<tr>
                    <td>'.$row["film_name"].'</td>
                    <td>'.$row["genre"].'</td>
                    <td><a class="btn btn-primary" href="single_film.php?film_id='.$row["film_id"].'">More...</a></td>
                </tr>';
                    }

                }
                else {
                    ?>
                        <tr>
                            <td colspan='3'>No records found</td>
                        </tr>

                    <?php
                }
                ?>
                
                             
                <!--php ends here-->
                </tbody>
                
                
            </table>
            
<?php include('footer.php');?>