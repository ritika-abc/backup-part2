<?php

$page_image_url = $this->Html->url('/images/pages/'.$page_image);
$page_image = "images/noimage.png";
$page_image = ($page_image != '')?$page_image_url:$page_image;

?>

    <section>
                <div class="w-100 pt-100 pb-30 dark-layer3 opc7 position-relative">
                    <div class="fixed-bg" style="background-image: url(images/pagetop-bg.jpg);"></div>
                    <div class="container">
                        <div class="page-top-wrap w-100">
                            <h1 class="mb-0">Contact Us</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo $this->webroot;?>" title="Home">Home</a></li>
                                <li class="breadcrumb-item active">Contact Us</li>
                            </ol>
                        </div><!-- Page Top Wrap -->
                    </div>
                </div>
            </section>
            <section>
                <div class="w-100 pt-100 position-relative">
                    <div class="container">
                        <div class="contact-wrap position-relative w-100">
                            <div class="pt-170 pb-0 w-100"></div>
                            <div class="contact-info-wrap text-center position-absolute">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="contact-info-box w-100">
                                            <i class="thm-clr flaticon-headset"></i>
                                            <strong>Call Us</strong>
                                            <span class="d-block"><?php echo $company_phone;?>, +91 9830582928, +91 3335654148</span>
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="contact-info-box w-100">
                                            <i class="thm-clr flaticon-mail"></i>
                                            <strong>Email Us</strong>
                                            <a class="d-block" href="mailto:<?php echo $company_email;?>" title="<?php echo $company_email;?>"><?php echo $company_email;?>, info@achtglobal.com</a>
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="contact-info-box w-100">
                                            <i class="thm-clr flaticon-placeholder"></i>
                                            <strong>Company Address</strong>
                                            <p class="mb-0"><?php echo $company_address;?></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Contact Info Wrap -->
                        </div><!-- Contact Wrap -->
                    </div>
                </div>
            </section>
            <section>
                <div class="w-100 pb-100 position-relative">
                    <div class="container" id="contactfrm">                        
                        <div class="sec-title v2 text-center w-100">
                            <div class="sec-title-inner d-inline-block">
                             </div>
                        </div>
						
						<?php echo $enquiryform;?>
						<?if(empty(trim($enquiryform))) { ?>

<iframe aria-label='Contact Us' frameborder="0" style="height:520px;width:99%;border:none;" src='https://forms.zohopublic.in/noreplyenquiry0/form/ContactUs7/formperma/Y65YebofR1CaSSE9AJDPPh9X8h74Ji1XDP2der8klbw'></iframe>                
						<?php } ?>
						</div>
                </div>
            </section>
        
		
 <?php /*
 
<div class="block-form" id="contactfrm">
<div class="section_title">
<div id="csuccmessege"></div>
<div class="meta_h2">Send a Message</div>
</div>
<div class="section-content">
<p>Your email address will not be published. Required fields are marked with *</p>
<form method="post" action="enquiry.html">
<div class="row">
<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
<div class="form-group">
<input class="form-control" type="text" name="name" placeholder="Full Name *" value="" required="">
</div>
</div>
<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
<div class="form-group">
<input class="form-control" type="email" name="email" placeholder="Email ID *" value="" required="">
</div>
</div>
<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
<div class="form-group">
<input class="form-control" type="text" name="phone" placeholder="Phone No *" value="" required="">
</div>
</div>

<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
<div class="form-group">
<input class="form-control" type="text" name="address" placeholder="City" value="" >
</div>
</div>
<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="form-group">
<textarea class="form-control" name="message" placeholder="Message"></textarea>
</div>

<button class="submit_button_1" type="submit">Send Message</button>
</div>


</div>
</form>
</div>
</div>
</div>                
</div>
</div>
</div>
</div>

*/ ?>



<script>
$(function() {   		 
$("#contactfrm form").on('submit', function(event) {

var $form = $(this);		
$.ajax({
type: $form.attr('method'),
url: $form.attr('action'),
data: $form.serialize(),
success: function() {

$('#csuccmessege').html('Thank you for contact us.');
$('#csuccmessege').addClass(' alert alert-info');

$("#csuccmessege").show();

$('#contactfrm form')[0].reset();		 

}
});
event.preventDefault();		 
});
});
</script>

