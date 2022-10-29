                <div class="row">
                <div class="col-lg-12">
                    <h2> Data Surat Perintah Tugas</h2>
    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

          <!-- <div class="row">
           <div class="col-md-12">
             <a href="<?= base_url()?>member_system/tambah_spt" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
              </div>
         </div> -->
     <!--      <hr>
              <form action="<?= base_url("/member_system/upload")?>" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <br>
                <input type="submit" class="btn btn-primary" value="Upload">
              </form> -->

              <br>

              <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Data Surat Perintah Tugas</h3>
                    </div>
                  


        <!--  <div class="box">
            <div class="box-header">
  
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
              <table id="example1" class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                  <th>No. </th>
                  <th>NIP</th>
                  <th>Nama Peminjam </th>
                  <th>File SPT</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                  $no =1;
                    foreach ($data as $row) {?>
                      <tr>
                        <td><?= $no++;?></td>
                        <td><?= $row->nip;?></td>
                        <td><?= $row->nama_peminjam;?></td>
                        <td><?= $row->file;?></td>
                        <td>
                          <a href="<?= base_url("/file_SPT/$row->file")?>" class="btn btn-primary" download>Unduh</a>
                          <a href="<?= base_url()?>admin_system/delete_file/<?= $row->id_file;?>" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus File Ini?');">Hapus</a>
                        </td>
                      </tr>
                    <?php }

                  ?>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>