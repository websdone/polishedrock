<?php require_once( 'cms/cms.php' ); ?>	

<cms:template title="contact_page"  >
	<cms:editable name="seotitle" desc="SEO title contact page" type="text" />
	<cms:editable name="seodescription" desc="SEO description contact page" type="text" />
	<cms:editable name="main_title" desc="Main title" type="text" />
	<cms:editable name='video' label='Background video file' desc='Upload the mp4 file here' type='file' />
</cms:template>

<!doctype html>
<html>
	<head>
	  <title><cms:show seotitle /></title>
	  <meta name="description" content="<cms:show seodescription />">
	  <cms:embed "header2.php" />
	  <cms:embed "header.php" />

	<div class="contact animate animatedParent"> 	  
	
		<div class="google-maps">
		   <img src="img/map.png" class="map desktop" /> 
		    <img src="img/map-mobile.png" class="map mobile" /> 
		</div>   
		<div class="fullscreen-bg">
		    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
		        <source src="<cms:show video />" type="video/mp4">
		    </video>
		</div>
	   <section class="content animate form">
	   <div id="formcouch">
	   		<cms:form method="post" id="contact_form"  enctype="multipart/form-data" >
			   <cms:if k_success >
				   <!-- Modal -->
					<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					        	<span aria-hidden="true">&times;</span></button>
						        
					      </div>
					      <div class="modal-body">
					      		<h3>Thanks for your interest. We'll get back to you shortly.</h3>
						        <h4 class="modal-title" id="myModalLabel">Form successfully submitted</h4>
						        <cms:each k_success sep='\n'>
						            <cms:show item /><br>
						        </cms:each>
					      </div>
					    </div>
					  </div>
					</div>

		               <!--Send email -->     
		            <cms:send_mail from=k_email_from to=k_email_to subject='PolishedRock Ltd. contact form'>
						<cms:each k_success sep='\n'>
				            <cms:show item /><br>
				        </cms:each>
					</cms:send_mail>
			    </cms:if>
				<h1 class="animated bounceInDown  go"> Contact us</h1>
			
			    <div class="group col-md-5  animated bounceIn delay-500">      
			      <cms:input type="text"  name="name"  minlength="2" name="name" required="1" />
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Name *</label>
			       <cms:if k_error_name>   
		                <p style="display:block" class="alert alert-danger">Please enter a valid name.</p>
		            </cms:if>  
			    </div>
			    
			    <div class="group col-md-6 pull-right  animated bounceIn delay-750">      
			      <cms:input type="text" required name="organization" />
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Organisation *</label>
			      <!-- <cms:if k_error_subject>   
		                <p style="display:block" class="alert alert-danger">Please enter a valid organization/company.</p>
		          </cms:if> -->
			    </div>
			    <div class="col-md-12">
				    <div class="group col-md-5 email pull-left animated bounceIn delay-1000">      
				      <cms:input type="text"  name="email" required="1" validator="email" required />
				      <span class="highlight"></span>
				      <span class="bar"></span>
				      <label>Email *</label>
				      <cms:if k_error_email>   
			                <p style="display:block" class="alert alert-danger">Please enter a valid email.</p>
			            </cms:if>  
				    </div>
				    <div class="group  col-md-6 pull-right animated bounceIn delay-1000">      
				      <cms:input type="text" required validator='alpha_num | min_len=6 | max_len=14' name="telephone" required="1"/>
				      <span class="highlight"></span>
				      <span class="bar"></span>
				      <label>Telephone *</label>
				      <cms:if k_error_telephone>   
			                <p style="display:block" class="alert alert-danger">Please enter a telephone.</p>
			            </cms:if> 
				    </div>
				</div>    
			    <div class="group col-md-12 message  animated bounceIn delay-1250">  
				      <cms:input type='textarea' wrap="physical" minlength="2" name="comments"  required="1"> </cms:input> 
				      <span class="highlight"></span>
				      <span class="bar"></span>
				      <label>Message *</label>
				      <cms:if k_error_comments>   
			                <p style="display:block" class="alert alert-danger">Please enter a message.</p>
			          </cms:if>
			    </div>
			   	<div class="group col-md-12 animated bounceIn delay-1750"> 
			    	<input type="submit" value="Send Message" class="collapse-link" data-toggle="modal" data-target="#myModal" />
			    </div>
			    <img src="img/contact.gif" class="contactImg submit" >

		  </cms:form>
</div>
		  
	   </section>
	  </div> 
	  <?php COUCH::invoke(); ?>
   		<?php include 'includes/footer.php';?>
 
    </body>
</html>
