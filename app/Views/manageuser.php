<?php  $this->extend('includes/adminbase'); ?><br>
    <?= $this->section("adminbase");?>
    
<style>
    table, th, td {
      border:1px solid black;
    }
</style>
     <section>
        <h1 style="text-align: center; margin-top: 10px;">Manage User</h1>
      
<div>
   
   <table  class="table" style="width:100%">

       <tr>
           <th>No</th>
           <th>Name</th>
           <th>Phone</th>
           <th>Email</th>
           <th>Joining Date</th>
           <th>Delete</th>
       </tr>
       
        <tr>
       
            <?php $i=1; foreach($userdata as $ud){  ?>
       
               <td><?php echo $i++; ?></td>
               <td><?php echo $ud['username']; ?></td>
               <td><?php echo $ud['phone']; ?></td>
               <td><?php echo $ud['email']; ?></td>
               <td><?php echo $ud['joining date']; ?></td>
               <td>
                <form action="deleteuser" method="post">
                    <input type="hidden" name ="id" value="<?php echo $ud['id']; ?>">
                    <button type="submit" class="btn btn-danger" ><i class="bi bi-trash"></i></button></td>
                </form>
            
        </tr>
        <?php } ?>

   </table>
   <br>    
   
</div>
     </section>


     <?= $this->endsection("adminbase");?>