<?php include('header.php');?>
            <form name="login">
                

                
              <div class="mb-3">
                <label for="loginBox" class="form-label">Username</label>
                <input type="text" class="form-control" id="loginBox" name="loginBox">
         
              </div>
                
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
                
               <select class="form-select mb-3" aria-label="user type">
                  <option selected>Choose User Type</option>
                  <option value="user">User</option>
                  <option value="staff">Staff</option>
                  
                </select>
                
                <button value="login" class="btn btn-primary" onclick="setCookie('name',document.getElementById('loginBox').value,8);">Sign In</button>
            </form>

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