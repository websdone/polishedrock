<?php require_once( 'cms/cms.php' ); ?>	

<cms:template title='Carousel images'  gallery='1'>

   <cms:editable
      name="gg_image"
      label="Image"
      desc="Upload your main image here"
      width="500"
      show_preview='1'
      preview_height='200'
      type="image"
   />

   <cms:editable
      name="gg_thumb"
      assoc_field="gg_image"
      label="Image Thumbnail"
      desc="Thumbnail of image above"
      width='115'
      height='115'
      enforce_max='1'
      type="thumbnail"
   />

</cms:template>

<?php COUCH::invoke(); ?>
