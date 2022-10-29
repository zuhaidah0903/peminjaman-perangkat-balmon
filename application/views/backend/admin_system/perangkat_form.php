<div class="row">
    <div class="col-lg-12">
        <h2>Form Data Perangkat</h2>
        <br>
    </div>

</div>

    <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="panel-title">Form Data Perangkat</h3>
        </div>

      <form class="form-horizontal" method="POST" id="perangkat_form" action="<?php if($data!=null) echo base_url('admin_system/perangkat_update'); else echo base_url('admin_system/perangkat_add'); ?>">
        <input type="hidden" name="id_perangkat" value="<?php if($data!=null) echo $data->id_perangkat; ?>">
          <div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
          <div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
          <div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

          <!--        -------------------------------------------------------------------------------------------------------->

            <!-- <form method="post" action="<?= base_url('admin_system/perangkat_add')?>" class="form-horizontal"> -->
              <div class="box-body">
              <!--   <div class="panel-body">
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label">ID </label>
                  <div class="col-sm-10">
                    <input type="text" name="kd_perangkat" value="<?php if($data!=null) echo $data->id_perangkat; else echo 'AUTO'?>" class="form-control" readonly>
                  </div>
                </div> -->
                
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Kode Perangkat</label>
                  <div class="col-sm-10">
                    <input type="text" name="kd_perangkat" value="<?php if($data!=null) echo $data->kd_perangkat;?>" class="form-control" placeholder="Kode Perangkat" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Kategori Perangkat</label>
                  <div class="col-sm-10"> 
                    <select name="kategori" class="form-control"  required>
                    <option value=""> - Pilih Kategori - </option>
                    <option value="Mini Bus">Mini Bus</option>
                    <option value="Mobil">Mobil</option>
                    <option value="Motor">Motor</option>
                    <option value="Antena">Antena</option>
                    <option value="Antena UHF">Antena UHF</option>
                    <option value="Laptop">Laptop</option>
                    <option value="GPS">GPS</option>
                    <option value="RDF">RDF</option>
                    <option value="SPA">SPA</option>
                    <option value="Receiver">Receiver</option>
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Nama Perangkat</label>
                  <div class="col-sm-10">
                    <input type="text" name="nma_perangkat" value="<?php if($data!=null) echo $data->nma_perangkat;?>" class="form-control" placeholder="Nama Perangkat" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Merk/Type</label>
                  <div class="col-sm-10">
                    <input type="text" name="merk" value="<?php if($data!=null) echo $data->merk;?>" class="form-control" placeholder="Merk/Type" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Stock</label>
                  <div class="col-sm-10">
                    <input type="number" name="stock_perangkat" value="<?php if($data!=null) echo $data->stock_perangkat;?>" class="form-control" placeholder="Stock" required>
                  </div>
                </div>

              
              <div class="form-group">
                   <label for="" class="col-sm-2 control-label">Kondisi</label>
                  <div class="col-sm-10">
                    <select name="kondisi" class="form-control"  required>
                    <option value=""> - Kondisi Perangkat -</option>
                    <option value="Baik">Baik</option>
                    <option value="Rusak">Rusak</option>
                  </select>
                  </div>
                </div>
                
                    <div class="form-group">
                  <label for="" class="col-sm-2 control-label">NUP</label>
                  <div class="col-sm-10">
                    <input type="text" name="NUP" value="<?php if($data!=null) echo $data->NUP;?>" class="form-control" placeholder="Nomor Urut Pendaftaran" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Tanggal Perolehan</label>
                  <div class="col-sm-10">
                    <input type="date" name="tgl_perolehan" value="<?php if($data!=null) echo $data->tgl_perolehan;?>" class="form-control" placeholder="Tanggal Perolehan" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Asal Perolehan</label>
                  <div class="col-sm-10">
                    <input type="text" name="asal_perolehan" value="<?php if($data!=null) echo $data->asal_perolehan;?>"class="form-control" placeholder="Asal Perolehan" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Harga Aset</label>
                  <div class="col-sm-10">
                    <input type="text" name="rp_aset" value="<?php if($data!=null) echo $data->rp_aset;?>" class="form-control" placeholder="Harga Aset" required>
                  </div>
                </div>
           
             
              <div class="box-footer">
                <a href="<?= base_url('admin_system/perangkat')?>" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>