<?php require_once( 'cms/cms.php' ); ?>	

<cms:template title="hardware_page"  >
	<cms:editable name="seotitleproducts" desc="SEO title products page" type="text" />
	<cms:editable name="seodescriptionproducts" desc="SEO description products page" type="text" />
	<cms:editable name='video' label='Background video file' desc='Upload the mp4 file here' type='file' />
</cms:template>

<!doctype html>
<html>
	<head>
	  <title><cms:show seotitleproducts /></title>
	  <meta name="description" content="<cms:show seodescriptionproducts />">
	  <cms:embed "header2.php" />
	  <cms:embed "header.php" />

<div class="hardware contact" id="Container"> 	

	 <section class="content animate sorting animatedParent">
		<div class="pagination desktop"> 
		        <a class="filter active" data-filter="all">All</a> <span class="nav">-</span>
		        <a class="filter" data-filter=".touchscreens">Touchscreens &amp; Kiosks</a><span class="nav">-</span>
		        <a class="filter" data-filter=".nontouch">Non-touch displays</a><span class="nav">-</span>
		        <a class="filter" data-filter=".mounts">Mounts</a><span class="nav">-</span>
		        <a class="filter" data-filter=".clearance">Clearance</a><span class="nav">-</span>

		        <select id="SortSelect">	
			    	<option value="price:asc" selected data-sort="price:asc" class="sort" >Price (low to high)</option>
			    	<option value="price:desc"  data-sort="price:desc"   class="sort" >Price (high to low)</option>
			    	<option value="screen:asc"  data-sort="screen:asc" class="sort" >Screen size (small to big)</option>
			    	<option value="screen:desc"  data-sort="screen:asc" class="sort" >Screen size  (big to small)</option>
			    </select>
			    <div class="alert">Message Sent! </div>
	      </div>

	       <div class="pagination mobile"> 
		       <select id="FilterSelect">	
			        <option class="active sort" value="all">All</option> <span class="nav">-</span>
			        <option class="sort" value=".touchscreens">Touchscreens &amp; Kiosks</option><span class="nav">-</span>
			        <option class="sort" value=".nontouch">Non-touch displays</option><span class="nav">-</span>
			        <option class="sort" value=".mounts">Mounts</option><span class="nav">-</span>
			        <option class="sort" value=".clearance">Clearance</option><span class="nav">-</span>
				</select>
		        <select id="SortSelect2">	
			    	<option value="price:asc" selected data-sort="price:asc" class="sort" >Price (low to high)</option>
			    	<option value="price:desc"  data-sort="price:desc"   class="sort" >Price (high to low)</option>
			    	<option value="screen:asc"  data-sort="screen:asc" class="sort" >Screen size (small to big)</option>
			    	<option value="screen:desc"  data-sort="screen:dec" class="sort" >Screen size  (big to small)</option>
			    </select>
			    <div class="alert">Message Sent! </div>
	      </div>
			 <div class="tab-content container animatedParent">	
			 	<section class="animated fadeOut  delay-550">
			 		<img src="img/loading.gif" class="loading" />
			 	</section>
	  			<div class="tab-pane active"  id="accordion">		
					<cms:pages masterpage="hardware-main.php" > 
					 	<nav class="paginators">
							<cms:paginator />
						</nav>
						<section class="animated fadeIn delay-550 block-hardware mix <cms:show category_id />" data-price="<cms:show hardwareprice />" data-screen="<cms:show screensize />" >
							  	 <img src="<cms:show hardware_image />" />
						  		 <article>
						  		 	<h2> <cms:show hardware_title /> </h2>
						  		 	<p>
						  		 		<cms:show hardware_desc />
						  		 	</p>
						    
								<div class="accordion" id="acc_<cms:show hardware_id />">
								      <a class="accordion-toggle collapse-link morebtn" data-toggle="collapse" data-target="#<cms:show hardware_id />" >
								         <cms:show hardwareviewmore />
								      </a>
								       <a class="accordion-toggle collapse-link morebtn" data-toggle="collapse" data-target="#<cms:show gallery_id />" >
								            Gallery
								      </a> 
								      <a class="accordion-toggle collapse-link " data-toggle="collapse" data-target="#<cms:show contact />">
								          	Contact us
								      </a>	
								      <p class="price"> 
									 	<span class="pounds">£<cms:number_format  decimal_precision='0' hardwareprice /></span>
								 	 	<span>+VAT</span>
								 	</p>	
								</div>	
									 
								</article>	
								<div id="<cms:show hardware_id />" class="accordion-body collapse spec">
							      <div class="accordion-inner">
							          <div class="col-md-5 one">
							          	 <cms:show hardwarespecification />
							          </div>
							          <div class="col-md-4">
							          	 <ul>
							          	 	<cms:show hardwarespecification2 />
							          	 </ul>	
							          </div>
							          <div class="col-md-3">
							          	 	<a class="download" href="<cms:show my_document />" target="_blank" >Download specifications</a>
					          		  </div>		
							      </div>
							    </div>

					    <div id="<cms:show contact />" class="accordion-body collapse contact">
					      <div class="accordion-inner">	
								  <form class="formSend" action="" method="post">
									<input type="hidden" name="hardware" value="<cms:show hardware_title />">
									  <div class="col-md-12">   
									 		<div class="group col-md-5">      
										      <input type="text" required name="name"  />
										      <span class="highlight"></span>
										      <span class="bar"></span>
										      <label>Name *</label> 
										    </div>
										    
										    <div class="group col-md-6 pull-right">      
										      <input type="text" required name="organisation" />
										      <span class="highlight"></span>
										      <span class="bar"></span>
										      <label>Organisation *</label>
										    </div> 
									    </div>
									    <div class="col-md-12">
										    <div class="group col-md-5">      
										      <input type="email" name="email" required>
										      <span class="highlight"></span>
										      <span class="bar"></span>
										      <label>Email *</label>										     
										    </div>
										    <div class="group col-md-6 pull-right">      
										      <input type="text" required name="telephone" />
										      <span class="highlight"></span>
										      <span class="bar"></span>
										      <label>Telephone *</label>
										    </div>
										</div>    
									    <div class="group col-md-12 message">  
										      <textarea name="message" required></textarea>
										      <span class="highlight"></span>
										      <span class="bar"></span>
										      <label>Message *</label>
									    </div>
									   	<div class="group col-md-12"> 
									   		<button name="submit" type="submit" class="submitForm"  / > Send Email </button>
									    </div>					
								</form>			
					      </div>
					    </div>	

					    <div id="<cms:show gallery_id />" class="accordion-body collapse">
						    <cms:show_repeatable 'my_multiple_images'>
							    <a href="<cms:show full_image />"  data-toggle="lightbox" data-gallery="<cms:show gallery_id />"  data-type="image">
								      <img src="<cms:show thumb_image />" title="<cms:show k_page_title />"  class="img-fluid"/>
								</a>
							</cms:show_repeatable>
						</div>   
				  	 </section>
				</cms:pages>								
			</div>
	 </section>				
