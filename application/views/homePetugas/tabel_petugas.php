        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Petugas</div>
          <div class="card-body">
            <!-- .............................................. -->
            <div class="col-md-6">
              <div class="alert alert-success alert-dismissible fade show" role="alert">Data Petugas <strong>berhasil</strong> <?= $this->session->flashdata('flash-data');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
            <!-- .............................................. -->  
            <div class="row mt-4">
              <div class="col-md-6">
                <a href="<?php echo base_url() ?>Petugas_controler/tambahPetugas" class="btn btn-primary">TAMBAH PETUGAS</a>
              </div>
            </div>
            <br>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>NO Petugas</th>
                    <th>Nama Petugas</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Bagian</th>                  
                    <th>Pengaturan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                      foreach ($petugas as $pt):
                  ?>
                  <tr>
                      <td><?= $no++; ?></td>
                      <td>PT-0<?php echo $pt['no_petugas']; ?></td>
                      <td><?php echo $pt['nama_petugas']; ?></td>
                      <td><?php echo $pt['alamat_petugas'] ?></td>
                      <td><?php echo $pt['nohp_petugas'] ?></td>
                      <td><?php echo $pt['bagian_tugas'] ?></td>
                      <td>
                        <a href="<?php echo base_url() ?>Petugas_controler/editPetugas/<?=$pt['no_petugas'];?>" class="badge badge-warning">EDIT</a>
                        <a href="<?php echo base_url() ?>Petugas_controler/hapusPetugas/<?=$pt['no_petugas'];?>" class="badge badge-danger">HAPUS</a>
                      </td>
                  </tr>
                      <?php endforeach; ?>           
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div