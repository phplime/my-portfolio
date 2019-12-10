<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php if(isset($page_title) && $page_title!=""){ echo $page_title; }?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/dist/css/AdminLTE.min.css">

  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">

  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/dist/css/skins/_all-skins.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  
  <!-- select2 style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/bower_components/select2/dist/css/select2.min.css">
  

  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/iCheck/square/blue.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/datetime/datetimepicker.css">

  <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

  <!-- uploader -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/uploader/uploadify.css">

  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/test.css">
  <link rel="stylesheet" href="<?php echo base_url()?>default_asset/admin.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php if (isset($page_title) && $page_title =="Login" || $page_title =="Registration") {?>
<div class="wrapper" style="background: #d2d6de;">
<?php }else{ ?>
  <div class="wrapper">
<?php } ?>