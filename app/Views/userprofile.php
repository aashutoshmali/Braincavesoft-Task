
    <?php  $this->extend('includes/userbase'); ?><br>
    <?= $this->section("userbase");?>
    <style>

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

     <section >
     <div style="margin-left:40%;">
        <?php $session = session(); ?>
        <h1>Profile</h1><br>
        <label class="form-label font-weight-bold">Name:</label> <?php echo $session->user['username']; ?><br>
        <label class="form-label font-weight-bold">EmailId:</label> <?php echo $session->user['email']; ?><br>
        <label class="form-label font-weight-bold">Phone:</label>  <?php echo $session->user['phone']; ?><br><br>
        <button id="myBtn"  class="btn btn-primary">Update</button>
     </div>
     </section>


     <div id="myModal" class="modal">
    <div class="modal-content">
    <span class="close">&times;</span>
    <form  class="form-control"  action="<?= base_url(); ?>/userupdate" method="post" ><br>
   <label class="form-label font-weight-bold">Name:</label><br>
   <input class="form-control bg-grey "   type="name" value="<?php echo $session->user['username']; ?>" name="username" required><br>
   
   <label class="form-label font-weight-bold">Phone:</label><br>
   <input class="form-control bg-grey "   type="tel" value="<?php echo $session->user['phone']; ?>" name="phone" required><br>
   <label class="form-label font-weight-bold">EmailId:</label><br>
   <input class="form-control bg-grey "   type="email" value="<?php echo $session->user['email']; ?>" name="email" required><br>
   <input class="form-control bg-grey "   name="id" type="hidden" value=" <?php echo $session->user['id']; ?>"  required>

   <button type="submit" class="btn btn-primary">Save changes</button><br><br>
   </div>
        
</form>
      </div>
    </div>
  

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<?= $this->endsection("userbase");?>


  