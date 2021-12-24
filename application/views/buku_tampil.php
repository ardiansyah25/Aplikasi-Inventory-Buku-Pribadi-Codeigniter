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
      <?php
        if($this->session->flashdata('tambah') == TRUE){?>
           <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Tambah Data Berhasil !</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
         </div><?php
        }else if($this->session->flashdata('edit') == TRUE){?>
           <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Edit Data Berhasil !</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
         </div><?php
        }else if($this->session->flashdata('hapus') == TRUE){?>
           <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Hapus Data Berhasil !</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
         </div><?php
        }
      ?>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Buku</div>
        <div class="card-body">
          <a href="<?=base_url('buku/add');?>"><button type="button" class="btn btn-success" style="margin:10px; padding-left: 20px; padding-right: 20px;">Tambah</button></a>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Buku</th>
                  <th>Pengarang</th>
                  <th>Tahun Terbit</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php
                  $no =1;
                  foreach ($buku as $row) {?>
                  <tr>
              <td><?=$no++?></td>
              <td><?=$row->judul_buku;?></td>
              <td><?=$row->pengarang;?></td>
              <td><?=$row->tahun_terbit;?></td>
              <td>
                <a href="<?=site_url('buku/edit/'.$row->id_buku);?>"><button class="btn btn-primary">Edit</button></a>
                <a href="<?=site_url('buku/del/'.$row->id_buku);?>" onclick= "return confirm('Yakin ingin menghapus data ?')" ><button class="btn btn-danger">Hapus</button></a>
              </td>
            </tr>
            <?php
                  }
           ?>
    
              </tbody>
            </table>
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
