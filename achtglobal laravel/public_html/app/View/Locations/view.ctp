<?php echo $this->element('slider'); ?>
<?php
$page_image_url = $this->Html->url('/images/pages/'.$page_image);
$page_image = "images/noimage.png";
$page_image = ($page_image != '')?$page_image_url:$page_image;
?>
<!-- <section>
<div class="w-100 pt-100 pb-100 position-relative">
<div class="container">
<div class="about-wrap w-100"> 
<div class="row align-items-center">

<div class="col-md-4 col-sm-12 col-lg-4">
<div class="about-image position-relative w-100">
<img class="img-fluid w-100" src="<?php echo $page_image;?>" alt="<?php echo $page_title;?>" title="<?php echo $page_title;?>">
</div>
</div>
<div class="col-md-8 col-sm-12 col-lg-8">

<div class="about-desc w-100">
<h2 class="mb-0"><?php echo $page_title;?></h2>
<p class="mb-0"><?php echo $page_description;?>
</p>
</div>
</div>
</div>
</div>



<div class="about-wrap w-100"> 
<div class="row align-items-center">
<div class="col-md-12 col-sm-12 col-lg-12">
<div class="serv-wrap w-100">
<div class="row">



</div><!-- Services Wrap -->
</div> 
</div>
</div><!-- About Wrap -->
</div>
</div>
</section>






<?php //echo $this->element('homeblog'); ?>

<?php echo $this->element('homeproducts1'); ?>
<?php //echo $this->element('hometestimonial'); ?>



<?php echo $this->element('homefaq'); ?>
