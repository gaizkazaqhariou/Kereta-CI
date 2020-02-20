        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Penumpang</div>
          <div class="card-body">
            <!-- .............................................. -->
            <div class="col-md-6">
              <div class="alert alert-success alert-dismissible fade show" role="alert">Data Penumpang <strong>berhasil</strong> <?= $this->session->flashdata('flash-data');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-12">
                <form action="" method="post">
                  <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Cari Data Penumpang">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">CARI</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- .............................................. -->  
            <div class="row mt-4">
              <div class="col-md-6">
                <a href="<?php echo base_url() ?>Penumpang_controler/tambahPenumpang" class="btn btn-primary">TAMBAH PENUMPANG</a>
              </div>
            </div>
            <br>

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
                        <a href="<?php echo base_url() ?>Penumpang_controler/editPenumpang/<?=$pn['no_ktp'];?>" class="badge badge-warning">EDIT</a>
                        <a href="<?php echo base_url() ?>Penumpang_controler/hapusPenumpang/<?=$pn['no_ktp'];?>" class="badge badge-danger">HAPUS</a>
                      </td>
                  </tr>
                      <?php endforeach; ?>           
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div