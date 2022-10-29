 
       <?php
       if (!empty($this->session->flashdata('info'))) {?>
<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
<?php }
?>

   <div class="row">
                <div class="col-lg-12">
                    <h2> Data Peminjam</h2>
                    <br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="text-right">
                      <div class="pull-left panel-title">Data User Peminjam</div>
                      <a class="btn btn-success btn-add" href="<?php echo base_url('admin_system/peminjam_form') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                  </div>
        <!--       
         <div class="row">
           <div class="col-md-12">
             <a href="<?= base_url('admin_system/peminjam_form')?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data Peminjam</a>
           </div>
         </div>

         <br>

         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Peminjam</h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
              <table id="example1" class="table table-responsive table-bordered table-striped">
              <!-- <table id="example1" class="table table-bordered table-striped"> -->
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Bidang</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                    foreach ($data as $d1) {?>
                      <tr>
                        <td><?= $d1->id_peminjam;?></td>
                        <td><?= $d1->username;?></td>
                         <td><?php echo $this->encrypt->decode($d1->password)?></td>
                        <td><?= $d1->name;?></td>
                        <td><?= $d1->nip;?></td>
                        <td><?= $d1->bidang;?></td>
                        <td>
                            <form action="<?php echo base_url('admin_system/peminjam_form') ?>" method="post">
                              <input type="hidden" name="id" value="<?php echo $d1->id_peminjam ?>">
                              <button class="btn btn-warning btn-xs" type="submit" data-original-title="Edit" data-placement="top" data-toggle="tooltip"><i class="fa fa-edit"></i></button>
                            </form>
                          </td>
                          <td>
                            <form action="<?php echo base_url('admin_system/peminjam_delete') ?>" method="post">
                              <input type="hidden" name="id" value="<?php echo $d1->id_peminjam ?>">
                              <button class="btn btn-danger btn-xs btn-delete" type="submit" data-original-title="hapus" data-placement="top" data-toggle="tooltip" onclick="return confirm('Yakin Mau Hapus?');"><i class="fa fa-trash-o"></i></button>
                            </form>
                          </td>
                      </tr>
                    <?php }

                  ?>
              </tbody>
            </tr>
            </table>
          </div>
          </div>
        </div>
      </body>
    </head>
    </html>