<?php ?>
<section>
<div class="w-100 pt-100 pb-30 dark-layer3 opc7 position-relative">
<div class="fixed-bg" style="background-image: url(images/pagetop-bg.jpg);"></div>
<div class="container">
<div class="page-top-wrap w-100">
<h1 class="mb-0">Our Products</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo $this->webroot;?>" title="">Home</a></li>
<li class="breadcrumb-item active">Our Products</li>
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
<?php 

foreach($products as $product_item) :
$product_image_url2 = $this->Html->url('/images/products/'.$product_item['Product']['image']);
$product_image2 = "images/noimage.png";
$product_image2 = ($product_item['Product']['image'] != '')?$product_image_url2:$product_image2;

?>
<div class="col-md-4 col-sm-6 col-lg-3">
<div class="proj-box position-relative w-100">
<div class="proj-thumb overflow-hidden w-100"><a href="<?php echo $subdomainurl;?><?php echo $product_item['Product']['slug'];?>.html" title="<?php echo $product_item['Product']['name'];?>"><img class="img-fluid w-100" src="<?php echo$product_image2;?>"  title="<?php echo $product_name;?>" alt="<?php echo $product_name;?>"></a></div>
<div class="proj-info position-absolute">
<i class="flaticon-helmet"></i>
<h3 class="mb-0"><a href="<?php echo $subdomainurl;?><?php echo $product_item['Product']['slug'];?>.html" title="<?php echo $product_item['Product']['name'];?>"><?php echo $product_item['Product']['name'];?></a></h3>
</div>
</div>
</div>								 
<?php endforeach;?>  

</div>
</div>                        
</div>
</div>
</section>