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
              <span for="nama_kereta">Nama Kereta</span>
              <input type="text" name="nama_kereta" class="form-control" placeholder="Nama Kereta" required="required" autofocus="autofocus" value="<?=$kereta['nama_kereta'];?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
               <div class="form-label-group">
                  <span for="jml_gerbong">Jumlah Gerbong</span>
                  <input type="number" name="jml_gerbong" class="form-control" placeholder="Jumlah Gerbong" required="required" value="<?=$kereta['jml_gerbong'];?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <span for="thn_pembuatan">Tahun Pembuatan</span>
                  <input type="number" name="thn_pembuatan" class="form-control" placeholder="Tahun Pembuatan" required="required" value="<?=$kereta['thn_pembuatan'];?>">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="tipe_kereta">Kelas Kereta</span>              
              <!-- <select class="form-control" id="tipe_kereta" name="tipe_kereta">
                <?php foreach($tipe_kereta as $tk) :?>
                  <option value="<?php echo $tk;?>" selected><?php echo $tk;?></option> 
                <?php endforeach;?>
              </select> -->              
              <select class="form-control" id="tipe_kereta" name="tipe_kereta">
                <?php foreach($tipe_kereta as $tk) :?>
                  <?php if ($tk == $kereta['tipe_kereta']): ?>
                  <option value="<?php echo $tk;?>" selected><?php echo $tk;?></option> 
                  <?php else :?>
                  <option value="<?php echo $tk;?>"><?php echo $tk;?></option>         
                  <?php endif;?>
                <?php endforeach;?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="stasiun_awal">Stasiun Awal Kereta</span>
              <!-- <select class="form-control" id="stasiun_awal" name="stasiun_awal">
                <?php foreach($stasiun as $sa) :?>
                  <option value="<?php echo $sa['nama_stasiun'];?>" selected><?php echo $sa['nama_stasiun'];?></option> 
                <?php endforeach;?>
              </select> -->
              <select class="form-control" id="stasiun_awal" name="stasiun_awal">
                <?php foreach($stasiun as $sa) :?>
                  <?php if ($sa['nama_stasiun'] == $kereta['stasiun_awal']): ?>
                  <option value="<?php echo $sa['nama_stasiun'];?>" selected><?php echo $sa['nama_stasiun'];?></option> 
                  <?php else :?>
                  <option value="<?php echo $sa['nama_stasiun'];?>"><?php echo $sa['nama_stasiun'];?></option>         
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