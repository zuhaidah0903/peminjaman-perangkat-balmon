
         <div class="row">
           <div class="col-md-12">
            <h2> Perangkat Dipinjam</h2>
            <br>
             <!-- <a href="<?= base_url()?>data_perangkat/tambah_perangkat" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Peminjaman</a> -->
           </div>
         </div>

         <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="text-right">
                      <div class="pull-left panel-title">Laporan Perangkat Yang Sedang Dipinjam</div>
                      <div class="clearfix"></div>
                    </div>
                  </div>

            <div class="box-body">
              <div class="table table-responsive">
              <table id="example1" class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Pinjam</th>
                  <th>Nama Peminjam</th> 
                  <th>Nama Perangkat</th>
                  <th>Merk/Type</th>
                  <th>Jumlah Pinjam</th>
                  <th>No SPT</th>
                  <th>Tanggal Pinjam</th>
                  <th>BA Pinjam</th>
                  <th>Hapus</th>
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
                          <td><?= $row->jml;?></td>
                          <td><?= $row->no_spt;?></td>
                          <td><?= $row->tgl_pinjam;?></td>
                          <td>
                             <form action="<?php echo base_url('admin_system/print_bapinjam/'.$row->id_pinjam) ?>" method="post">
                               <input type="hidden" name="id_peminjam" value="<?php echo $row->id_peminjam ?>">
                              <input type="hidden" name="kegiatan" value="<?php echo $row->kegiatan ?>">
                              <input type="hidden" name="no_spt" value="<?php echo $row->no_spt ?>">
                              <input type="hidden" name="id_pinjam" value="<?php echo $row->id_pinjam ?>">
                              <button class="btn btn-primary btn-xs" type="submit" data-original-title="cetak" data-placement="top" data-toggle="tooltip"><i class="fa fa-print"></i></button>
                            </form>
                          </td>
                          <td>
                              <form action="<?php echo base_url('admin_system/laporan_delete') ?>" method="post">
                              <input type="hidden" name="id" value="<?php echo $row->id_perangkat ?>">
                              <button class="btn btn-danger btn-xs btn-delete" type="submit" data-original-title="hapus" data-placement="top" data-toggle="tooltip" onclick="return confirm('Yakin Mau Hapus?');"><i class="fa fa-trash-o"></i></button>
                            </form>
                          </td>
                        </tr>
                     <?php } ?>
                </tbody>
              </tbody>
            </table>
          </div>
          </div>
        </div> 
      </body>
    </head>
    </html>
