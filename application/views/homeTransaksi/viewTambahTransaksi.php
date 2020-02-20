        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Kereta</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>ID Jadwal</th>
                    <th>Nama Kereta</th>
                    <th>Stasiun Awal</th>
                    <th>Stasiun Tujuan</th>
                    <th>Jumlah Kursi</th>
                    <th>Harga</th>
                    <th>Jam Datang</th>                    
                    <th>Jam Berangkat</th>                    
                    <th>Pengaturan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                      foreach ($jadwal as $jw):
                  ?>
                  <tr>
                      <td><?= $no++; ?></td>
                      <td>JW-0<?php echo $jw['id_jadwal']; ?></td>
                      <td><?php echo $jw['nama_kereta']; ?></td>
                      <td><?php echo $jw['stasiun_awal']; ?></td>
                      <td><?php echo $jw['pemberhentian']; ?></td>
                      <td><?php echo $jw['qty']; ?> kursi</td>
                      <td><?php echo $jw['harga']; ?></td>
                      <td><?php echo $jw['jam_datang']; ?></td>                
                      <td><?php echo $jw['jam_berangkat']; ?></td>                
                      <td>
                        <a href="<?php echo base_url() ?>Transaksi_controler/pilih_penumpang/<?=$jw['id_jadwal'];?>" class="badge badge-warning">BELI</a>
                      </td>
                  </tr>
                      <?php endforeach; ?>           
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div