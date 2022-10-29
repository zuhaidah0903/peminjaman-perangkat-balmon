       <?php
       if (!empty($this->session->flashdata('info'))) {?>
<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
<?php }
?>

  
         <div class="row">
           <div class="col-md-12">
            <h2> Permintaan Pengembalian</h2>
            <br>
             <!-- <a href="<?= base_url()?>data_perangkat/tambah_perangkat" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Peminjaman</a> -->
           </div>
         </div>

         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengembalian</h3>
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
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Setujui</th>
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
                           <td><?= $row->tgl_kembali;?></td>
                          <td class="text-left">
                            <form action="<?= base_url('admin_system/kembali_setujui')?>" method="post">
                              <input type="hidden" name="id_pinjam" value="<?php echo $row->id_pinjam ?>">
                               <input type="hidden" name="kegiatan" value="<?php echo $row->kegiatan ?>">
                              <input type="hidden" name="id_peminjam" value="<?php echo $row->id_peminjam ?>">
                              <input type="hidden" name="id_perangkat" value="<?php echo $row->id_perangkat ?>">
                              <input type="hidden" name="jml" value="<?php echo $row->jml ?>">
                              <input type="hidden" name="tgl_pinjam" value="<?php echo $row->tgl_pinjam ?>">
                              <input type="hidden" name="tgl_kembali" value="<?php echo $row->tgl_kembali ?>">
                              <input type="hidden" name="status" value="1">
                              <input type="hidden" name="id" value="<?php echo $row->id_pinjam ?>">
                              <button class="btn btn-success btn-xs btn-edit" type="submit" data-original-title="setujui" data-placement="top" data-toggle="tooltip"><i class="fa fa-check"></i> Setujui</button>
                            </form>
                          </td>
                        </tr>
                </tbody>    <?php }
                  ?>

              </tbody>
            </table>
          </div>
          </div>
        </div> 
      </body>
    </head>
    </html>