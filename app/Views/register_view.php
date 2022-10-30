<section class="bg-light text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container" style="margin-top:-50px;">
            <div class="d-sm-flex align-items-center justify-content-center">
                <div class="px-lg-6 py-lg-6 p-5  align-self-center" >
                <h1 class="font-weight-bold mb-3">User Registration</h1>
                <?php if (isset($errors)) { ?>
  <div class="alert alert-danger">
    <?= $errors->listErrors(); ?>
  </div>

<?php } ?>  

<?php if (isset($danger)) { ?>
  <div class="alert alert-danger">
    <?= esc($danger) ?>
  </div>

<?php } ?>  


    <form class="mb-5" action="<?= base_url();?>/register" method="POST">
                    
                        <div class="mb-3">
                            <label for="Username" class="form-label font-weight-bold">Name</label>
                            <input type="text" class="form-control bg-grey border-0" placeholder="Enter Your Full Name"
                                id="name" name="username" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label font-weight-bold">Mobile</label>
                            <input type="tel" class="form-control bg-grey border-0"
                                placeholder="Enter Your Phone Number" id="phone" name="phone"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="Username" class="form-label font-weight-bold">Email</label>
                            <input type="email" class="form-control bg-grey border-0" placeholder="Enter Your EmailId"
                                id="email" name="email"  required>
                        </div>

                        <div class="mb-3">
                            <label for="Password" class="form-label font-weight-bold">Password</label>
                            <input type="password" class="form-control bg-grey border-0 mb-2"
                                placeholder="Enter Your Password" id="password" name="password" required><i class="bi bi-eye-slash" id="togglePassword"></i>
                        </div>

                        <div class="mb-3">
                            <label for="Password" class="form-label font-weight-bold">Confirm Password</label>
                            <input type="password" class="form-control bg-grey border-0 mb-2"
                                placeholder="Confirm Your Password" id="spassword" name="cpassword" required><i class="bi bi-eye-slash"  id="togglePassword"></i>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary ">Register</button>
                    </form>
                    <p class="d-inline-block mb-3">Already User?</p><a
                        class="text-info font-weight-bold text-decoration-none" href="<?= base_url();?>/login">
                        Login!</a>
                </form>
                
            
                </div>
            </div>
        </div>
    </section>
  

    <script>
        const togglePassword = document
            .querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', () => {
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
            password.setAttribute('type', type);
            
            this.classList.toggle('bi-eye');
        });
    </script>