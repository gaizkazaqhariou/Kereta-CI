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
              <span for="id_kereta">Nama Kereta</span>          
              <select class="form-control" id="id_kereta" name="id_kereta">
              	<option value="" selected>--------------------------</option>
                <?php foreach($kereta as $krt) :?>
                  <option value="<?php echo $krt['id_kereta'];?>"><?php echo $krt['nama_kereta'];?></option> 
                <?php endforeach;?>
              </select>           
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="pemberhentian">Stasiun Tujuan</span>
              <select class="form-control" id="pemberhentian" name="pemberhentian">
              	<option value="" selected>--------------------------</option>
                <?php foreach($stasiun as $stn) :?>
                  <option value="<?php echo $stn['nama_stasiun'];?>"><?php echo $stn['nama_stasiun'];?></option> 
                <?php endforeach;?>
              </select>   
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="harga">Harga</span>
              <input type="number" name="harga" class="form-control" placeholder="Harga" required="required">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <span for="jam_datang">Jam Datang</span>
                  <input type="text" name="jam_datang" class="form-control" placeholder="Jam Datang" required="required">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <span for="jam_berangkat">Jam Berangkat</span>
                  <input type="text" name="jam_berangkat" class="form-control" placeholder="Jam Berangkat" required="required">
                </div>
              </div>
            </div>
          </div> 
          <div class="form-group">
            <div class="form-label-group">
              <span for="qty">Kuota Kursi</span>
              <input type="number" name="qty" class="form-control" placeholder="Kuota Kursi" required="required">              
            </div>
          </div>              
          <button type="submit" name="submit" class="btn btn-primary float-right">SUBMIT</button><!-- 
          <a class="btn btn-primary btn-block" href="<?php echo base_url() ?>Kereta_controler/lihat_kereta">Input</a> -->
        </form>
      </div>
    </div>
  </div>