</div>			
<?php COUCH::invoke(); ?>
	  <?php include 'includes/footer.php';?>
	  <script>
			$( document ).ready(function() {	

				setTimeout(function(){
				  $('.loading').hide();
				}, 2600);

				setTimeout(function(){
				  $('.mix').removeClass('fadeIn');
				}, 3000);

				var i=0;
				$('.formSend').each(function(){
				    i++;
				    var newID='form'+i;
				    $(this).attr('id',newID);
				    $(this).val(i);
				});

				$(function(){
				  // Instantiate MixItUp:
				  $('#Container').mixItUp('sort', 'price:asc');
				   load: {
				        sort: 'price:asc' /* default:asc */
				        sort: 'default:asc' /* default:asc */
				    }
				});

				//  contact us form in hardware
				  var form = $('.formSend'); // contact form
				  var submit = $('.submitForm');  // submit button
				  var alert = $('.alert'); // alert div for show alert message


				  // form submit event
				  form.on('submit', function(e) {
				  	var myform = $(this).closest("form"); //parent form, this make each form individual
				      e.preventDefault(); // prevent default form submit
				      // sending ajax request through jQuery
				      $.ajax({
				        url: '', // form action url
				        type: 'POST', // form submit method get/post
				        dataType: 'html', // request type html/json/xml
				        data: myform.serialize(), // serialize form data 
				        beforeSend: function() {
				          alert.fadeOut();
				          submit.html('Sending....'); // change submit button text
				        },
				        success: function(data) {
				          //alert.fadeIn(); // fade in response data
				           alert.show().delay(5000).queue(function(n) {
							  $(this).hide(); n();
							});
				        //  alert.fadeIn();
				          form.trigger('reset'); // reset form
				          submit.html('Send Email'); // reset submit button text
				        },
				        error: function(e) {
				          console.log(e)
				        }
				      });
				  });

			});
		  $('.accordion-body a').delegate('*[data-toggle="lightbox"]', 'click', function (event){
			    event.preventDefault();
			    $(this).ekkoLightbox();
			});
	</script>
    </body>
</html>
