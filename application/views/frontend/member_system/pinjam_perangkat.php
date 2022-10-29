<div class="row">
    <div class="col-lg-12">
        <h2>Form Pinjam Perangkat</h2>
        <br>
    </div>

</div>

    <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="panel-title">Form Pinjam Perangkat</h3>
        </div>
                <form class="form-horizontal" method="POST" id="pinjam_perangkat" action="<?php echo base_url('member_system/pinjam_perangkat_act'); ?>" enctype="multipart/form-data">
          <input type="hidden" name="id_peminjam" value="<?php echo $userdata['id_peminjam'] ?>">
          <input type="hidden" name="id_perangkat" value="<?php echo $data->id_perangkat; ?>">
          <input type="hidden" name="tgl_kembali" value="0">
          <input type="hidden" name="status" value="0">
          <div class="panel-body">
          <div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
          <div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
          <div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

            <!-- <form method="post" action="<?= base_url('admin_system/perangkat_add')?>" class="form-horizontal"> -->
               <div class="box-body">
                <div class="panel-body">
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label">ID Perangkat</label>
                  <div class="col-sm-10">
                    <input type="text" name="id_perangkat" class="form-control" value="<?php echo $data->id_perangkat; ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Kode Perangkat</label>
                  <div class="col-sm-10">
                    <input type="text" name="kd_perangkat" class="form-control" value="<?php echo $data->kd_perangkat; ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Kategori Perangkat</label>
                  <div class="col-sm-10">
                  <input type="text" name="kategori" class="form-control" value="<?php echo $data->kategori; ?>" disabled>
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
                  <input type="number" name="stock_perangkat" class="form-control" value="<?php echo $data->stock_perangkat; ?>" disabled>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Waktu Pinjam</label>
                  <div class="col-sm-10">
                    <input type="datetime" name="tgl_pinjam" class="form-control" value="<?php echo date('Y-m-d H:i:s') ?>" readonly>
                  </div>
                </div>

                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Jumlah Pinjam</label>
                  <div class="col-sm-10">
                    <input type="number" name="jml" class="form-control" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">No SPT</label>
                  <div class="col-sm-10">
                    <input type="text" name="no_spt" class="form-control" value="">
                  </div>
                </div>

                    <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Kegiatan</label>
                  <div class="col-sm-10">
                    <input type="text" name="kegiatan" class="form-control" value="">
                  </div>
                </div>


             
          <div class="panel-footer text-right">
          <a href="<?php echo base_url('member_system/perangkat'); ?>" class="pull-left btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
          <button class="btn btn-default" type="reset">Reset</button>
          <button class="btn btn-primary" type="submit" onclick="return confirm('jika peminjaman sudah dikonfirmasi, segera bawa surat tugas ke petugas BMN!');">Simpan</button>
        </div>
            </form> 
          </div>
        </div>