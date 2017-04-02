<?php require_once( 'cms/cms.php' ); ?>	

<cms:template title="rental"  >
	<cms:editable name="seotitlerental" desc="SEO title rental page" type="text" />
	<cms:editable name="seodescriptionrental" desc="SEO description rental page" type="text" />
	<cms:editable name="rental_text" desc="Rental description" type="richtext"  />
	<cms:editable name="rental_image1" type="image" desc="Main left image" />
	<cms:editable name="rental_image2" type="image" desc="Logo image" />
	<cms:editable name="link_rental" type="text"  desc="Main bottom link * Please add http:// "  />
	<cms:editable name="link_rental_txt" type="text"  desc="Main bottom link text"  />
	<cms:editable name='video' label='Background video file' desc='Upload the mp4 file here' type='file' />
</cms:template>

<!doctype html>
<html>
	<head>
	  <title><cms:show seotitlerental /></title>
	  <meta name="description" content="<cms:show seodescriptionrental />">
	  <cms:embed "header2.php" />
	  <cms:embed "header.php" />

<cms:menu masterpage='menu.php'/>

<div class="bg-dots">
	<div class="content animate animatedParent"> 
	   <div class="fullscreen-bg">
		    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
		        <source src="<cms:show video />" type="video/mp4">
		    </video>
	   </div>
	   <div class="rental"> 
		   	<section class="rental">
		   		<img src="<cms:show rental_image1 />" class="touchScreen animated bounceInDown" />
		   		<img src="<cms:show rental_image2 />" class="rental-img animated fadeIn slowest  delay-500" />
				
				<article  class="animated fadeIn slowest delay-1000">
					<cms:show rental_text />
						<a class="collapse-link" href="<cms:show link_rental />" target="_blank">
							<cms:show link_rental_txt />
						</a>
				</article>	
		   </section>
		</div>
	</div>
</div>
	<?php COUCH::invoke(); ?>
	<?php include 'includes/footer.php';?>	  
</body>
</html>


