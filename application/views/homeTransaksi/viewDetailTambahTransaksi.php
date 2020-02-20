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
              <span for="Nama Penumpang">Nama Penumpang</span>
              <input type="text" name="nama_penumpang" class="form-control" placeholder="Nama Penumpang" readonly value="<?php echo $no_ktp[0]['nama_penumpang'];?>" autofocus="autofocus">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="no_ktp">NO KTP</span>
              <input type="text" name="no_ktp" class="form-control" placeholder="NO KTP" readonly value="<?php echo $no_ktp[0]['no_ktp'];?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="id_jadwal">Id Jadwal</span>
              <input type="number" name="id_jadwal" class="form-control" placeholder="Id Jadwal" readonly value="<?php echo $jadwal['id_jadwal'];?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="pemberhentian">Pemberhentian</span>
              <input type="text" name="pemberhentian" class="form-control" placeholder="Pemberhentian" readonly value="<?php echo $jadwal['pemberhentian'];?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="harga">Harga</span>
              <input type="text" name="harga" class="form-control" placeholder="Harga" readonly value="<?php echo $jadwal['harga'];?>">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="Nama Wali">Nama Wali</span>
              <input type="text" name="nama_wali" class="form-control" placeholder="Nama Wali" required="required">              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <span for="tgl_pesan">Tanggal Pesan</span>
              <input type="date" name="tgl_pesan" class="form-control" placeholder="Tanggal Pesan" required="required">              
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary float-right">SUBMIT</button>
          <!-- <a class="btn btn-primary btn-block" href="<?php echo base_url() ?>Kereta_controler/lihat_kereta">Input</a> -->
        </form>
      </div>
    </div>
  </div>