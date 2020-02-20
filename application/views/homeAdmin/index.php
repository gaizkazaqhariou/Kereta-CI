<div class="container-fluid">

        <div class="row">
          <?php if ($this->session->userdata('level') == 'superadmin'): ?>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-subway"></i>
                </div>
                <div class="mr-5">Total Kereta : <?php echo $jml_kereta;?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url() ?>Kereta_controler/lihat_kereta">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-user-tie"></i>
                </div>
                <div class="mr-5">Total Masinis : <?php echo $jml_masinis;?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url() ?>Masinis_controler/lihat_masinis">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-user-tie"></i>
                </div>
                <div class="mr-5">Total Petugas : <?php echo $jml_petugas;?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url() ?>Petugas_controler/lihat_petugas">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-tram"></i>
                </div>
                <div class="mr-5">Total Stasiun : <?php echo $jml_stasiun;?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url() ?>Stasiun_controler/lihat_stasiun">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="mr-5">Total Jadwal : <?php echo $jml_jadwal;?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url() ?>Jadwal_controler/lihat_jadwal">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <?php else: ?>
            <div class="col-sm-6 mb-3">
              <h1>SEMANGAT BEKERJA</h1>
              <p>if you have a problem contact to ADMIN (082142780084)</p>
            </div>
          <?php endif ?>
        </div>