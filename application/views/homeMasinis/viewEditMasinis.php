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
              <span for="nama_masinis">Nama Masinis</span>
              <input type="text" name="nama_masinis" class="form-control" placeholder="Nama Masinis" required="required" autofocus="autofocus" value="<?=$masinis['nama_masinis'];?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="alamat_masinis">Alamat Masinis</span>
              <input type="text" name="alamat_masinis" class="form-control" placeholder="Alamat Masinis" required="required" value="<?=$masinis['alamat_masinis'];?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="nohp_masinis">NO HP Masinis</span>
              <input type="text" name="nohp_masinis" class="form-control" placeholder="NO HP Masinis" required="required" value="<?=$masinis['nohp_masinis'];?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="email_masinis">Email Masinis</span>
              <input type="email" name="email_masinis" class="form-control" placeholder="Email Masinis" required="required" value="<?=$masinis['email_masinis'];?>">              
            </div>
          </div>                  
          <button type="submit" name="submit" class="btn btn-primary float-right">SUBMIT</button><!-- 
          <a class="btn btn-primary btn-block" href="<?php echo base_url() ?>Kereta_controler/lihat_kereta">Input</a> -->
        </form>
      </div>
    </div>
  </div>