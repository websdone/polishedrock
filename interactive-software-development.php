<?php require_once( 'cms/cms.php' ); ?> 
  
<cms:template title="Software page">
    <cms:editable name="seotitlesoftware" desc="SEO title software page" type="text" />
    <cms:editable name="seodescriptionsoftware" desc="SEO description software page" type="text" />
    <cms:editable name="software_heading" desc="Software title" type="text"  />
    <cms:editable name="software_text" type="richtext" desc="Main left image" toolbar='full' />
    <cms:editable name='video' label='Background video file' desc='Upload the mp4 file here' type='file' />
</cms:template>

<!doctype html>
<html>
  <head>
    <title><cms:show seotitlesoftware /></title>
    <meta name="description" content="<cms:show seodescriptionsoftware />">
    <cms:embed "header2.php" />
    <cms:embed "header.php" />

<div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="<cms:show video />" type="video/mp4">
    </video>
</div>
<div class="bg-dots-software">
  <section class="software content animatedParent ">   
      <h2 class='animated bounceInDown '>
          <cms:show software_heading />
      </h2>

      <article class="animated bounceIn slowest intro delay-500">
           <cms:show software_text />          
      </article>

      <figure class="projects animatedParent ">      
        <cms:pages masterpage="homeIMG.php" >
              <div class="animated bounceIn slowest hovereffect delay-500">
                    <img src="<cms:show gg_image />" title="<cms:show k_page_title />" class="img-responsive" />
                    <div class="overlay">
                     <p class="info" href="#"><cms:show k_page_title /></p>
                  </div>  
              </div>
          </cms:pages>
      </figure>
  </section>
</div>       
    <?php include 'includes/footer.php';?>
    <?php COUCH::invoke(); ?>