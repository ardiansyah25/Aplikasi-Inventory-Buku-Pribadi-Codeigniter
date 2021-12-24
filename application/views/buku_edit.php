<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?=$header;?></title>
  <!-- css -->
  <?php $this->load->view($css);?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php $this->load->view($nav);?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?=base_url('home');?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Buku</li>
      </ol>
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Edit Buku</div>
        <div class="card-body">
         <form action="<?=base_url('buku/proses');?>" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Judul</label>
                <input class="form-control" name="judul" type="text" value="<?=$buku->judul_buku;?>" required>
                <input class="form-control" name="id_buku" type="hidden" value="<?=$buku->id_buku;?>">
              </div>
            </div>
         </div>
         <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Pengarang</label>
                <input class="form-control" name="pengarang" type="text" value="<?=$buku->pengarang;?>" required>
              </div>
            </div>
         </div>
            <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Tahun Terbit</label>
                <input class="form-control" name="tahun_terbit" type="number" value="<?=$buku->tahun_terbit;?>" required>
              </div>
            </div>
         </div>
          <button type="submit" class="btn btn-primary btn-block" name="edit">Edit</button>
        </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
   <!-- js -->
   <?php $this->load->view($js);?>
  </div>
</body>

</html>
