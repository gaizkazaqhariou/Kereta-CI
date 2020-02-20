  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <span for="username">Username</span>
              <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="required">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="password">Password</span>
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">              
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-block">DAFTAR</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url()?>Login_controler/index">Login Page</a>
        </div>
      </div>
    </div>
  </div>