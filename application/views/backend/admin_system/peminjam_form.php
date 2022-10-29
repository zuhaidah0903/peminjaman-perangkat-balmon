
<div class="row">
    <div class="col-lg-12">
        <h2>Form Data Peminjam</h2>
        <br>
    </div>

</div>

        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="panel-title">Form Data Peminjaman</h3>
        </div>

      
        <form class="form-horizontal" method="POST" id="peminjam_form" action="<?php if($data!=null) echo base_url('admin_system/peminjam_update'); else echo base_url('admin_system/peminjam_add'); ?>">
        <input type="hidden" name="id_peminjam" value="<?php if($data!=null) echo $data->id_peminjam; ?>">
          <div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
          <div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
          <div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

          <!-- ------------------------------------------------------------------------------------------------------ -->

           <!-- <form method="post" action="<?= base_url()?>admin_system/peminjam_add" class="form-horizontal">  -->
              <div class="box-body">
                <div class="panel-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="id_peminjam" value="<?php if($data!=null) echo $data->id_peminjam; else echo'AUTO'?>" class="form-control" readonly>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" value="<?php if($data!=null) echo $data->username; ?>" placeholder="Username" required>
                  </div>
                </div> 

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" name="password" value="<?php if($data!=null) echo $this->encrypt->decode($data->password); ?>"  class="form-control" placeholder="Password" required>
                  </div>
                </div>
              
                    <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="<?php if($data!=null) echo $data->name; ?>"  placeholder="Nama" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">NIP</label>
                  <div class="col-sm-10">
                    <input type="text" name="nip" class="form-control" value="<?php if($data!=null) echo $data->nip; ?>"  placeholder="NIP" required>
                  </div>
                </div>
              
              <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Bidang</label>
                   <div class="col-sm-10">
                    <select name="bidang" class="form-control" required>
                    <option value=""> - Pilih Bidang -</option>
                    <option value="Pemantauan dan Penertiban">Pemantauan dan Penertiban</option>
                    <option value="Sarana dan Pelayanan">Sarana dan Pelayanan</option>
                  </select>
                  <br>
                  
                  </div>
                </div>
                

              <div class="box-footer">
          <a href="<?= base_url('admin_system/peminjam')?>" class="btn btn-warning">Cancel</a>
          <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
        </form>
      </div>
    </div>
 

            
        