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
              <span for="no_ktp">NO KTP</span>
              <input type="text" name="no_ktp" class="form-control" placeholder="NO KTP" required="required" autofocus="autofocus" value="<?=$penumpang['no_ktp']?>">              
            </div>
          </div> 
          <div class="form-group">
            <div class="form-label-group">
              <span for="nama_penumpang">Nama Penumpang</span>
              <input type="text" name="nama_penumpang" class="form-control" placeholder="Nama Penumpang" required="required" value="<?=$penumpang['nama_penumpang']?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="alamat_penumpang">Alamat Penumpang</span>
              <input type="text" name="alamat_penumpang" class="form-control" placeholder="Alamat Penumpang" required="required" value="<?=$penumpang['alamat_penumpang']?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="nohp_penumpang">NO HP Penumpang</span>
              <input type="text" name="nohp_penumpang" class="form-control" placeholder="NO HP Penumpang" required="required" value="<?=$penumpang['nohp_penumpang']?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="email_penumpang">Email Penumpang</span>
              <input type="email" name="email_penumpang" class="form-control" placeholder="Email Penumpang" required="required" value="<?=$penumpang['email_penumpang']?>">              
            </div>
          </div>                  
          <button type="submit" name="submit" class="btn btn-primary float-right">SUBMIT</button><!-- 
          <a class="btn btn-primary btn-block" href="<?php echo base_url() ?>Kereta_controler/lihat_kereta">Input</a> -->
        </form>
      </div>
    </div>
  </div>