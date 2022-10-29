<div class="row">
    <div class="col-lg-12">
        <h2>Detail Data Perangkat</h2>
        <br>
    </div>

</div>

    <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="panel-title">Detail Data Perangkat</h3>
        </div>

     
        <form class="form-horizontal" method="POST" id="perangkat_detail" action="<?php echo base_url('admin_system/perangkat_detail'); ?>">
        <!-- <input type="hidden" name="id_perangkat" value="<?php if($data!=null) echo $data->id_perangkat; ?>">
          <div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
          <div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
          <div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div> -->

<!--             <form method="post" action="<?= base_url('admin_system/perangkat_detail')?>" class="form-horizontal">  -->
              <div class="box-body">
                <div class="panel-body">
                  <!-- <div class="form-group">
                  <label for="" class="col-sm-2 control-label">ID Perangkat </label>
                  <div class="col-sm-10">
                    <input type="text" name="kd_perangkat" value="<?php echo $data->id_perangkat;?>"class="form-control" disabled>
                  </div>
                </div> -->
                
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Kode Perangkat</label>
                  <div class="col-sm-10">
                    <input type="text" name="kd_perangkat" value="<?php echo $data->kd_perangkat;?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Kategori Perangkat</label>
                  <div class="col-sm-10"> 
                     <input type="text" name="kategori" class="form-control" value="<?php echo $data->kategori; ?>" disabled>
                   <!--  <select name="kategori" class="form-control" required>
                    <option value=""> - Pilih Kategori -</option>
                    <option value="Baik">Mini Bus</option>
                    <option value="Rusak">Mobil</option>
                    <option value="Rusak">Motor</option>
                    <option value="Rusak">Antena</option>
                    <option value="Rusak">Antena UHF</option>
                    <option value="Rusak">Laptop</option>
                    <option value="Rusak">GPS</option>
                    <option value="Rusak">RDF</option>
                    <option value="Rusak">SPA</option>
                    <option value="Rusak">Receiver</option>
                  </select> -->
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Nama Perangkat</label>
                  <div class="col-sm-10">
                    <input type="text" name="nma_perangkat" class="form-control" value="<?php echo $data->nma_perangkat; ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Merk/Type</label>
                  <div class="col-sm-10">
                  <input type="text" name="merk" class="form-control" value="<?php echo $data->merk; ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Stock</label>
                  <div class="col-sm-10">
                  <input type="text" name="stock_perangkat" class="form-control" value="<?php echo $data->stock_perangkat; ?>" disabled>
                  </div>
                </div>
              
              <div class="form-group">
                   <label for="" class="col-sm-2 control-label">Kondisi</label>
                  <div class="col-sm-10">
                     <input type="text" name="kondisi" class="form-control" value="<?php echo $data->kondisi; ?>" disabled>
                    <!-- <select name="kondisi" class="form-control" required>
                    <option value=""> - Kondisi Perangkat -</option>
                    <option value="Baik">Baik</option>
                    <option value="Rusak">Rusak</option>
                  </select> -->
                  </div>
                </div>
                   <div class="form-group">
                  <label for="" class="col-sm-2 control-label">NUP</label>
                  <div class="col-sm-10">
                     <input type="text" name="NUP" class="form-control" value="<?php echo $data->NUP; ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Tanggal Perolehan</label>
                  <div class="col-sm-10">
                     <input type="text" name="tgl_perolehan" class="form-control" value="<?php echo $data->tgl_perolehan; ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Asal Perolehan</label>
                  <div class="col-sm-10">
                     <input type="text" name="asal_perolehan" class="form-control" value="<?php echo $data->asal_perolehan; ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Harga Aset</label>
                  <div class="col-sm-10">
                     <input type="text" name="rp_aset" class="form-control" value="<?php echo $data->rp_aset; ?>" disabled>
                  </div>
                </div>
              </div>
             
              <div class="box-footer">
                <a href="<?= base_url('admin_system/perangkat')?>" class="btn btn-warning">Close</a>
              </div>
            </form>
          </div>
        </div>