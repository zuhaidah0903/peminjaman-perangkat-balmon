 <div class="row">
                <div class="col-lg-12">
                    <h2>Dashboard</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <br>
<!-- <section class="content"> -->
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jml_barang ?></h3>

              <p>Jumlah Perangkat</p>
            </div>
            <div class="icon">
              <i class="fa  fa-archive"></i>
            </div>
            <a href="<?php echo base_url('admin_system/perangkat') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $ttl_perangkat ?></h3>

              <p>Perangkat Tersedia</p>
            </div>
            <div class="icon">
              <i class="fa fa-tasks"></i>
            </div>
            <a href="<?php echo base_url('admin_system/perangkat') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> 
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $ttl_pinjam ?></h3>

              <p>Perangkat Dipinjam</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="<?php echo base_url('admin_system/laporan_pinjam') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $jml_peminjam ?></h3>

              <p>Jumlah Peminjam</p>
            </div>
            <div class="icon">
              <i class="fa fa-tasks"></i>
            </div>
            <a href="<?php echo base_url('admin_system/peminjam') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        