<?php require_once( 'cms/cms.php' ); ?>	
<cms:embed "header.html" />

<cms:template title="hardware_page"  >
	<cms:editable name='video' label='Background video file' desc='Upload the mp4 file here' type='file' />
</cms:template>

<div class="hardware contact" id="Container"> 	
	 <section class="content animate sorting">
		   	<div class="fullscreen-bg">
			    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video" width="100%" height="100%">
			        <source src="<cms:show video />" type="video/mp4">
			    </video>
			</div>	
			<div class="pagination"> 
			        <a class="filter active" data-filter="all"> All </a> <span class="nav"> - </span>
			        <a class="filter" data-filter=".touchscreens"> Touchscreens &amp; Kiosks </a><span class="nav"> - </span>
			        <a class="filter" data-filter=".nontouch"> Non-touch displays </a><span class="nav"> - </span>
			        <a class="filter" data-filter=".mounts"> Mounts </a><span class="nav"> - </span>
			        <a class="filter" data-filter=".clearance"> Clearance </a><span class="nav"> - </span>
			        <select id="SortSelect">	
				    	<option value="price:asc" class="sort" >Price (low to high)</option>
				    	<option value="price:desc"  class="sort" >Price (high to low)</option>
				    	<option value="screen:asc" class="sort" >Screen size (small to big)</option>
				    	<option value="screen:desc" class="sort" >Screen size  (big to small)</option>
				    </select>

			      <!--   <a type="button" class="sort" data-sort="price:asc">Price (low to high)</a><span class="nav"> - </span>
				    <a type="button" class="sort" data-sort="price:desc">Price (high to low)</a><span class="nav"> - </span> 
				    <a type="button" class="sort" data-sort="screen:asc">Screen size (small to big)</a><span class="nav"> - </span>
				    <a type="button" class="sort" data-sort="screen:desc">Screen size  (big to small)</a>-->
		      </div>
			 <div class="tab-content container">	
			 <cms:show hardware_title /> 
	  			<div class="tab-pane active" >		
					<cms:pages masterpage="hardware-main.php" > 
					 	<nav class="paginators">
							<cms:paginator />
						</nav>
						<section class="block-hardware mix <cms:show category_id />" data-price="<cms:show hardwareprice />" data-screen="<cms:show screensize />" >
							  	 <img src="<cms:show hardware_image />" />
						  		 <article>
						  		 	<h2> <cms:show hardware_title /> </h2>
						  		 	<p>
						  		 		<cms:show hardware_desc />
						  		 	</p>
						    
									<div class="accordion" id="acc_<cms:show hardware_id />">
									      <a class="accordion-toggle collapse-link morebtn" data-toggle="collapse" data-parent="#<cms:show hardware_id />" href="#<cms:show hardware_id />">
									         <cms:show hardwareviewmore />
									      </a>
									       <a class="accordion-toggle collapse-link morebtn" data-toggle="collapse" data-parent="#<cms:show gallery_id />" href="#<cms:show gallery_id />">
									            Gallery
									      </a> 
									      <a class="accordion-toggle collapse-link "  class="collapse-link" data-toggle="modal" data-target="#myModal" data-target="#<cms:show contact />">
									          	Contact us
									      </a>	


									      <p class="price"> 
										 	<span class="pounds">£<cms:number_format  decimal_precision='0' hardwareprice /></span>
									 	 	<span>+VAT</span>
									 	</p>	
									</div>	
									 
								</article>	
								<div id="<cms:show hardware_id />" class="accordion-body collapse">
							      <div class="accordion-inner">
							          <div class="col-md-5">
							          	 <cms:show hardwarespecification />
							          </div>
							          <div class="col-md-4">
							          	 <ul>
							          	 	<cms:show hardwarespecification2 />
							          	 </ul>	
							          </div>
							          <div class="col-md-3">
							          	 	<a class="download" href="<cms:show my_document />" target="_blank" >Download specifications</a>
					          	 	<!-- <cms:show hardwarebuynow />  -->
							        		
							          </div>		
							      </div>
							    </div>
						

					 


					    <div id="<cms:show gallery_id />" class="accordion-body collapse">
						    <cms:show_repeatable 'my_multiple_images'>
							    <a href="<cms:show full_image />"  data-toggle="lightbox" data-gallery="<cms:show gallery_id />">
								      <img src="<cms:show thumb_image />" title="<cms:show k_page_title />"  class="img-fluid"/>
								</a>
							</cms:show_repeatable>
						</div>   
				  	 </section>
				</cms:pages>
								
			</div>
	 </section>	

	   <!--  <div id="<cms:show contact />" class="accordion-body collapse"> -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					 <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					        	<span aria-hidden="true">&times;</span></button>
						    
							 </div>
					      <div class="modal-body">
						        <cms:form method="post" id="contact_form"  enctype="multipart/form-data">
								   <cms:if k_success >
									   <!-- Modal -->
										<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										        	<span aria-hidden="true">&times;</span></button>
											        <h3>Thanks for your interest. We'll get back to you shortly.</h3>
											        <h4 class="modal-title" id="myModalLabel">Form successfully submitted</h4>
										      </div>
										      <div class="modal-body">
											        <cms:each k_success sep='\n'>
											            <cms:show item /><br>
											            <cms:show hardware_title />
											            <cms:show hardware_id />
											        </cms:each>
										      </div>
										    </div>
										  </div>
										

							               <!--Send email -->     
							            <cms:send_mail from=k_email_from to=k_email_to subject='Feedback from your site'>
											<cms:each k_success sep='\n'>
									            <cms:show item /><br>
									        </cms:each>
										</cms:send_mail>
								    </cms:if>
			
								
								    <div class="group col-md-5">      
								      <cms:input type="text" required  name="name"  minlength="2" name="name" required="1" />
								      <span class="highlight"></span>
								      <span class="bar"></span>
								      <label>Name *</label>
								       <cms:if k_error_name>   
							                <p style="display:block" class="alert alert-danger">Please enter a valid name.</p>
							            </cms:if>  
								    </div>
								    
								    <div class="group col-md-6 pull-right">      
								      <cms:input type="text" required  name="organization" />
								      <span class="highlight"></span>
								      <span class="bar"></span>
								      <label>Organization</label>
								      <!-- <cms:if k_error_subject>   
							                <p style="display:block" class="alert alert-danger">Please enter a valid organization/company.</p>
							          </cms:if> -->
								    </div>
								    <div class="col-md-12">
									    <div class="group col-md-5 email pull-left">      
									      <cms:input type="text" required  name="email" required="1" validator="email" />
									      <span class="highlight"></span>
									      <span class="bar"></span>
									      <label>Email *</label>
									      <cms:if k_error_email>   
								                <p style="display:block" class="alert alert-danger">Please enter a valid email.</p>
								            </cms:if>  
									    </div>
									    <div class="group  col-md-6 pull-right">      
										      <cms:input type="text" name="telephone" />
										      <span class="highlight"></span>
										      <span class="bar"></span>
										      <label>Telephone</label>
										</div>
									</div>    
								    <div class="group col-md-12 message">  
									      <cms:input type='textarea' wrap="physical"   minlength="2" name="comments"  required="1"> </cms:input> 
									      <span class="highlight"></span>
									      <span class="bar"></span>
									      <label>Message *</label>
									      <cms:if k_error_comments>   
								                <p style="display:block" class="alert alert-danger">Please enter a message.</p>
								          </cms:if>
								    </div>
								   	<div class="group col-md-12"> 
								    	<input type="submit" value="Send Message" class="send" />
								    </div>
							  </cms:form>
					    </div>
					  </div>
					</div>
					 			
</div>			
<?php COUCH::invoke(); ?>
	  <?php include 'includes/footer.php';?>
	  <script>
			$( document ).ready(function() {	
				$(function(){
				  // Instantiate MixItUp:
				  $('#Container').mixItUp();
				});
			});
		  $('.accordion-body a').delegate('*[data-toggle="lightbox"]', 'click', function (event){
			    event.preventDefault();
			    $(this).ekkoLightbox();
			});
	</script>
    </body>
</html>
