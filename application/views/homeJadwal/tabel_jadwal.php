        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Jadwal</div>
          <div class="card-body">
            <!-- .............................................. -->
            <div class="col-md-6">
              <div class="alert alert-success alert-dismissible fade show" role="alert">Data Kereta <strong>berhasil</strong> <?= $this->session->flashdata('flash-data');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
            <!-- .............................................. -->      
            <?php if ($this->session->userdata('level') == 'superadmin'): ?>      
            <div class="row mt-4">
              <div class="col-md-6">
                <a href="<?php echo base_url() ?>Jadwal_controler/tambahJadwal" class="btn btn-primary">TAMBAH JADWAL</a>
              </div>
            </div>
            <br>
            <?php endif ?>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Kereta</th>
                    <th>Stasiun Awal</th>
                    <th>Stasiun Tujuan</th>                  
                    <th>Jumlah Kursi</th>                  
                    <th>Harga</th>
                    <th>Jam Datang</th>                    
                    <th>Tanggal Keberangkatan</th>   
                    <?php if ($this->session->userdata('level') == 'superadmin'): ?>                
                    <th>Pengaturan</th>
                    <?php endif ?>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                      foreach ($jadwal as $jw):
                  ?>
                  <tr>
                      <td><?= $no++; ?></td>
                      <td><?php echo $jw['nama_kereta']; ?></td>
                      <td><?php echo $jw['stasiun_awal']; ?></td>
                      <td><?php echo $jw['pemberhentian']; ?></td>
                      <td><?php echo $jw['qty']; ?> kursi</td>
                      <td><?php echo $jw['harga']; ?></td>
                      <td><?php echo $jw['jam_datang']; ?></td>                
                      <td><?php echo date('d-M-Y', strtotime($jw['tanggal_keberangkatan'])); ?></td>                
                      <?php if ($this->session->userdata('level') == 'superadmin'): ?>
                      <td>                        
                        <a href="<?php echo base_url() ?>Jadwal_controler/editJadwal/<?=$jw['id_jadwal'];?>" class="badge badge-warning">EDIT</a>
                        <a href="<?php echo base_url() ?>Jadwal_controler/hapusJadwal/<?=$jw['id_jadwal'];?>" class="badge badge-danger">HAPUS</a>                        
                      </td>
                      <?php endif ?>
                  </tr>
                      <?php endforeach; ?>           
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div