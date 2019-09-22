  <div id="header"></div>

  <!-- Register Page -->

  <div class="container">
    <div class="row justify-content-center loginPage">
      <div class="col-lg-6">
        <h1 class="title tulisan">Create Account</h1>
        <form action="<?php echo site_url().'account/register';?>" method="post">
          <div class="form-group">
            <label for="customerFirstName">First Name</label>
            <input type="text" class="form-control form-control-lg" id="customerFirstName" name="firstName" aria-describedby=""
              placeholder="">
          </div>
          <div class="form-group">
            <label for="customerLastName">Last Name</label>
            <input type="email" class="form-control form-control-lg" id="customerLastName" name="lastName" aria-describedby=""
              placeholder="">
          </div>
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
            <button type="submit" class="btn tombol" style="background-color:black;">Create</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- End of Register Page -->

  <div id="footer"></div>

  <script src="jquery-3.2.1.min.js">
  </script>
  <script>
    $(function () {
      $("#header").load("header.html");
      $("#footer").load("footer.html");
    });
  </script>