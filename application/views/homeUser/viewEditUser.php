<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
          <?php if(validation_errors()): ?>
          <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
          </div>
          <?php endif; ?>
        <form action="" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <span for="username">Username</span>
              <input type="text" name="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus" value="<?=$user['username']?>">              
            </div>
          </div> 
          <div class="form-group">
            <div class="form-label-group">
              <span for="password">Password</span>
              <input type="password" name="password" class="form-control" placeholder="Password" required="required" value="<?=$user['password']?>">              
            </div>
          </div> 
          <div class="form-group">
            <div class="form-label-group">
              <span for="status">Status</span>
              <select class="form-control" id="status" name="status">
                <?php foreach($inistatus as $st) :?>
                  <?php if ($st == $user['status']): ?>
                  <option value="<?php echo $st;?>" selected><?php echo $st;?></option> 
                  <?php else :?>
                  <option value="<?php echo $st;?>"><?php echo $st;?></option>         
                  <?php endif;?>
                <?php endforeach;?>
              </select>
            </div>
          </div>           
          <button type="submit" name="submit" class="btn btn-primary float-right">SUBMIT</button><!-- 
          <a class="btn btn-primary btn-block" href="<?php echo base_url() ?>Kereta_controler/lihat_kereta">Input</a> -->
        </form>
      </div>
    </div>
  </div>