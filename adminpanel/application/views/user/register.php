<body class="bg-gradient-primary">

  <div class="container pt-5">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
                <?php echo form_open('users/register'); ?>  
                <div class="form-group row">
                  <div class="input-group col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="label-for-first-name"><i class='fas fa-user'></i></span>
                    </div>
                    <input value="<?php echo set_value('first'); ?>" type="text" class="form-control form-control-user" name="first" id="FirstName" placeholder="First name" aria-label="UserFirstName" aria-describedby="label-for-first-name" required>
                  </div>
                
                  <div class="input-group col-sm-6">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="label-for-last-name"><i class='fas fa-user'></i></span>
                    </div>
                    <input value="<?php echo set_value('last'); ?>" type="text" class="form-control form-control-user" name="last" id="LastName" placeholder="Last name" aria-label="UserLastName" aria-describedby="label-for-last-name" required>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <div class="col-sm-6 text-danger">
                    <?php echo form_error('first'); ?>
                  </div>

                  <div class="col-sm-6 text-danger">
                      <?php echo form_error('last'); ?>
                  </div>
                </div>

                <div class="form-group row mb-0">
                  <div class="input-group mb-0 col-12">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="label-Email"><i class='fas fa-at'></i></span>
                    </div>
                    <input value="<?php echo set_value('email'); ?>" type="email" class="form-control form-control-user" name="email" id="Email" placeholder="E-mail" aria-label="UserEmail" aria-describedby="label-Email" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 text-danger">
                    <?php echo form_error('email'); ?>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <div class="input-group col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="label-for-password"><i class='fas fa-key'></i></span>
                    </div>
                    <input type="password" class="form-control form-control-user" name="password" id="Password" placeholder="Password" aria-label="UserPassword" aria-describedby="label-for-password" required>
                  </div>

                  <div class="input-group col-sm-6">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="label-for-repeat-password"><i class='fas fa-key'></i></span>
                    </div>
                    <input type="password" class="form-control form-control-user" name="passwordRepeat" id="RepeatPassword" placeholder="Repeat password" aria-label="UserRepeatPassword" aria-describedby="label-for-repeat-password" required>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <div class="col-sm-6 text-danger">
                    <?php echo form_error('password'); ?>
                  </div>

                  <div class="col-sm-6 text-danger">
                      <?php echo form_error('passwordRepeat'); ?>
                  </div>
                </div>

                <button type="submit" value="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="../users/forgotpassword">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="../users/login">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script>
   /*  function verifyemail() {
      if($(this).val().length > 5) {
        var email = $(this).val();
        var params = "email=" + email;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "http://localhost/projects/admin/index.php/Users/verifyInputEmail/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(params);
      }
    } */
  </script>

</body>

</html>
