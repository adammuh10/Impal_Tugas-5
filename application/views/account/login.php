<!-- Login Page -->

<div class="container">
  <div class="row justify-content-center loginPage">
    <div class="col-lg-6">
      <h1 class="tulisan title">Login</h1>
      <form action="<?php echo site_url().'account/cek_login';?>" method="post">
        <div class="form-group">
          <label for="customerEmail">Email</label>
          <input type="email" class="form-control form-control-lg" id="customerEmail" name="email" aria-describedby="emailHelp"
            placeholder="">
        </div>
        <div class="form-group">
          <label for="customerPassword">Password</label>
          <input type="password" class="form-control form-control-lg" id="customerPassword" name="pass" placeholder="">
        </div>
        <div class="text-center">
          <p>
            <a href="<?php echo site_url().'account/resetPass_view';?>">Forgot your password?</a>
          </p>
          <button type="submit" class="btn tombol" style="background-color:black; color:white;">Sign In</button>
          <p style="margin-bottom: 0px">
            <a href="<?php echo site_url().'account/register_view';?>">Create account</a>
          </p>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- End of Login Page -->