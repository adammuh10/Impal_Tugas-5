  <div id="header"></div>

  <!-- Reset Password -->

  <div class="container">
    <div class="row justify-content-center loginPage">
      <div class="col-lg-6">
        <div class="text-center">
          <h2 class="title tulisan">Reset your password</h2>
          <p style="margin: 0;">We will send you an email to reset your password.</p>
        </div>
        <form action="<?php echo site_url().'account/resetPass';?>" method="post">
          <div class="form-group">
            <label for="customerEmail">Email</label>
            <input type="email" class="form-control form-control-lg" id="customerEmail" aria-describedby="emailHelp"
              placeholder="">
          </div>
          <div class="text-center">
            <p>
              <button type="submit" class="btn tombol">Submit</button>
            </p>
            <p style="margin-bottom: 0px">
              <a href="<?php echo site_url().'account';?>">Cancel</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- End of Reset Password -->

  <div id="footer"></div>

  <script src="jquery-3.2.1.min.js">
  </script>
  <script>
    $(function () {
      $("#header").load("header.html");
      $("#footer").load("footer.html");
    });
  </script>