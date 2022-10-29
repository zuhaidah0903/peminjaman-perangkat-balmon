<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title class="navbar-brand" href="#"><?php echo $userdata['name'] ?></title>
  <link rel="shortcut icon" href="<?php echo base_url('images/logobalmon.png')?>">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: center;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette-box h4 {
      position: absolute;
      top: 100%;
      left: 25px;
      margin-top: -40px;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
</head>


<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">
 
  <header class="main-header">
    <!-- Logo -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="/images/logobalmon.png"></span>
      <!-- <span class="logo-mini"><b>BALMON</b>Pontianak</span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Balmon</b>Pontianak</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <a class="navbar-brand" href="#">Selamat Datang - <?php echo $userdata['name'] ?></a>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
      </div>
    </nav>
  </header>

  
<?php if ($userdata['name'] == 'Administrator') : ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
           <a href="<?php echo base_url() ?>">
            <i class="fa fa-home fa-fw"></i><span>Home</span>
            </a>
        </li>
        <li>
          <a href="<?= base_url('admin/dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="">
            <i class="fa  fa-users"></i>
            <span>Data Peminjam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin_system/peminjam')?>"><i class="fa fa-eye"></i>Lihat Data Peminjam</a></li>
            <li><a href="<?= base_url('admin_system/peminjam_form')?>"><i class="fa fa-user-plus"></i>Form Data Peminjam</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-database"></i>
            <span>Data Perangkat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin_system/perangkat')?>"><i class="fa fa-eye"></i>Lihat Data Perangkat</a></li>
            <li><a href="<?= base_url('admin_system/perangkat_form')?>"><i class="fa  fa-plus"></i>Form Data Perangkat</a></li>
            <!-- <li><a href="<?= base_url()?>kategori"><i class="fa fa-navicon"></i>Kategori Perangkat</a></li> -->

          </ul>
        </li>
                
            <li class="treeview">
            <a href="">
            <i class="fa fa-check-square-o"></i>
            <span>Peminjaman</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin_system/pinjam')?>"><i class="fa fa-check"></i>Permintaan Peminjaman</a></li>
            <li><a href="<?= base_url('admin_system/spt')?>"><i class="fa fa-eye"></i>Lihat File SPT</a></li>
          </ul>
        </li>
                <li><a href="<?= base_url('admin_system/kembali')?>"><i class="fa fa-circle-o-notch"></i> <span>Permintaan Pengembalian</span></a></li>
                <li><a href="<?= base_url('admin_system/riwayat')?>"><i class="fa fa-history"></i> <span>Riwayat Peminjaman</span></a></li>
                <li class="treeview">
          <a href="">
            <i class="fa fa-flag fa-fw"></i>
            <span>Generate Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin_system/laporan_pinjam')?>"><i class="fa fa-flag-checkered fa-fw"></i>Perangkat yang sedang<br>dipinjam</a></li>
          </ul>
        </li>
                <li><a href="<?= base_url()?>admin/do_logout" onclick="return confirm('Anda Yakin Mau Keluar?');"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php endif; ?>

<?php if ($userdata['name'] == 'Superadmin') : ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
           <a href="<?php echo base_url() ?>">
            <i class="fa fa-home fa-fw"></i><span>Home</span>
            </a>
        </li>
        <li>
          <a href="<?= base_url('admin/dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <!-- <li class="treeview">
          <a href="">
            <i class="fa  fa-users"></i>
            <span>Data Peminjam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin_system/peminjam')?>"><i class="fa fa-eye"></i>Lihat Data Peminjam</a></li>
            <li><a href="<?= base_url('admin_system/peminjam_form')?>"><i class="fa fa-user-plus"></i>Form Data Peminjam</a></li>
          </ul>
        </li> -->
        <li class="treeview">
          <a href="">
            <i class="fa fa-database"></i>
            <span>Data Perangkat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin_system/perangkat')?>"><i class="fa fa-eye"></i>Lihat Data Perangkat</a></li>
            <li><a href="<?= base_url('admin_system/perangkat_form')?>"><i class="fa  fa-plus"></i>Form Data Perangkat</a></li>
            <!-- <li><a href="<?= base_url()?>kategori"><i class="fa fa-navicon"></i>Kategori Perangkat</a></li> -->

          </ul>
        </li>
                
            <li class="treeview">
            <a href="">
            <i class="fa fa-check-square-o"></i>
            <span>Peminjaman</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin_system/pinjam')?>"><i class="fa fa-check"></i>Permintaan Peminjaman</a></li>
            <li><a href="<?= base_url('admin_system/spt')?>"><i class="fa fa-eye"></i>Lihat File SPT</a></li>
          </ul>
        </li>
                <li><a href="<?= base_url('admin_system/kembali')?>"><i class="fa fa-circle-o-notch"></i> <span>Permintaan Pengembalian</span></a></li>
                <li><a href="<?= base_url('admin_system/riwayat')?>"><i class="fa fa-history"></i> <span>Riwayat Peminjaman</span></a></li>
                <li class="treeview">
          <a href="">
            <i class="fa fa-flag fa-fw"></i>
            <span>Generate Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin_system/laporan_pinjam')?>"><i class="fa fa-flag-checkered fa-fw"></i>Perangkat yang sedang<br>dipinjam</a></li>
          </ul>
        </li>
                <li><a href="<?= base_url()?>admin/do_logout" onclick="return confirm('Anda Yakin Mau Keluar?');"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php endif; ?>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        <?= $judul;?>
      </h1>
    </section> -->

    <!-- Main content -->
    <section class="content">
      <?php echo $content ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <center>
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2022 <a href="">BalmonPontianak</a>.</strong> All rights
    reserved. 
    </center>
  </footer>
  <div class="control-sidebar-bg"></div>
</div>

<script src="<?= base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
 <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend_assets/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Validation Plugin -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery-validation/jquery.validate.js"></script>
<script src="<?= base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/morris.js/morris.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?= base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url()?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?= base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?= base_url()?>assets/dist/js/pages/dashboard.js"></script>
<script src="<?= base_url()?>assets/dist/js/demo.js"></script>
<script src="<?= base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

 <script>
      $(document).ready(function() {
        $('#dataTables-example').DataTable({
          responsive: true
        });
      });
    </script>

<script type="text/javascript">
      var jvalidate = $("#peminjam_form").validate({
        ignore: [],
        rules: {
          username: {
            required: true
          },
          password: {
            required: true
          },
          name: {
            required: true
          },
          email: {
            required: true
          },
        },
        submitHandler: function(form) {
          var target = $(form).attr('action');
          $('#peminjam_form .alert-warning').removeClass('hidden');
          $('#peminjam_form .alert-success').addClass('hidden');
          $('#peminjam_form .alert-danger').addClass('hidden');
          $.ajax({
            url : target,
            type : 'POST',
            dataType : 'json',
            data : $(form).serialize(),
            success : function(response){
              $('#peminjam_form .alert-warning').addClass('hidden');
              if(response.status == 'ok'){
                $('#peminjam_form .alert-success').removeClass('hidden').children('span').text(response.msg);
                window.location.href = response.redirect;
              }
              else
                $('#peminjam_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
            },
            error : function(jqXHR, textStatus, errorThrown) {
              alert(textStatus, errorThrown);
            }
          });
        }
      });
    </script>

    <!-- WARNING VALIDATE SCRIPT  -->
    <script type="text/javascript">
      var jvalidate = $("#perangkat_form").validate({
        ignore: [],
        rules: {
          name: {
            required: true
          },
          desc: {
            required: true
          },
          stock: {
            required: true
          },
          status: {
            required: true
          },
        },
        submitHandler: function(form) {
          var target = $(form).attr('action');
          $('#perangkat_form .alert-warning').removeClass('hidden');
          $('#perangkat_form .alert-success').addClass('hidden');
          $('#perangkat_form .alert-danger').addClass('hidden');
          $.ajax({
            url : target,
            type : 'POST',
            dataType : 'json',
            data : $(form).serialize(),
            success : function(response){
              $('#perangkat_form .alert-warning').addClass('hidden');
              if(response.status == 'ok'){
                $('#perangkat_form .alert-success').removeClass('hidden').children('span').text(response.msg);
                window.location.href = response.redirect;
              }
              else
                $('#perangkat_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
            },
            error : function(jqXHR, textStatus, errorThrown) {
              alert(textStatus, errorThrown);
            }
          });
        }
      });
    </script>

</body>

</html>


</body>
</html>
