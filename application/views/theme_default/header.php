<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
$title = $this->uri->segment(1);
if($title == NULL){
    $title = 'Home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title;?> | E-RESTAURANT</title>
    <link href="<?= base_url();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url();?>/css/price-range.css" rel="stylesheet">
    <link href="<?= base_url();?>/css/animate.css" rel="stylesheet">
    <link href="<?= base_url();?>/css/new_style.css" rel="stylesheet">
	<link href="<?= base_url();?>/css/main.css" rel="stylesheet">
	<link href="<?= base_url();?>/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url();?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url();?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url();?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url();?>/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
                                                            <li><i class="fa fa-phone"></i>&nbsp;+359 878 ******</li>
                                                            <li><i class="fa fa-envelope"></i>&nbsp;dimitrov.s.3ds@gmail.com</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
                                                    <?php if($user = $this->session->userdata('username')):?>
                                                    <p>Welcome &nbsp;<?php echo $user;?></p>
                                                    <?php else: ?>
                                                    <a href="<?= base_url();?>Account/"><p style="color: red;">Please login into the system!</p></a>
                                                    <?php endif;?>
                                                    <p class="free"><?php echo $this->session->flashdata('register');?></p>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
                                                                <?php if($user):?>
                                                                <li><a href="<?= base_url();?>Account/logout/"><i class="fa fa-unlock-alt"></i>Logout</a></li>
								<li><a href="<?= base_url();?>Cart/view/"><i class="fa fa-shopping-cart"></i>Cart</a></li>
                                                                <?php else:?>
                                                                <li><a href="<?= base_url();?>Account/forgotten_pass/"><i class="fa fa-pencil"></i>Forgot your password ?</a></li>
								<li><a href="<?= base_url();?>Account/"><i class="fa fa-lock"></i>Login</a></li>
                                                                <?php endif;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
                <div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
                                                            <li><a href="<?= base_url();?>" class="active">Home</a></li>
                                                            <li class="dropdown"><a href="<?= base_url();?>Category/">Shop<i class="fa fa-angle-down"></i></a>
                                                                <ul role="menu" class="sub-menu">
                                                                    <li><a href="<?= base_url();?>Category/">Products</a></li>
                                                                                <?php if($user):?>
										<li><a href="<?= base_url();?>Cart/view/">Cart</a></li> 
                                                                                <?php endif;?>
										<li><a href="<?= base_url();?>Account/">Login</a></li> 
                                                                    </ul>
                                                                </li> 
                                                                <?php if($user):?>
								<li><a href="<?= base_url();?>Account/user_information/">Account</a></li>
                                                                <?php endif;?>
								<li><a href="<?= base_url();?>Contact/">Contact</a></li>
                                                                <li><a href="<?= base_url();?>About/">About</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
                                                    <form action="<?= site_url('search/search_keyword'); ?>" method = "post" name="search" id="search">
                                                        <input type="text" placeholder="Search" class="search-box" name = "keyword" id="keyword"/>
                                                    </form>
                                                    <p class="error"><?= form_error('keyword');?></p>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->