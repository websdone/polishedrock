<?php require_once( 'cms/cms.php' ); ?>	
<cms:embed "header.html" />
	<cms:template title='Gallery' clonable='1' dynamic_folders='1' gallery='1'>

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

	 <a href="<cms:show gg_image />">
					      <img src="<cms:show gg_thumb />" title="<cms:show k_page_title />" />
					   </a>
<?php COUCH::invoke(); ?>
	  <?php include 'includes/footer.php';?>
	  

	    <!-- JS -->
	    <script src="js/jquery.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/script.js" ></script>
	</body>
</html>