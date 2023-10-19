<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      SFP
      <small>Data SN SFP </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-12">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">SFP</h3>
            <div class="btn-group pull-right">
              <a href="sfp_tambah.php" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> &nbsp Tambah SFP</a>              
            </div>
          </div>
          <div class="box-body">


            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
              	 <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>KODE SFP</th>
                    <th>SERIAL NUMBER</th>
                    <th>REDAMAN</th>
                    <th>KONDISI</th>
                    <th>KETERANGAN</th>

                    <th width="10%">OPSI</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  include '../koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM tb_sfp");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['kode_sfp']; ?></td>
                      <td><?php echo $d['serial_number']; ?></td>
                      <td><?php echo $d['redaman']; ?></td>
                      <td style=""><?php echo $d['kondisi']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                      

                      <td>                        
                        <a class="btn btn-warning btn-sm" href="sfp_edit.php?id=<?php echo $d['id_sfp'] ?>"><i class="fa fa-cog"></i></a>
                        <a class="btn btn-danger btn-sm" href="sfp_hapus_konfir.php?id=<?php echo $d['id_sfp'] ?>"><i class="fa fa-trash"></i></a>
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
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>