<?php include('header.php');?>
<?php session_start();?>
    <?php
      if(isset($_SESSION['login'])){
        ?>
        <!--STUFF GOES HERE-->
        <h1>Admin</h1>
        
        <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#exampleModal">Dwight</button>
            <button type="button" class="list-group-item list-group-item-action">Jim</button>
            <button type="button" class="list-group-item list-group-item-action">Pam</button>
            
        </div><!--list group-->
        
        
    </div><!--end of container-->
    
    <!--modal-->
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <form name="user">
        <div class="mb-3">
        <label for="usernumberbox" class="form-label">User ID</label>
            <input name="usernumberbox" type="text" placeholder="001">
        </div>
        <div class="mb-3">
            <label for="usernamebox" class="form-label">Username</label>
            <input name="usernamebox" type="text" placeholder="Dwight">
        </div>
        <div class="mb-3">
             <label for="passwordbox" class="form-label">Password</label>
            <input name="passwordbox" type="text" placeholder="beets">
        </div>
        <div class="mb-3">
            <label for="activebox" class="form-label">Active</label>
            <input name="activebox" type="text" placeholder="True"> 
        </div>
        
    </form>
  
    </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>
</div>
</div>
</div>
    
    <!--end of modal-->
      <?php
      }  
          ?> 
        
<?php include('footer.php');?>