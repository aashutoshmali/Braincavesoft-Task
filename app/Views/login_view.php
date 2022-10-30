
<section class="bg-light text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start">

        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-center">
                <div class="px-lg-5 py-lg-5 p-4  align-self-center" id="log">

                    <h1 class="font-weight-bold mb-4">LogIn</h1>

                    <?php if (isset($danger)) { ?>
  <div class="alert alert-danger">
    <?= esc($danger) ?>
  </div>

<?php } ?> 

                    <form class="mb-5" action="<?= base_url(); ?>/login" method="post">
                      
                        <div class="mb-4">
                            <label for="emailId" class="form-label font-weight-bold">Email-Id</label>
                            <input type="text" class="form-control bg-grey border-0" placeholder="Enter Your EmailId" id="username" name="email" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-4">
                            <label for="Password" class="form-label font-weight-bold">Password</label>
                            <input type="password" class="form-control bg-grey border-0 mb-2" placeholder="Enter Your Password" id="password" name="password" required><i style="margin: 70px;" class="bi bi-eye-slash" id="togglePassword"></i>

                        </div>
                        <button type="submit" id="loginbtn" class="btn btn-primary w-100">Log in</button>
                    </form>
                 
                    <a class="text-info font-weight-bold text-decoration-none" href="<?= base_url(); ?>/register">Register new user</a>
                   
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