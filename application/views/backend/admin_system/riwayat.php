         <?php
       if (!empty($this->session->flashdata('info'))) {?>
<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
<?php }
?>
         <div class="row">
           <div class="col-md-12">
            <h2> Riwayat Peminjaman</h2>
            <br>
             <!-- <a href="<?= base_url()?>data_perangkat/tambah_perangkat" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Peminjaman</a> -->
           </div>
         </div>

         <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="text-right">
                      <div class="pull-left panel-title">Riwayat Peminjaman Perangkat</div>
                      <div class="clearfix"></div>
                    </div>
                  </div>

            <div class="box-body">
              <div class="table table-responsive">
              <table id="example1" class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                  <th>No. </th>
                  <th>Kegiatan</th>
                  <th>Nama Peminjam</th> 
                  <th>Nama Perangkat</th>
                  <th>Merk/Type</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Status</th>
                  <th>BA Kembali</th>
                  <th>Hapus</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                    $no=1;
                    foreach ($data as $row) {?>              
                        <tr>
                          <td><?= $no++ ;?></td>                          
                          <td><?= $row->kegiatan;?></td>
                          <td><?= $row->name;?></td>
                          <td><?= $row->nma_perangkat;?></td>
                          <td><?= $row->merk_perangkat;?></td>
                          <td><?= $row->tgl_pinjam;?></td>
                          <td><?php if($row->tgl_kembali == '0000-00-00 00:00:00') echo 'N/A'; else echo $row->tgl_kembali;?></td>
                          <td>
                            <?php if($row->status == '0') echo "<div class='text-danger'> Pinjam Ditolak </div>";
                                  elseif($row->status == '1') echo "<div class='text-success'> Dikembalikan </div>"; ?>
                          </td>
                          <td>                          
                             <form action="<?php echo base_url('admin_system/print_bakembali/'.$row->id_pinjam) ?>" method="post">
                              <input type="hidden" name="id_peminjam" value="<?php echo $row->id_peminjam ?>">
                              <input type="hidden" name="kegiatan" value="<?php echo $row->kegiatan ?>">
                              <input type="hidden" name="id_pinjam" value="<?php echo $row->id_pinjam ?>">
                              <button class="btn btn-primary btn-xs" type="submit" data-original-title="cetak" data-placement="top" data-toggle="tooltip"><i class="fa fa-print"></i></button>
                            </form>
                          </td>
                          <td>
                              <form action="<?php echo base_url('admin_system/riwayat_delete') ?>" method="post">
                              <input type="hidden" name="id" value="<?php echo $row->id_perangkat ?>">
                              <button class="btn btn-danger btn-xs btn-delete" type="submit" data-original-title="hapus" data-placement="top" data-toggle="tooltip"><i class="fa fa-trash-o"></i></button>
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
