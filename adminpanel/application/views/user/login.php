<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image-personal"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <?php echo form_open('users/login'); ?>
                    <div class="form-group">
                      <input value="<?php echo set_value('nick'); ?>" type="text" class="form-control form-control-user" name="nick" id="nick" placeholder="Enter Social Club nick..." required>
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="Password" placeholder="Password" required>
                    </div>

                   <!--  <div class="form-group">
                      <div class="text-danger">
                       
                      </div>
                    </div> -->
                    <?php
                      if(form_error('password')|| form_error('nick')) {
                        echo '<div class="alert alert-danger alert-dismissible"><p class="close" data-dismiss="alert" aria-label="close">&times;</p><strong>Error!</strong> Incorrect login or password</div>';
                      }
                    ?>

                    <!-- <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" name="remember_me" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div> -->
                    <button type="submit" value="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                    <a href="https://www.google.pl" target="_new" style="background: #7289da" class="btn btn-user btn-block text-white">
                      <i class="fab fa-discord fa-fw"></i> Login with Discord
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <p class="small">Zapomniałeś hasła? - pytaj Emila</p>
                  </div>
                  <div class="text-center">
                    <p class="small">Chciałbyś otrzymać dostęp? - pytaj Emila</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  </body>

</html>