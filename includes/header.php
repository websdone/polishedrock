<?php require_once( 'cms/cms.php' ); ?>	
<!doctype html>
<html>
	<head>
		  <title>PolishedRock Ltd.</title>
		  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" type="text/css" href="css/style.css">
		  <link href="css/bootstrap.css" rel="stylesheet">
		  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
		  <!-- Add the slick-theme.css if you want default styling -->
		  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
	</head>	
<body>
	<!--script>document.body.className += ' fade-out';</script-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
  	<span class="mobile">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    
	    	 <a href="index.php" title="" class="navbar-brand"> <img src="img/logo.png" class="logo" /> </a>
    	</div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse mobile" id="bs-example-navbar-collapse-1"> 
    	  
	       <header>
				<ul class="nav navbar-nav">
					<li> 
						<img src="img/home/social.png" > 
					</li>
				</ul>	
			</header>

	        <nav class="mobile">
				<ul class="nav navbar-nav">
					<li> <a href="software.php" title="" > software </a> </li>
					<li> <a href="hardware.php" title="" > hardware </a> </li>	
					<li> <a href="rental.php" title="" > rental </a> </li>
					<li> <a href="contactus.php" title="" > contact Us </a></li>
				</ul>	
			</nav>
		 </div><!-- /.navbar-collapse -->
	</span>	
	<span class="desktop">
	     <!-- Collect the nav links, forms, and other content for toggling -->
	       <header>
				<ul class="nav navbar-nav">
					<li> 
						<img src="img/home/mobile.png"> 
						<span> 020 8896 0494 </span> 
					</li>
					<li> 
						<img src="img/home/mail.png"> 
						<a href="mailto:hello@polisehdrockltd.co.uk">hello@polisehdrockltd.co.uk </a> 
					</li>
			
				</ul>	
			</header>

	        <nav class="header">
				<ul>
					<li> <a href="<cms:link 'software.php' />" title="" > Software </a> </li>
					<li> <a href="<cms:link 'hardware.php' />" title="" > Hardware </a> </li>
					<li> 
						<a href="<cms:link 'index.php' />" title=""> <img src="img/logo-black.png" class="logo" /> </a>
					</li>
					<li> <a href="<cms:link 'rental.php' />" title="" > Rental </a> </li>
					<li> <a href="<cms:link 'contactus.php' /> " title="" > Contact Us </a></li>
					
				</ul>	
			</nav>	
	 </span>
	 </div>
</nav>

		   
 