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
              <span for="nama_petugas">Nama Petugas</span>
              <input type="text" name="nama_petugas" class="form-control" placeholder="Nama Petugas" required="required" autofocus="autofocus" value="<?=$petugas['nama_petugas'];?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="alamat_petugas">Alamat Petugas</span>
              <input type="text" name="alamat_petugas" class="form-control" placeholder="Alamat Petugas" required="required" value="<?=$petugas['alamat_petugas'];?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="nohp_petugas">NO HP Petugas</span>
              <input type="text" name="nohp_petugas" class="form-control" placeholder="NO HP Petugas" required="required" value="<?=$petugas['nohp_petugas'];?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="bagian_tugas">Bagian Tugas</span>
              <input type="text" name="bagian_tugas" class="form-control" placeholder="Bagian Tugas" required="required" value="<?=$petugas['bagian_tugas'];?>">              
            </div>
          </div>                  
          <button type="submit" name="submit" class="btn btn-primary float-right">SUBMIT</button><!-- 
          <a class="btn btn-primary btn-block" href="<?php echo base_url() ?>Kereta_controler/lihat_kereta">Input</a> -->
        </form>
      </div>
    </div>
  </div>