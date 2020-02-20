        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Masinis</div>
          <div class="card-body">
            <!-- .............................................. -->
            <div class="col-md-6">
              <div class="alert alert-success alert-dismissible fade show" role="alert">Data Masinis <strong>berhasil</strong> <?= $this->session->flashdata('flash-data');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
            <!-- .............................................. -->  
            <div class="row mt-4">
              <div class="col-md-6">
                <a href="<?php echo base_url() ?>Masinis_controler/tambahMasinis" class="btn btn-primary">TAMBAH MASINIS</a>
              </div>
            </div>
            <br>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>ID Masinis</th>
                    <th>Nama Masinis</th>
                    <th>Alamat Masinis</th>
                    <th>No HP</th>
                    <th>Email </th>
                    <th>Pengaturan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                      foreach ($masinis as $msn):
                  ?>
                  <tr>
                      <td><?= $no++; ?></td>
                      <td>MS-0<?php echo $msn['id_masinis']; ?></td>
                      <td><?php echo $msn['nama_masinis']; ?></td>
                      <td><?php echo $msn['alamat_masinis'] ?></td>
                      <td><?php echo $msn['nohp_masinis'] ?></td>
                      <td><?php echo $msn['email_masinis'] ?></td>
                      <td>
                        <a href="<?php echo base_url() ?>Masinis_controler/editMasinis/<?=$msn['id_masinis'];?>" class="badge badge-warning">EDIT</a>
                        <a href="<?php echo base_url() ?>Masinis_controler/hapusMasinis/<?=$msn['id_masinis'];?>" class="badge badge-danger">HAPUS</a>
                      </td>
                  </tr>
                      <?php endforeach; ?>           
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div