<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>" type="text/css">
  <!-- Login CSS -->
  <link rel="stylesheet" href="<?php echo base_url('asset/css/login.css') ?>" type="text/css">
  <!-- Custom All CSS -->
  <link rel="stylesheet" href="<?php echo base_url('asset/css/custom_all.css') ?>" type="text/css">
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="<?php echo base_url('asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>" type="text/css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url('asset/images/cars.png') ?>" type="image/ico">

  <style>
    /* URL background image jangan lupa di ganti */
    body {
      background-image: url('http://localhost:8080/rental-mobil-master/asset/images/kedan.jpeg');
      background-repeat: no-repeat;
      background-position: center center;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
  <title><?php echo $title ?></title>
</head>

<body>
  <div class="container login">
    <div class="col-6 mx-auto my-auto w-10 justify-content-center align-items-center">
      <?php echo $this->session->userdata('belum_login') ?>
      <?php echo $this->session->userdata('logout') ?>
      <?php echo $this->session->userdata('session') ?>
    </div>
    <?php echo form_open('Auth/login_proses') ?>

    <div class="card col-6 mx-auto p-5 my-auto w-10 align-self-center" style="width:25rem;">
      <h4 class="login2 mt-4 text-black font-weight-bold">Login</h4>
      <br>
      <!-- Username -->
      <div class="form-group">
        <div class="input-group-prepend mb-1">
          <div class="input-group-text">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
          <input type="text" name="admin_username" class="form-control" placeholder="Username">
        </div>
        <?php echo form_error('admin_username') ?>
        <?php if (isset($_GET["pesan1"]) == "username tidak sessuai") {
          echo "<div class='alert alert-danger'>Username tidak sessuai</div>";
        } ?>
      </div>
      <!-- Password -->
      <div class="form-group">
        <div class="input-group-prepend mb-1">
          <div class="input-group-text">
            <i class="fa fa-lock" aria-hidden="true"></i>
          </div>
          <input type="password" name="admin_password" autocomplete="off" class="form-control" placeholder="Password">
        </div>
        <?php echo form_error('admin_password') ?>
        <?php if (isset($_GET["pesan2"]) == "Password tidak sessuai") {
          echo "<div class='alert alert-danger'>Password tidak sesuai</div>";
        } ?>
      </div>
      <!-- Submit -->
      <input type="submit" name="submit" value="Login" class="btn btn-success">
    </div>

    <?php echo form_close() ?>
  </div>
  <!-- Jquery  JS-->
  <script src="<?php echo base_url('asset/js/jquery-3.3.1.min.js') ?>" type="text/javascript"></script>
  <!-- Boostrstrap JS -->
  <script src="<?php echo base_url('asset/js/bootstrap.min.js') ?>" type="text/javascript"></script>
</body>

</html>