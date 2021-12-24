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

<body class="bg-dark">
  <div class="container">
  	<h2 style="color: white; text-align: center; margin:50px; font-weight: normal;">SISTEM DATA BUKU</h2>
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <?php
          if($this->session->flashdata('gagal') == TRUE){?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>Username atau password salah!</strong> Silahkan Coba Lagi.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
		   </div><?php
          }
        ?>
      	
        <form action="<?=base_url('login/proses');?>" method = "POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="username" type="text" placeholder="Enter username" name="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" type="password" placeholder="Password" name="password">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </form>
    </div>
  </div>
 
  <!-- js -->
  <?php $this->load->view($js);?>
</body>

</html>
