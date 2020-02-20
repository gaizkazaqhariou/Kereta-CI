        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Stasiun</div>
          <div class="card-body">

            <div class="row mt-4">
              <div class="col-md-6">
                <a href="<?php echo base_url() ?>Stasiun_controler/tambahStasiun" class="btn btn-primary">TAMBAH STASIUN</a>
              </div>
            </div>
            <br>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Kode Stasiun</th>
                    <th>Nama Stasiun</th>
                    <th>Kota</th>
                    <th>Provinsi </th>
                    <th>Jam Buka</th>
                    <th>Jam Tutup</th>
                    <th>Pengaturan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                      foreach ($stasiun as $st):
                  ?>
                  <tr>
                      <td><?= $no++; ?></td>
                      <td>ST-0<?php echo $st['kode_stasiun']; ?></td>
                      <td><?php echo $st['nama_stasiun']; ?></td>
                      <td><?php echo $st['kota_stasiun'] ?></td>
                      <td><?php echo $st['provinsi_stasiun'] ?></td>
                      <td><?php echo $st['jam_buka'] ?></td>
                      <td><?php echo $st['jam_tutup'] ?></td>
                      <td>
                        <a href="<?php echo base_url() ?>Stasiun_controler/editStasiun/<?=$st['kode_stasiun'];?>" class="badge badge-warning">EDIT</a>
                        <a href="<?php echo base_url() ?>Stasiun_controler/hapusStasiun/<?=$st['kode_stasiun'];?>" class="badge badge-danger">HAPUS</a>
                      </td>
                  </tr>
                      <?php endforeach; ?>           
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div