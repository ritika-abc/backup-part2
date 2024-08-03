<?php /*?>
  <section>
            	<div class="w-100 position-relative">
            		<div class="container">
            			<div class="getin-touch-wrap overlap-99 brd-rd5 style2 thm-layer opc8 w-100 overflow-hidden position-relative">
            				<div class="fixed-bg" style="background-image: url(images/parallax2.jpg);"></div>
            				<div class="row align-items-center justify-content-between">
							
							<div class="col-md-12 col-sm-12 col-lg-12">
            						<div class="getin-touch-title w-100">
            							<span class="text-color1 d-block">Ready to get started?</span>
            							<h2 class="mb-0">Our Business Network</h2>
            						
							 <marquee behavior="alternate" onMouseOver="this.stop()" onMouseOut="this.start()">
 
							 <?php foreach($locations as $location_item) : ?>
 
<a class="thm-btn thm-bg" href="<?php echo $location_item['Location']['slug'];?>/"><?php echo $location_item['Location']['name'];?></a>

<?php endforeach;?>
 </marquee>
</div>*/ ?>
            					</div>
            					
<?php /*
            					<div class="col-md-7 col-sm-12 col-lg-5">
            						<div class="getin-touch-title w-100">
            							<span class="text-color1 d-block">Ready to get started?</span>
            							<h2 class="mb-0">Get in touch, or create an account</h2>
            						</div>
            					</div>
            					<div class="col-md-5 col-sm-12 col-lg-4">
            						<div class="getin-touch-btn text-right">
            							<a class="thm-btn bg-color1" href="contact-us.html" title="">Contact Us<i class="flaticon-arrow-pointing-to-right"></i></a>
            						</div>
            					</div>
								*/ ?>
            				</div>
            			</div>
            		</div>
            	</div>
            </section>
          
<footer>
<div class="w-100 bg-color5 pt-195 pb-10 position-relative">
<div class="" id="prtcl3"></div>
<div class="container">
<div class="footer-data w-100">
<div class="row">
<div class="col-md-6 col-sm-6 col-lg-3">
<div class="widget w-100">
<div class="logo w-100">
<h1 class="mb-0">
    <div class="widget w-100">
<h3>About us</h3>							
	  
</a></h1>
</div><!-- Logo -->
<p class="mb-0"><?php echo $footer_text;?></p>
<div class="social-links2 d-inline-block">
<a href="<?php echo $facebook_url;?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
<a href="<?php echo $twitter_url;?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
<a href="<?php echo $linkedin_url;?>" title="linkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
<a href="<?php echo $youtube_url;?>" title="youtube" target="_blank"><i class="fab fa-youtube"></i></a>
<a href="<?php echo $instagram_url;?>" title="instagram" target="_blank"><i class="fab fa-instagram"></i></a>

</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-3 order-lg-1">
<div class="widget w-100 ">
    <h3 class="l-ft">QUICK CONNECT</h3>
<div class="visitor-stats w-100">
<div class="visitor-stat-box w-100">
    <h5 class="mb-0">Phone</h5>
<h4 class="mb-0 text-color4 xcounter"><?php echo $company_phone;?>, +91 9830582928, +91 3335654148</h4>

</div>
<div class="visitor-stat-box w-100">
    <h5 class="mb-0">Email</h5>
<h4 class="mb-0 text-color4 xcounter"><?php echo $company_email;?>, info@achtglobal.com</h4>

</div>
<div class="visitor-stat-box w-100">
    <h5 class="mb-0">Address</h5>
<h4 class="mb-0 text-color4 xcounter"><?php echo $company_address;?></h4>

</div>
</div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-lg-6">
<div class="row">

<div class="col-md-6 col-sm-6 col-lg-6">
<div class="widget w-100">
<h3 class="l-ft">Our Products</h3>
<ul class="mb-0 list-unstyled w-100">
<?php $pf = 0; foreach($products as $product_fitem) : $pf++; if($pf > 6) { break; } ?>
<li><a href="<?php echo $subdomainurl;?><?php echo $product_fitem['Product']['slug'];?>.html" title="<?php echo $product_fitem['Product']['name'];?>"><?php echo $product_fitem['Product']['name'];?></a></li>
<?php endforeach;?>    
</ul>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-6">
<div class="widget w-100">
<h3 class="l-ft">Quick Links</h3>
<ul class="mb-0 list-unstyled w-100">
<li> <a href="<?php echo $this->webroot;?>" title="<?php echo $company_name;?>">Home</a></li>
<li><a href="company-profile.html" title="Company Profile">Company Profile</a> </li>
<li><a href="our-products.html" title="Our Products">Our Products</a></li>
<li> <a href="our-presence.html" title="Business Network">Business Network</a></li>
<li> <a href="sitemap.html" title="Sitemap">Sitemap</a></li>
<li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>    
</footer>

<div class="copyright w-100 text-center bg-color6 position-relative">
<div class="container">
<p class="mb-0" style="color: #ffffff;">© Copyright <?php echo date('Y');?> <?php echo $company_name;?>All Rights Reserved. Website Designed & Promoted by Web2Export</p> <a href="http://web2export.com/" title=""><img class="img-fluid" src="images/logo-web2export.jpg"></a>
</div>
</div>

<div class="back-to-top-cover">
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>
</div>
</main>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/perfect-scrollbar.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/particle-int.js"></script>
<!-- font 6 -->
		<script src="https://kit.fontawesome.com/50d5e6a1ea.js" crossorigin="anonymous"></script>
<script src="js/custom-scripts.js"></script>


</body>	
</html>