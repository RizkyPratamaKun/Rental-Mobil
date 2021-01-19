<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data pelanggan</li>
        </ol>
      </nav>
      <br>
      <h4 class="text-uppercase">Data pelanggan</h4>
      <hr>
      <?php echo $this->session->userdata('message') ?>
      <a class="btn btn-primary mb-3" href="<?php echo base_url('pelanggan/tambah_pelanggan') ?>">
        <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Tambah pelanggan
      </a>
      <table class="table table-bordered small table-striped" id="datatable">
        <thead class="text-center">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>No Ktp</th>
            <th>Edit | Hapus</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 0;
          foreach ($get_all as $pelanggan) {
            $no++;
            echo "<tr>";
            echo "<td class='text-center'>$no</td>";
            echo "<td>$pelanggan->pelanggan_nama</td>";
            echo "<td class='text-center'>$pelanggan->pelanggan_jk</td>";
            echo "<td>$pelanggan->pelanggan_alamat</td>";
            echo "<td>$pelanggan->pelanggan_hp</td>";
            echo "<td>$pelanggan->pelanggan_ktp</td>";
            echo "<td class='text-center'>";
          ?>
            <a class="edit btn" href="<?php echo base_url('pelanggan/edit_data/'), $pelanggan->pelanggan_id ?>">
              <i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;Edit
            </a>
            <a class="hapus btn" href="<?php echo base_url('pelanggan/delete/'), $pelanggan->pelanggan_id ?>" onclick="return confirm('Apakah anda yakin?')">
              <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Hapus</i>
            </a>
          <?php
            echo "</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php $this->load->view('footer') ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('#datatable').DataTable();
  })
</script>