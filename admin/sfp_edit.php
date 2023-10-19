<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      SFP
      <small>Edit Data SFP</small>
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
            <h3 class="box-title">Edit Data SFP</h3>
            <a href="data_sfp.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
          </div>
          <div class="box-body">
            <form action="sfp_update.php" method="post">
              <?php 
              $id = $_GET['id'];              
              $data = mysqli_query($koneksi, "select * from tb_sfp where id_sfp='$id'");
              while($d = mysqli_fetch_array($data)){
                ?>
                <div class="form-group">
                  <label>Kode SFP</label>
                  <input type="hidden" name="id" value="<?php echo $d['id_sfp'] ?>">
                  <input type="text" class="form-control" name="kodesfp" required="required" placeholder="Masukkan kode SFP .." value="<?php echo $d['kode_sfp'] ?>">
                </div>
                <div class="form-group">
                  <label>Serial Number</label>
                  <input type="text" class="form-control" name="serialnumber" required="required" placeholder="Masukkan SN .." value="<?php echo $d['serial_number'] ?>">
                </div>

                <div class="form-group">
                  <label>Redaman</label>
                  <input type="text" class="form-control" name="redaman" required="required" placeholder="Masukkan Redaman .." value="<?php echo $d['redaman'] ?>">
                </div>
                 <div class="form-group">
                <label>Kondisi</label>
                <select class="form-control" name="kondisi" required="required">
                  <option value=""> - Pilih Lokasi - </option>
                  
                  <option value="Terpakai">Terpakai</option>
                  <option value="Rusak">Rusak</option>
                  <option value="Stok Tidak Terpasang">Stok Tidak Terpasang</option>
                  <option value="Stok Terpasang">Stok Terpasang</option>
                </select>
              </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" name="keterangan"  placeholder="Masukkan ket .." value="<?php echo $d['keterangan'] ?>">
                </div>


                <div class="form-group">
                  <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                </div>
                <?php 
              }
              ?>

              
              <p id="catatan Kondisi"><strong>Catatan kondisi:<br>
              </strong> Kondisi Stok Terpasang = SFP berada di OLT Sudah Terpsang Belum di gunakan.<br>
              </strong> Kondisi Stok Tidak Terpasang = SFP berada di Ruang NOC Sebagai Stok.</p>
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>