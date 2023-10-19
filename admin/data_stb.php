<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      STB
      <small>Data STB TV Internet</small>
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
            <h3 class="box-title">STB TV Internet</h3>
            <div class="btn-group pull-right">
              <a href="stb_tambah.php" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> &nbsp Tambah STB</a>              
            </div>
          </div>
          <div class="box-body">


            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
              	 <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>KODE ROOT</th>
                    <th>MAC LAN</th>
                    <th>MAC WIFI</th>
                    <th>TANGGAL ROOT</th>
                    <th>TANGGAL UPDATE ROOT</th>
                    <th>PETUGAS ROOT</th>
                    <th>KETERANGAN</th>
                    <th width="10%">OPSI</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  include '../koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM tb_stb");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['kode_root']; ?></td>
                      <td><?php echo $d['mac_lan']; ?></td>
                      <td><?php echo $d['mac_wifi']; ?></td>
                      <td><?php echo $d['tanggal_root']; ?></td>
                      <td><?php echo $d['tanggal_update']; ?></td>
                      <td><?php echo $d['petugas_root']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>

                      <td>                        
                        <a class="btn btn-warning btn-sm" href="stb_edit.php?id=<?php echo $d['id_root'] ?>"><i class="fa fa-cog"></i></a>
                        <a class="btn btn-danger btn-sm" href="stb_hapus_konfir.php?id=<?php echo $d['id_root'] ?>"><i class="fa fa-trash"></i></a>
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