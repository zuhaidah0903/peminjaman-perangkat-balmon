       <?php
       if (!empty($this->session->flashdata('info'))) {?>
<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
<?php }
?>

                
                <div class="row">
                <div class="col-lg-12">
                    <h2> Perangkat Dipinjam</h2>
                    <br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Perangkat Dipinjam</h3>
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
                  <th>Nama Perangkat</th>
                  <th>Merk/Type</th>
                  <th>Jumlah Pinjam</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Status</th>
                  <th>Kembalikan</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                    foreach ($data as $row) {?>
                      <tr>
                        <td><?= $row->id_pinjam;?></td>
                        <td><?= $row->nma_perangkat;?></td>
                        <td><?= $row->merk;?></td>
                        <td><?= $row->jml;?></td>
                        <td><?= $row->tgl_pinjam;?></td>
                        <td class="text-center">
                            <?php if($row->tgl_kembali == "0000-00-00 00:00:00") echo "N/A"; else echo $row->tgl_kembali;?>
                          </td>
                          <td>
                            <?php if($row->status == '0') echo "<div class='text-primary'>Menunggu Peminjaman...</div>";
                                  elseif($row->status == '1') echo "<div class='bg-success'>Sedang Dipinjam</div>";
                                  elseif($row->status == '2') echo "<div class='text-success'>Menunggu Pengembalian...</div>"; ?>
                          </td>
                          <td class="text-center">
                            <?php if($row->status == '1'){ ?>
                            <form action="<?php echo base_url('member_system/pinjam_kembali') ?>" method="post">
                              <input type="hidden" name="tgl_kembali" value="<?php echo date('Y-m-d H:i:s') ?>">
                              <input type="hidden" name="id" value="<?php echo $row->id_pinjam ?>">
                              <button class="btn btn-danger btn-xs btn-delete" type="submit" data-placement="top" data-toggle="tooltip" onclick="return confirm('Harap segera datang ke petugas BMN dan bawa perangkat yang dipinjam!')"><i class="fa fa-undo"></i> Kembalikan</button>
                            </form>
                            <?php }else{ ?>
                            N/A
                          <?php } ?>
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