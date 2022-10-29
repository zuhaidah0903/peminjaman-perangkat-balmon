       <?php
       if (!empty($this->session->flashdata('info'))) {?>
<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
<?php }
?>

                
                <div class="row">
                <div class="col-lg-12">
                    <h2> Riwayat Peminjaman</h2>
                    <br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Riwayat Peminjaman</h3>
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
                  <th>ID Pinjam</th>
                   <th>Nama Peminjam</th>
                  <th>Nama Perangkat</th>
                  <th>Merk/Type</th> 
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Status</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                    foreach ($data as $row) {?>
                      <tr>
                        <td><?= $row->id_pinjam;?></td>
                         <td><?= $row->name;?></td>
                        <td><?= $row->nma_perangkat;?></td>
                        <td><?= $row->merk_perangkat;?></td>
                        <td><?= $row->tgl_pinjam;?></td>
                        <td class="text-center"><?php if($row->tgl_kembali == '0000-00-00 00:00:00')echo 'N/A'; else echo $row->tgl_kembali; ?></td>
                          <td>
                            <?php if($row->status == '0') echo "<div class='text-danger'>Pinjam Ditolak</div>";
                                  elseif($row->status == '1') echo "<div class='text-success'>Dikembalikan</div>"; ?>
                          </td>
                      </tr>
                    <?php }

                  ?>
                </tbody>

                <tbody>
              </tbody>
            </table>
          </div>
          </div>
        </div>
      </body>
    </head>
    </html>