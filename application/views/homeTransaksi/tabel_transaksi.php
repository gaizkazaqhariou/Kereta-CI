        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Transaksi</div>
          <div class="card-body">

            <div class="row mt-4">
              <div class="col-md-6">
                <a href="<?php echo base_url() ?>Transaksi_controler/tambahTransaksi" class="btn btn-primary">TAMBAH TRANSAKSI</a>
              </div>
            </div>
            <br>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>NO KTP</th>
                    <th>Nama Wali</th>
                    <th>Nama Kereta</th>
                    <th>NO Kursi</th>
                    <th>Stasiun Awal</th>
                    <th>Pemberhentian</th>
                    <th>Tanggal Pemesanan</th>              
                    <th>Pengaturan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                      foreach ($transaksi as $tr):
                  ?>
                  <tr>
                      <td><?= $no++; ?></td>
                      <td><?php echo $tr['no_ktp'] ?></td>
                      <td><?php echo $tr['nama_wali'] ?></td>
                      <td><?php echo $tr['nama_kereta'] ?></td>
                        <?php if($tr['id_kursi'] == null): ?>
                        <td>tidak dapat kursi</td>
                        <?php else :?>
                        <td><?php echo $tr['id_kursi'] ?></td>
                        <?php endif;?>                      
                      <td><?php echo $tr['stasiun_awal'] ?></td>
                      <td><?php echo $tr['pemberhentian'] ?></td>
                      <td><?php echo date('d-M-Y', strtotime($tr['tgl_pesan'])); ?></td>
                      <td>
                        <a href="<?php echo base_url() ?>Transaksi_controler/laporan_pdf/<?=$tr['no_penumpang'];?>" class="badge badge-warning">PRINT</a>
                      </td>
                  </tr>
                      <?php endforeach; ?>           
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div