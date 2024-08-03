<?php

/*$page_image_url = $this->Html->url('/images/pages/'.$page_image);
$page_image = "images/noimage.png";
$page_image = ($page_image != '')?$page_image_url:$page_image;-->*/

?>
<section>
<div class="w-100  pb-30 dark-layer3 position-relative">
<div class="fixed-bg" style="background-image: url(images/pagetop-bg.jpg);"></div>
<div class="container">
<div class="page-top-wrap w-100">
<h1 class="mb-0"><?php echo $page_name;?></h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo $this>webroot;?>" title="">Home</a></li>
<li class="breadcrumb-item active"><?php echo $page_name;?></li>
</ol>
</div><!-- Page Top Wrap -->
</div>
</div>
</section>
<section>
<div class="w-100 pt-100 pb-100 position-relative">
<div class="container">
<div class="about-wrap w-100">
<div class="row justify-content-center">
<div class="col-md-12 col-sm-12 col-lg-10">
<div class="about-content-wrap w-100">
<div class="row">
<div class="col-md-12 col-sm-12 col-lg-4">
<div class="sec-title title-with-shape w-100">
<div class="sec-title-inner d-inline-block">
<img src="<?php echo $page_image;?>" alt="">
</div><!-- Sec Title -->
</div>
</div>
<div class="col-md-12 col-sm-12 col-lg-12">
<div class="about-desc w-100">
<?php echo $page_description;?>
</div>
</div>
</div><!-- Services Wrap -->
</div>
</div>
</div>
</div>
</div>
</div><!-- About Wrap -->
</div>
</div>
</section>



<?php /*
<div class="section_banner">
<img src="images/banner1.jpg">
<div class="page_heading">
<div class="container">
<h1><?php echo $page_name;?></h1>
</div>
</div>
</div>
<div class="section_breadcrumbs">
<div class="container">
<ul>
<li><a href="<?php echo $this->webroot;?>">Home</a></li>
<li><?php echo $page_name;?></li>
</ul>
</div>
</div> 


<div class="section_catgeory">
<div class="container">
<div class="row">
<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
<div class="minibar" id="topenquiry">
<h2>Quick Contact</h2>
<div id="succmessege"></div>
<form method="post" action="enquiry.html">
<div class="form-group">
<input class="form-control" type="name" name="name" placeholder="Full Name *" required="">
</div>


<div class="form-group">
<input class="form-control" type="email" name="email" placeholder="Email ID *" required="">
</div>


<div class="form-group">
<input class="form-control" type="text" name="phone" placeholder="Phone No *" required="">
</div>

<div class="form-group">
<input class="form-control" type="text" name="address" placeholder="Address">
</div>


<div class="form-group">
<textarea class="form-control" name="message" placeholder="Message"></textarea>
</div>

<button class="submit_button_1" type="submit">Submit</button>
</form>
</div>

<div class="minibar">
<h2>Our Products</h2>
<ul>
<?php foreach($products as $product_item) : ?>
<li> 
<a href="<?php echo $subdomainurl;?><?php echo $product_item['Product']['slug'];?>.html" title="<?php echo $product_item['Product']['name'];?>"><?php echo $product_item['Product']['name'];?></a>
</li>
<?php endforeach;?>
</ul>
</div>


</div>
<div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="categoriesdetails">
<h2 class="h1_title"><?php echo $page_name;?></h2>
<div class="right_img">
<div class="catimage">
<img src="<?php echo $page_image;?>" alt="">
</div>
</div>
<?php echo $page_description;?>

</div>


</div>
</div>

</div>
</div>


*/ ?>

<script>
$(function() {   		 
$("#topenquiry form").on('submit', function(event) {

var $form = $(this);		
$.ajax({
type: $form.attr('method'),
url: $form.attr('action'),
data: $form.serialize(),
success: function() {

$('#succmessege').html('Thank you for enquiry.');
$('#succmessege').addClass(' alert alert-info');

$("#succmessege").show();

$('#topenquiry form')[0].reset();		 

}
});
event.preventDefault();		 
});
});
</script>

