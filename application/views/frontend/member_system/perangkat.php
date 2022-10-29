       <?php
       if (!empty($this->session->flashdata('info'))) {?>
<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
<?php }
?>

                
                <div class="row">
                <div class="col-lg-12">
                    <h2> Data Perangkat</h2>
                    <br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Data Perangkat</h3>
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
                  <th>Kode Perangkat</th>
                  <th>Kategori Perangkat</th> 
                  <th>Nama Perangkat</th>
                  <th>Merk/Type</th>
                  <th>Stock</th>
                  <th>Kondisi</th>
                  <th>Detail</th>
                  <th>Pinjam</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                  $no=1;
                    foreach ($data as $row) {?>
                      <tr>
                        <td><?= $no++ ;?></td>
                        <td><?= $row->kd_perangkat;?></td>
                        <td><?= $row->kategori;?></td>
                        <td><?= $row->nma_perangkat;?></td>
                        <td><?= $row->merk;?></td>
                        <td><?= $row->stock_perangkat;?></td>
                        <td><?= $row->kondisi;?></td>
                          <td>
                            <form action="<?php echo base_url('member_system/perangkat_detail') ?>" method="post">
                              <input type="hidden" name="id" value="<?php echo $row->id_perangkat ?>">
                              <button class="btn btn-primary btn-xs" type="submit" data-placement="top" data-toggle="tooltip"><i class="fa fa-eye"></i> Detail</button>
                            </form>
                          </td>
                          <td>
                            <form action="<?php echo base_url('member_system/pinjam_perangkat') ?>" method="post">
                              <input type="hidden" name="id" value="<?php echo $row->id_perangkat ?>">
                              <button class="btn btn-danger btn-xs btn-delete" type="submit"  data-placement="top" data-toggle="tooltip" onclick="return confirm('Silahkan upload SPT terlebih dahulu sebelum meminjam!');"><i class="fa fa-book"></i> Pinjam</button>
                            </form>

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