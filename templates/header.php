<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $config["meta"]["title"][ROUTE]; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $config["meta"]["description"][ROUTE]; ?>">
  <meta name="author" content="Jakub Sikora">
  <meta name="robots" content="FOLLOW" />
  <meta name="language" content="English" />
  
	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append â€˜#!watchâ€™ to the browser URL, then refresh the page. -->
	
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="/css/candd.css" rel="stylesheet">
    <link href="/css/bootstrap-lightbox.min.css" rel="stylesheet">
   

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
 
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="/img/favicon.png">
  
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/scripts.js"></script>
    <script type="text/javascript" src="/js/bootstrap-lightbox.min.js"></script>
    
    <script type="text/javascript">
            $('#galleryLightbox').lightbox();
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-43772970-1', 'canddroofingbrighton.co.uk');
        ga('send', 'pageview');

      </script>	   
        
    
</head>
<body>
<div class="navbar navbar-fixed-top">
	<div class="row yellow-bg height10">&nbsp;</div>	
	<div class="left-bkg">
		<svg width="30" height="30" viewBox="0 0 30 30"
			xmlns="http://www.w3.org/2000/svg" version="1.1">
		 <polygon fill="#EFBB20" points="0,0 31,0 31,31 29,30" />
	   </svg>
	</div>
	<div class="right-bkg yellow-bg">
		<h5>
			<img src="/img/white_phone.png" class="img-phone" />
			<span class="phone-name">Chad:</span> <?php echo $config['phone']['main'];?>&nbsp;&nbsp;	
			<span class="phone-name">Doug:</span> <?php echo $config['phone']['secondary'];?>
			<img src="/img/white_mail.png" class="img-email"/>
			<?php echo $config["email"];?>
		</h5>
	</div>
</div>
<div class="container navbar_margin">
	<div class="row">
		<div class="span3">
            <a href="/"><img id="logo" src="/img/logo2.png" class="pull-right"></a>
		</div>
		<div class="span9">
			<div class="row">
					<div class="page-header">
                                    <h1 class="yellow-color pull-left">
                                            Specialising in <span class="white-color">roof</span> repairs and renewal in Brighton<br/>
                                            <small class="white-color pull-right">Call us today on<span class="yellow-color"> <?php echo $config['phone']['main'];?></span> to arrange a 
                                                <span class="yellow-color">FREE</span> estimate or click here to email us!</small>
						</h1>

					</div>
				</div>
			</div>
		</div>
	</div>
<div class="row">
	<div class="navbar navbar_margin">
		<div class="navbar-inner">
			<ul class="nav">
				<li <?php echo (ROUTE == ROUTE_INDEX ? 'class="active"' : null );?>><a href="<?php echo Helpers::buildUrl(ROUTE_INDEX); ?>">HOME</a></li>
				<li <?php echo (ROUTE == ROUTE_SERVICES ? 'class="active"' : null );?>><a href="<?php echo Helpers::buildUrl(ROUTE_SERVICES); ?>">SERVICES</a></li>
				<li <?php echo (ROUTE == ROUTE_ABOUT_US ? 'class="active"' : null );?>><a href="<?php echo Helpers::buildUrl(ROUTE_ABOUT_US); ?>">ABOUT US</a></li>
				<li <?php echo (ROUTE == ROUTE_GALLERY ? 'class="active"' : null );?>><a href="<?php echo Helpers::buildUrl(ROUTE_GALLERY); ?>">GALLERY</a></li>
				<li <?php echo (ROUTE == ROUTE_CONTACT ? 'class="active"' : null );?>><a href="<?php echo Helpers::buildUrl(ROUTE_CONTACT); ?>">CONTACT</a></li>
			</ul>
		</div>
	</div>
</div>
