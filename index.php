<?php require_once( 'cms/cms.php' ); ?>	
<cms:template title="index">
	<cms:editable name="seotitlehome" desc="SEO title home page" type="text" />
	<cms:editable name="seodescriptionhome" desc="SEO description home page" type="text" />
	<cms:editable name="index_text" desc="Main description" type="richtext" />
	<cms:editable name="index_image1" type="image" desc="Left image" />
	<cms:editable name="index_image2" type="image" desc="Right image" />
	<cms:editable name="text_image1" type="text" desc="Right image" />
	<cms:editable name="text_image2" type="text" desc="Right image" />
	<cms:editable name='video' label='Background video file' desc='Upload the mp4 file here' type='file' />
</cms:template>

<!doctype html>
<html>
	<head>
	  <title><cms:show seotitlehome /></title>
	  <meta name="description" content="<cms:show seodescriptionhome />">
	  <cms:embed "header2.php" />
	  <cms:embed "header.php" />


	<div class="home home-bg"> 
		<div class="fullscreen-bg">
		    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
		        <source src="<cms:show video />" type="video/mp4">
		    </video>
		</div>
	   <section class="content home-page animate home">
	   
		<section class="main-block animatedParent ">
			<nav>
		   		<figure class="home-block animated bounceInDown">
		   			<a href="interactive-software-development.php" class="hvr-shutter-in-vertical">
		   				Software
		            </a>
		   	    </figure>	
		   	    <figure class="home-block animated bounceInDown">
		   	    	<a href="interactive-digital-signage-products.php" class="hvr-shutter-in-vertical">
			   			Products
		            </a>
		   	    </figure>
		   	</nav>		
	   	    <article  class="animated bounceIn slowest delay-750">
	   	    	<cms:show index_text />
	   	    </article>	

	   	    <!-- CAROUSEL -->

	   	    <div  class="carousel animated fadeIn delay-1000">
			  	<cms:pages masterpage="carousel.php" >
				      <img src="<cms:show gg_image />" title="<cms:show k_page_title />" />
				</cms:pages>
			</div>
		</section>
	   </section>
</div>
	<?php COUCH::invoke(); ?>
	   <?php include 'includes/footer.php';?>

		   <!-- JS -->

  


  <script type="text/javascript">
    $(document).ready(function(){
      $('.carousel').slick({
      		nextArrow: '<div class="carousel-control icon-next"></div>',
  			prevArrow: '<div class="carousel-control icon-prev"></div>',
          dots: false,
		  infinite: true,
		  autoplay: true,
		  speed: 1000,
		  slidesToShow: 4,
		  slidesToScroll: 4,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 4,
		        slidesToScroll: 4,
		        infinite: true
		      }
		    },
		    {
		      breakpoint: 800,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
      });
    });
  </script>

	</body>
</html>

