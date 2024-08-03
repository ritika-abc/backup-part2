<?php

$product_name = $product_details['Product']['name'];
$product_description = $product_details['Product']['description'];
$product_image_url = $this->Html->url('/images/products/'.$product_details['Product']['image']);
$product_image = "images/noimage.png";
$product_image = ($product_details['Product']['image'] != '')?$product_image_url:$product_image;

$catalog_pdf = $this->Html->url('/images/products/'.$product_details['Product']['catalog_pdf']);



$product_description = str_replace('<table border="1">','<table border="1" class="table table-striped table-bordered">
',$product_description);


?>

     <section>
                <div class="w-100 pt-100 pb-30 dark-layer3 opc7 position-relative">
                    <div class="fixed-bg" style="background-image: url(images/pagetop-bg.jpg);"></div>
                    <div class="container">
                        <div class="page-top-wrap w-100">
                            			

                            <h1 class="mb-0"><?php echo $product_name;?></h1>
                            
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo $this->webroot;?>" title="Home">Home</a></li>
                                <li class="breadcrumb-item"><a href="our-products.html" title="Our Products">Our Products</a></li>
                                <li class="breadcrumb-item active"><?php echo $product_name;?></li>
                            </ol>
                        </div><!-- Page Top Wrap -->
                    </div>
                </div>
            </section>
<section class="section-entry product-view">
	<div class="w-100 pt-100 pb-100 position-relative">
		<div class="container">
			<div class="post-detail-wrap w-100">
				<div class="row">
				    
					<div class="col-md-9 col-sm-12 ">
					    
					    
					 <div class="all-pro-w">
					        <div class="pro-view">
							<img class="img-fluid" src="<?php echo $product_image;?>" title="<?php echo $product_name;?>" alt="<?php echo $product_name;?>">
						   <div class="right_img">
                      
							 

						<?php if(!empty($product_details['Product']['catalog_pdf'])) { ?>
						<br>
						<a href="<?php echo $catalog_pdf;?>" target="_blank">
						 <button type="button">Catalog PDF</button>
						 </a>
						<?php } ?>

                        </div>
						
						</div>
						<div class="post-detail w-100">
							<?php echo $product_description;?>
						</div>
					    </div>
					    
					    
					    
					</div>
					<div class="col-md-3 col-sm-12 ">
						<div class="pro-view">
							
							<?php echo $this->element('enquirybox'); ?>
							
							 
						</div>
					</div>
					
				</div> 
			</div>
		</div>
	</div>
</section>
                                        <div class="widget2 category_widget brd-rd5 w-100">
                                       <!--     <h3>Our Products11</h3>
									<ul class="mb-0 list-unstyled w-100">
									<?/*php foreach($products as $product_item) : ?>
									<li>
									<a href="<?php echo $subdomainurl;?><?php echo $product_item['Product']['slug'];?>.html" title="<?php echo $product_item['Product']['name'];?>">
									<?php echo $product_item['Product']['name'];?> 
									</a> &nbsp;
									</li>
									<?php endforeach;*/?> 
									</ul>
									
                                        </div> -->
                                        
                                      
                                    </aside><!-- Sidebar Wrap -->

                                </div>
                            </div>
                        </div><!-- Blog Detail Wrap -->
                    </div>
                </div>
            </section>
      <?php echo $this->element('gallery'); ?>
 