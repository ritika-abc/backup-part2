<?php ?>
<section>
<div class="w-100 pt-100 pb-30 dark-layer3 opc7 position-relative">
<div class="fixed-bg" style="background-image: url(images/pagetop-bg.jpg);"></div>
<div class="container">
<div class="page-top-wrap w-100">
<h1 class="mb-0">Sitemap</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo $this->webroot;?>" title="">Home</a></li>
<li class="breadcrumb-item active">Sitemap</li>
</ol>
</div>
</div>
</div>
</section>
<section>
<div class="w-100 pt-100 pb-100 position-relative">
<div class="container">
<div class="proj-wrap w-100">
<div class="row">
<div class="col-md-12 col-sm-12 col-lg-12">				
<?php echo $page_description;?>
</div>
</div>				

<div class="row">

<div class="col-md-4 col-sm-12 col-lg-4 w-100">
<a class="thm-btn thm-bg mb-20 w-100" href="<?php echo $this->webroot;?>">Home</a></div>
<div class="col-md-4 col-sm-12 col-lg-4 w-100">
<a class="thm-btn thm-bg mb-20 w-100" href="company-profile.html">About Us</a></div>
<div class="col-md-4 col-sm-12 col-lg-4 w-100">
<a class="thm-btn thm-bg mb-20 w-100" href="contact-us.html">Contact Us</a></div>

<?php 

foreach($products as $product_item) : 

?>
<div class="col-md-4 col-sm-12 col-lg-4 w-100">
<a class="thm-btn thm-bg mb-20 w-100" href="<?php echo $subdomainurl;?><?php echo $product_item['Product']['slug'];?>.html" title="<?php echo $product_item['Product']['name'];?>"><?php echo $product_item['Product']['name'];?></a>                                

</div>

<?php endforeach;?>                            				 

</div>                        
</div>
</div>
</div>
</section>
