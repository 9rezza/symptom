<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$url?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=$url?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?=$url?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css"/>
  <!-- jquery-ui -->
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/jquery/external/jquery-ui/jquery-ui.min.css">

  
  <!-- jQuery 3 -->
  <script src="<?=$url?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jquery-ui -->
  <script src="<?=$url?>assets/bower_components/jquery/external/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?=$url?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <link href="<?=$url?>vendor/bootstrap-toggle/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="<?=$url?>vendor/bootstrap-toggle/bootstrap-toggle.min.js"></script>
  <script src="<?=$url?>vendor/bootstrap-notify/bootstrap-notify.min.js"></script>

  <style type="text/css">
    .no-padd-side {
      padding-left: 0;
      padding-right: 0;
    }
    .mg-bottom-20 {
      margin-bottom: 20px;
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?=$url?>vendor/fontawesome/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-black sidebar-collapse">
<div class="wrapper">
  

  <!-- Content Wrapper. Contains page content -->
<style>
  .parent-hmi{
    margin: 0;
    padding: 0;
    text-align: center;    
  }
  .hmi{
    position: relative;
    display: inline-block;
    /* background-image: url("../assets/images/hmi/waterpump.png?123"); */
    background-repeat: no-repeat;
    background-color: #eee;
    width: 976px;
    height: 544px;
    border: 1px solid grey;
    padding: 25px;
  }
  /* .box-header{
    height: 100px;
  } */
  .box-icon{
    color: #488DDD;
  }
  .box-title{
    font-size: 32px !important;
  }
  .box{
    min-width: 916px;
  }
  
  @media(max-width:916px){
    .content{
      overflow-x: scroll
    }

  }
</style>
<div class="content-wrapper bg-white">
  <!-- Content Header (Page header) -->
  <section class="content-header hidden">
    <h1>
      Judul
      <small>Deskripsi singkat</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Parent</a></li>
      <li class="active">Childern</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-solid box-grey">
          <div class="box-header">
            <div class="col-xs-4 title">
              <i class="box-icon fa <?=$title_icon?> fa-3x"></i>
              <h3 class="box-title"><?=$title?></h3>
            </div>
            <div class="col-sm-3 pull-right" style="padding-left: 120px; text-align:left">
              <div class="box-tools pull-right">
                <div class="col-sm-4" style="padding-right: 8px">
                  <a href="<?=$url?>shop" type="button" class="btn btn-primary btn-sm">
                    <i class="fa fa-home" style="font-size: 5em"></i>
                  </a>
                </div>
                <div class="col-sm-5" style="padding-bottom: 8px; text-align:left">
                  <a href="<?=$url?>symptom" type="button" class="btn btn-primary btn-sm" style="width:130px;">
                    <i class="fa fa-bar-chart" style="font-size: 1.5em"> SYMPTOM</i>
                  </a>
                </div>
                <div class="col-sm-5">
                  <a href="<?=$url?>alarm" type="button" class="btn btn-danger btn-sm" style="width:130px; text-align:left">
                    <i class="fa fa-warning" style="font-size: 1.5em"> ALARM</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          
          <?=$_content?>

        </div>
        <!-- /.box -->
      </div>      
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
  

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Theme by <a href="https://adminlte.io">Almsaeed Studio</a>.</strong>
    </div>
    <img src="<?=$url?>assets/images/logo_nama.png" height="30" hidden/>
    <strong>&copy; 2019.</strong>
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- SlimScroll -->
<script src="<?=$url?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=$url?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=$url?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=$url?>assets/dist/js/demo.js"></script>
<!-- BlockUI -->
<script src="<?=$url?>vendor/blockui/jquery.blockUI.js"></script>
<!-- jQuery Highchart
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>

<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script> -->


<script src="<?=$url?>vendor/canvas-js/canvasjs.min.js"></script>
<script src="<?=$url?>vendor/moment-js/moment.js"></script>
<script src="<?=$url?>vendor/moment-js/locale/id.js"></script>
<script src="<?=$url?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>

</body>
</html>
