<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      STB
      <small>Tambah STB ROOT</small>
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
            <h3 class="box-title">Tambah Data ROOT STB</h3>
            <a href="data_stb.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
          </div>
          <div class="box-body">
            <form action="stb_act.php" method="post">
              <div class="form-group">
                <label>Kode Root</label>
                <input type="text" class="form-control" name="koderoot" required="required" placeholder="Masukan Kode root ..">
              </div>
              <div class="form-group">
                <label>Mac Lan</label>
                <input type="text" class="form-control" name="maclan" required="required" placeholder="Masukkan Mac Lan ..">
              </div>
              <div class="form-group">
                <label>MaC Wifi</label>
                <input type="text" class="form-control" name="macwifi" required="required" placeholder="Masukkan MAc Wifi ..">
              </div>

              <div class="form-group">
                <label>Tanggal Root</label>
                <input type="date" class="form-control" name="tanggalroot" required="required" placeholder=" ..">
              </div>

              <div class="form-group">
                <label>Tanggal Update</label>
                <input type="date" class="form-control" name="tanggalupdate" placeholder=" ..">
              </div>

              <div class="form-group">
                <label>Petugas Root</label>
                <input type="text" class="form-control" name="petugasroot" required="required" placeholder="Masukkan Petugas ..">
              </div>

              <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="keterangan" placeholder="Masukkan keterangan ..">
              </div>

              <div class="form-group">
                <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
              </div>
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>