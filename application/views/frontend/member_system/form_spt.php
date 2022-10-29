 <div class="row">
                <div class="col-lg-12">
                    <h2> Form Upload SPT</h2>
                    <br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="panel-title">Form Upload SPT</h3>
        </div>

                   
          <!-- <form class="form-horizontal" method="POST"  action="<?= base_url("/member_system/upload")?>">  -->
            <?php echo form_open_multipart('member_system/upload') ?>
              <input type="hidden" name="file">
              <div class="box-body">
                <div class="panel-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">NIP</label>
                  <div class="col-sm-10">
                    <input type="text" name="nip" class="form-control" required>
                  </div>
                </div>
                <br>
                <br>
              
              <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Nama Pegawai</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_peminjam" class="form-control" required>
                  </div>
                </div>
                 <br>
                <br>
              
              <div class="form-group">
                  <label for="" class="col-sm-2 control-label">File</label>
                  <div class="col-sm-10">
                    <input type="file" name="file"  class="form-control" required>
                  </div>
                </div>
                 <br>
                <br>
              
             
              <div class="box-footer">
                <a href="<?= base_url('member_system/upload_spt')?>" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
             </div>
             <?php echo form_close() ?>
           </div>
         </form>
         </div>
     </div>
 </div>
</div>
