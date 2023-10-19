<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      STB
      <small>Edit STB ROOT</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-6 col-lg-offset-3">       
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Edit ROOT STB</h3>
            <a href="data_stb.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
          </div>
          <div class="box-body">
            <form action="stb_update.php" method="post">
              <?php 
              $id = $_GET['id'];              
              $data = mysqli_query($koneksi, "select * from tb_stb where id_root='$id'");
              while($d = mysqli_fetch_array($data)){
                ?>
                <div class="form-group">
                  <label>Kode Root</label>
                  <input type="hidden" name="id" value="<?php echo $d['kode_root'] ?>">
                  <input type="text" class="form-control" name="koderoot" required="required" placeholder="Masukkan kode root .." value="<?php echo $d['kode_root'] ?>">
                </div>
                <div class="form-group">
                  <label>Mac Lan</label>
                  <input type="text" class="form-control" name="maclan" required="required" placeholder="Masukkan Mac Lan .." value="<?php echo $d['mac_lan'] ?>">
                </div>

                <div class="form-group">
                  <label>Mac Wifi</label>
                  <input type="text" class="form-control" name="macwifi" required="required" placeholder="Masukkan Mac Wifi .." value="<?php echo $d['mac_wifi'] ?>">
                </div>

                <div class="form-group">
                  <label>Tanggal Root</label>
                  <input type="Date" class="form-control" name="tanggalroot" required="required" placeholder="Masukkan tanggal root .." value="<?php echo $d['tanggal_root'] ?>">
                </div>

                <div class="form-group">
                  <label>Tanggal Update</label>
                  <input type="Date" class="form-control" name="tanggalupdate" required="required" placeholder="Masukkan tanggal update .." value="">
                </div>

                <div class="form-group">
                  <label>Petugas Root</label>
                  <input type="text" class="form-control" name="petugasroot" required="required" placeholder="Masukkan petugas root .." value="<?php echo $d['petugas_root'] ?>">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" placeholder="Masukkan keterangan .." value="<?php echo $d['keterangan'] ?>">
                </div>

                <div class="form-group">
                  <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                </div>
                <?php 
              }
              ?>
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>