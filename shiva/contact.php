<?php include_once 'header.php'; ?>
	<div class="main">
		<div class="content-bottom">
			<div class="wrap">
				<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post" action="enquiry_email.php">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="name" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-Mail</label></span>
                                                        <span><input name="email" type="email" required class="textbox"></span>
						    </div>
                                                    <div>
						    	<span><label>Phone</label></span>
                                                        <span><input name="phone" type="text" required class="textbox"></span>
                                                        <span><input name="address" type="hidden" required value="venuscounty" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Message</label></span>
						    	<span><textarea name="message"> </textarea></span>
						    </div>
						   <div>
						   		<span><input name="cont_send" type="submit" value="Submit"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
				  <div class="company_address">
				     	<h3>Contact Builder</h3>
                                        <!-- <p>Name     :Shiva Reddy</p> -->
                                        <p>Mobile   :<span style="font-size: 20px; color: #de2e2e;">9449433684</span></p>
                                        <!-- <p>Address  :</p> -->
				   </div>
				 </div>
				 <div class="clear"></div> 
			  </div>
			  <div class="map">
				<iframe width="100%" height="180px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3891.1376083598198!2d77.645359!3d12.769574200000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae694903f72931%3A0x20dd3a5cd6d5a594!2sAashrithaa+Venus+County!5e0!3m2!1sen!2sin!4v1441117453692" frameborder="0" style="border:0" allowfullscreen></iframe>
<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3891.1376083598198!2d77.645359!3d12.769574200000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae694903f72931%3A0x20dd3a5cd6d5a594!2sAashrithaa+Venus+County!5e0!3m2!1sen!2sin!4v1441117453692" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
			  </div>
		  </div>
	 </div><?php include_once 'footer.php'; ?>