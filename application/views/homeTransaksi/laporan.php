<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>STASIUN MALANG</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">

</head>
<body>
	<div class="table-responsive">
	  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>NO KTP</th>
	        <th>Nama Kereta</th>
	        <th>NO Kursi</th>
	        <th>Stasiun Awal</th>
	        <th>Pemberhentian</th>
	        <th>Tanggal Pemesanan</th>              
	        <th>Harga</th>
	      </tr>
	    </thead>
	    <tbody>
	      <?php $no=1;
	          foreach ($tiket as $tr):
	      ?>
	      <tr>
	          <td><?= $no++; ?></td>
	          <td><?php echo $tr['no_ktp'] ?></td>
	          <td><?php echo $tr['nama_kereta'] ?></td>
	          	<?php if($tr['id_kursi'] == null): ?>
                <td>tidak dapat kursi</td>
                <?php else :?>
                <td><?php echo $tr['id_kursi'] ?></td>
                <?php endif;?>                    
	          <td><?php echo $tr['stasiun_awal'] ?></td>
	          <td><?php echo $tr['pemberhentian'] ?></td>
	          <td><?php echo date('d-M-Y', strtotime($tr['tgl_pesan']));?></td>
	          <td><?php echo $tr['harga'] ?></td>
	      </tr>
	          <?php endforeach; ?>           
	    </tbody>
	  </table>
	</div>
      <!-- Sticky Footer -->

    </div>
    <!-- /.content-wrapper -->

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>

</body>

</html>
