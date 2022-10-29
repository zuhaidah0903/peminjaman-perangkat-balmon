

                <div class="row">
                <div class="col-lg-12">
                    <h2> Data Berita Acara Peminjaman</h2>
    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

          
          <hr>
              <form action="<?= base_url("/member_system/upload_bapinjam")?>" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <br>
                <input type="submit" class="btn btn-primary" value="upload">
              </form>

              <br>

              <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Berita Acara Peminjaman</h3>
                    </div>
                  


        <!--  <div class="box">
            <div class="box-header">
  
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No. </th>
                  <th>File BA Pinjam</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                  $no =1;
                    foreach ($files as $file) {?>
                      <tr>
                        <td><?= $no++;?></td>
                        <td><?= $file?></td>
                        <td>
                          <a href="<?= base_url("/file_SPT/$file")?>" class="btn btn-primary" download>Unduh</a>
                          <a href="<?= base_url("/member_system/delete_file_ba/$file")?>" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus File Ini?');">Hapus</a>
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