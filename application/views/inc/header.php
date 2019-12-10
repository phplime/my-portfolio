<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
	<!-- Bootstrap CSS -->

	<!-- icofont -->
	<link rel="stylesheet" href="<?= base_url(); ?>myProjects/webProject/icofont/css/icofont.min.css">
	<!-- icofont -->

	<!-- slick slider -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/slickSlider/slick.css">
	<!-- <link rel="stylesheet" href="assets/plugins/slickSlider/slick-theme.css"> -->
	<!-- slick slider -->


	<!-- animate css 3.7.2 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<!-- animate -->


	<!-- Style css -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>default_asset/user.css">
	<!-- animate -->

	<!-- Style css -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">
	<!-- animate -->

	<!-- fontawsome 5 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<!--  -->
	<!-- fontawsome 4.7 -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- fontawsome 5 -->


	<title>Hello, world!</title>
</head>
<body class="dark">
	<div class="profile-wrapper">
		<div class="navArea navLeft">
			<a href="javasctipt:;" class="navBtn navOpen"></a>
			<div class="navIner">
				<div class="navHeader-img">
					<a href=""><img src="<?= base_url('assets/images/avatar.jpg')?>" alt=""></a>
				</div>
				<div class="navMenu">
					<ul>
						<li><a href="<?php echo base_url('me-'.$slug); ?>"  class="<?= isset($page_title) && $page_title=="Home"?"active":'';?>">Home</a></li>
						<li><a href="<?php echo base_url('about-'.$slug); ?>" class="<?= isset($page_title) && $page_title=="About"?"active":'';?>">About</a></li>
						<li><a href="<?php echo base_url('resume-'.$slug); ?>" class="<?= isset($page_title) && $page_title=="Resume"?"active":'';?>">Resume</a></li>
						<li><a href="<?php echo base_url('portfolio-'.$slug); ?>" class="<?= isset($page_title) && $page_title=="Portfolio"?"active":'';?>">Portfolios</a></li>
						<li><a href="" class="<?= isset($page_title) && $page_title=="Contact"?"active":'';?>">Contact</a></li>
						
					</ul>
				</div>
				<div class="copyRight">
					<p>&copy; 2019</p>
				</div>
			</div>
		</div>

<div class="contentArea navLeft">
	<div class="wrapper">
