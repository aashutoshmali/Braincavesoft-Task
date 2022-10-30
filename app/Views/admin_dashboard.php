
    <?php  $this->extend('includes/adminbase'); ?><br>
    <?= $this->section("adminbase");?>
     <section>
        <?php $session = session(); ?>
        <h1>welcome <?php echo $session->admin['username']; ?>!</h1><br>
        <h3>Joining Date and Time: <?php echo $session->admin['joining date']; ?></h3>
     </section>


     <?= $this->endsection("adminbase");?>