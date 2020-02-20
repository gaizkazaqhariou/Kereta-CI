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
                    <th>NO KTP</th>
                    <th>Nama Penumpang</th>
                    <th>Alamat</th>
                    <th>NO HP</th>
                    <th>Email</th>                    
                    <th>Pengaturan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                      foreach ($penumpang as $pn):
                  ?>
                  <tr>
                      <td><?= $no++; ?></td>
                      <td><?php echo $pn['no_ktp']; ?></td>
                      <td><?php echo $pn['nama_penumpang']; ?></td>
                      <td><?php echo $pn['alamat_penumpang'] ?></td>
                      <td><?php echo $pn['nohp_penumpang'] ?></td>
                      <td><?php echo $pn['email_penumpang'] ?></td>                
                      <td>
                        <a href="<?php echo base_url() ?>Transaksi_controler/tambahDetailTransaksi/<?=$jadwal['id_jadwal'];?>/<?=$pn['no_ktp'];?>" class="badge badge-warning">Pilih</a>
                      </td>
                  </tr>
                      <?php endforeach; ?>           
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div