<?php echo $map['js'];?>    
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">    		
                <div class="col-sm-12">    			   			
                    <h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
                    <div id="gmap" class="contact-map">
                        <?php echo $map['html'];?>
                    </div>
                </div>			 		
        </div>    

        <div class="row">  	
                <div class="col-sm-8">
                        <div class="contact-form">
                                <h2 class="title text-center">Get In Touch</h2>
                                <div class="status alert alert-success" style="display: none"></div>
                                <!--/      /-->
                                <form action="<?= base_url();?>Send_mail/send/" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                                        <div class="form-group has-feedback col-md-6">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name"/>
                                            <span class="glyphicon form-control-feedback" id="name1"></span>
                                        </div>    
                                    <div class="form-group col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="Email"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message Here"/></textarea>
                                    </div>                        
                                    <div class="form-group col-md-12">
                                        <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                                    </div>
                                </form>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="contact-info">
                                <h2 class="title text-center">Contact Info</h2>
                                <address>
                                    <p>E-RESTAURANT Inc.</p>
                                    <p>Sofia Bulgaria</p>
                                    <p>Mobile: +359 878 *** ***</p>
                                    <p>Email: svetli.mvl@gmail.com</p>
                                </address>
                                <div class="social-networks">
                                </div>
                        </div>
                </div>    			
        </div>  
    </div>	
</div><!--/#contact-page-->
