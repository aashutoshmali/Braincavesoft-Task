
    <?php  $this->extend('includes/userbase'); ?><br>
    <?= $this->section("userbase");?>

     <section >
        <?php $session = session(); ?>
        <h1>welcome <?php echo $session->user['username']; ?>!</h1><br>
        <h3>Joining Date and Time: <?php echo $session->user['joining date']; ?></h3>
     </section>


    <?= $this->endsection("userbase");?>