<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="<?php echo base_url('Transaksi') ?>">Data Transaksi</a></li>
          <li class="breadcrumb-item active">Transaksi Selesai</li>
        </ol>
      </nav>
      <br>
      <h4 class="text-uppercase">Transaksi Selesai</h4>
      <hr>
      <?php echo form_open('Transaksi/transaksi_selesai_proses') ?>
      <input type="hidden" name="id" value="<?php echo $transaksi->transaksi_id ?>">
      <input type="hidden" name="mobil_id" value="<?php echo $transaksi->mobil_id ?>">

      <!-- Jika tanggak Dikembalikan mobil lebih dari tanggal kembali maka hitung denda perharinya -->

      <!-- Tanggal Dikembalikan -->
      <div class="form-group">
        <label for="tgl_dikembalikan" class="font-weight-bold">Tanggal Dikembalikan</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text" id="btnGroupAddon">
              <i class="fa fa-calendar" aria-hidden="true"></i>
            </div>
          </div>
          <input type="text" name="tgl_dikembalikan" id="tgl_dikembalikan" class="form-control" value="<?php echo date('d-m-yy'); ?>" placeholder="dd-mm-yyyy" aria-label="Input group example" aria-describedby="btnGroupAddon">
        </div>
        <?php echo form_error('tgl_dikembalikan') ?>
      </div>

      <div class="form-group">
        <input type="submit" name="submit" value="Selesai" class="btn btn-success">
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<?php $this->load->view('footer') ?>
<script>
  $(document).ready(function() {
    $('#tgl_dikembalikan').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true,
      todayHighlight: true,
      minDate: new Date(),
    });
  })
</script>