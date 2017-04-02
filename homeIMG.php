<?php require_once( 'cms/cms.php' ); ?>	

<cms:template title='Software images'  gallery='1'>

   <cms:editable
      name="gg_image"
      label="Image"
      desc="Upload your main image here"
      width="500"
      show_preview='1'
      preview_height='200'
      type="image"
   />

</cms:template>

<?php COUCH::invoke(); ?>
