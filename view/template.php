<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Control QA</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="view/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="view/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="view/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="view/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="view/dist/css/skins/_all-skins.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- jQuery 3 -->
    <script src="view/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="view/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="view/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="view/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="view/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="view/dist/js/demo.js"></script> -->
    <script src="view/js/main.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- ======================= Header ======================== -->
  <?php  include 'modules/header.php'; ?>
  <!-- ======================= Sidebar ======================== -->
  <?php  include 'modules/sidebar.php'; ?>
  <!-- ======================= Content ======================== -->
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <?php
        //include 'modules/content.php';
        if(isset($_GET["ruta"])){
            if($_GET["ruta"]=="content" ||
                $_GET["ruta"]=="validar" ||
                $_GET["ruta"]=="feed" ||
                $_GET["ruta"]=="publicidad" ){
                include 'modules/'.$_GET["ruta"].'.php';      
            }
        }
    ?>
    </div>
    <!-- /.content-wrapper -->
  <!-- ======================= Footer ======================== -->
  <?php include 'modules/footer.php'; ?>
</div>
<!-- ./wrapper -->
</body>
</html>
