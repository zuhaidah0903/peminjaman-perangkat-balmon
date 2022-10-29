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
              <h3><?= $ttl_perangkat;?></h3>

              <p>Perangkat Tersedia</p>
            </div>
            <div class="icon">
              <i class="fa  fa-archive"></i>
            </div>
            <a href="<?php echo base_url('member_system/perangkat') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $ttl_pinjam;?></h3>

              <p>Perangkat Dipinjam</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="<?php echo base_url('member_system/pinjam') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">