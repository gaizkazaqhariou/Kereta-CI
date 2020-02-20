        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Kereta</div>
          <div class="card-body">

              <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">Data Kereta <strong>berhasil</strong> <?= $this->session->flashdata('flash-data');?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>

            <div class="row mt-4">
              <div class="col-md-6">
                <a href="<?php echo base_url() ?>Kereta_controler/tambahKereta" class="btn btn-primary">TAMBAH KERETA</a>
              </div>
            </div>
            <br>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>ID Kereta</th>
                    <th>Nama Kereta</th>
                    <th>Jumlah Gerbong</th>
                    <th>Kelas Kereta</th>
                    <th>Tahun Pembuatan</th>
                    <th>Stasiun Awal</th>
                    <th>Pengaturan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                      foreach ($kereta as $krt):
                  ?>
                  <tr>
                      <td><?= $no++; ?></td>
                      <td>KT-0<?php echo $krt['id_kereta']; ?></td>
                      <td><?php echo $krt['nama_kereta']; ?></td>
                      <td><?php echo $krt['jml_gerbong'] ?></td>
                      <td><?php echo $krt['tipe_kereta'] ?></td>
                      <td><?php echo $krt['thn_pembuatan'] ?></td>
                      <td><?php echo $krt['nama_stasiun'] ?></td>
                      <td>
                        <a href="<?php echo base_url() ?>Kereta_controler/editKereta/<?=$krt['id_kereta'];?>" class="badge badge-warning">EDIT</a>
                        <a href="<?php echo base_url() ?>Kereta_controler/hapusKereta/<?=$krt['id_kereta'];?>" class="badge badge-danger">HAPUS</a>
                      </td>
                  </tr>
                      <?php endforeach; ?>           
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div