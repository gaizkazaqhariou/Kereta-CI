        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table User</div>
          <div class="card-body">
            <!-- .............................................. -->
            <div class="col-md-6">
              <div class="alert alert-success alert-dismissible fade show" role="alert">Data User <strong>berhasil</strong> <?= $this->session->flashdata('flash-data');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
            <!-- .............................................. -->          

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>            
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>              
                    <th>Pengaturan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                      foreach ($user as $u):
                  ?>
                  <tr>
                      <td><?= $no++; ?></td>
                      <td><?php echo $u['username']; ?></td>
                      <td> ******** </td>
                      <td><?php echo $u['status'] ?></td>               
                      <td>
                        <a href="<?php echo base_url() ?>User_controler/editUser/<?=$u['id_user'];?>" class="badge badge-warning">EDIT</a>
                        <a href="<?php echo base_url() ?>User_controler/hapusUser/<?=$u['id_user'];?>" class="badge badge-danger">HAPUS</a>
                      </td>
                  </tr>
                      <?php endforeach; ?>           
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div