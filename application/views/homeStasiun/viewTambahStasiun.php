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
              <span for="nama_stasiun">Nama Stasiun</span>
              <input type="text" name="nama_stasiun" class="form-control" placeholder="Nama Stasiun" required="required" autofocus="autofocus">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="kota_stasiun">Kota Stasiun</span>
              <input type="text" name="kota_stasiun" class="form-control" placeholder="Kota Stasiun" required="required">         
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="provinsi_stasiun">Provinsi Stasiun</span>          
              <select class="form-control" id="provinsi_stasiun" name="provinsi_stasiun">
              	<option value="" selected>--------------------------</option>
                <?php foreach($provinsi_stasiun as $pv) :?>
                  <option value="<?php echo $pv;?>"><?php echo $pv;?></option> 
                <?php endforeach;?>
              </select>           
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <span for="jam_buka">Jam Buka</span>
                  <input type="text" name="jam_buka" class="form-control" placeholder="Jam Buka" required="required">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <span for="jam_tutup">Jam Tutup</span>
                  <input type="text" name="jam_tutup" class="form-control" placeholder="Jam Tutup" required="required">
                </div>
              </div>
            </div>
          </div>                
          <button type="submit" name="submit" class="btn btn-primary float-right">SUBMIT</button><!-- 
          <a class="btn btn-primary btn-block" href="<?php echo base_url() ?>Kereta_controler/lihat_kereta">Input</a> -->
        </form>
      </div>
    </div>
  </div>