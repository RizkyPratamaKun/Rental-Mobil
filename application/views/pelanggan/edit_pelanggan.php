<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="<?php echo base_url('pelanggan') ?>">Data pelanggan</a></li>
          <li class="breadcrumb-item active">Edit Mobil</li>
        </ol>
      </nav>
      <br>
      <h4 class="text-uppercase">Edit pelanggan</h4>
      <hr>
      <?php echo form_open('pelanggan/edit_pelanggan_proses') ?>
      <input type="hidden" name="id" value="<?php echo $pelanggan->pelanggan_id ?>">
      <div class="form-group">
        <label class="font-weight-bold">Nama pelanggan</label>
        <?php echo form_input($nama, $pelanggan->pelanggan_nama) ?>
        <?php echo form_error('nama') ?>
      </div>

      <div class="form-group">
        <label class="font-weight-bold">Jk</label>
        <?php echo form_dropdown($jk, $option, $pelanggan->pelanggan_jk) ?>
        <?php echo form_error('jk') ?>
      </div>

      <div class="form-group">
        <label class="font-weight-bold">Alamat</label>
        <?php echo form_input($alamat, $pelanggan->pelanggan_alamat) ?>
        <?php echo form_error('alamat') ?>
      </div>

      <div class="form-group">
        <label class="font-weight-bold">No Hp</label>
        <?php echo form_input($no_hp, $pelanggan->pelanggan_hp) ?>
        <?php echo form_error('no_hp') ?>
      </div>

      <div class="form-group">
        <label class="font-weight-bold">No Ktp</label>
        <?php echo form_input($no_ktp, $pelanggan->pelanggan_ktp) ?>
        <?php echo form_error('no_ktp') ?>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Edit" class="btn btn-success">
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<?php $this->load->view('footer') ?>