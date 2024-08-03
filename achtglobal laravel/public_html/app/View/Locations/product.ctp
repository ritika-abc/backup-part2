<?php

$product_image_url = $this->Html->url('/images/products/'.$product_details['Product']['image']);
$product_image = "images/noimage.png";
$product_image = ($product_details['Product']['image'] != '')?$product_image_url:$product_image;
$catalog_pdf = $this->Html->url('/images/products/'.$product_details['Product']['catalog_pdf']);

?>

     <section>
                <div class="w-100 pt-100 pb-30 dark-layer3 opc7 position-relative">
                    <div class="fixed-bg" style="background-image: url(images/pagetop-bg.jpg);"></div>
                    <div class="container">
                        <div class="page-top-wrap w-100">
                            <h1 class="mb-0"><?php echo $page_title;?></h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo $this->webroot;?>" title="Home">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo $subdomainurl;?>" title="<?php echo $subdomain;?>"><?php echo $subdomain;?></a></li>
                                <li class="breadcrumb-item active"><?php echo $page_title;?></li>
							 
	
                            </ol>
                        </div><!-- Page Top Wrap -->
                    </div>
                </div>
            </section>
            <section>
                <div class="w-100 pt-100 pb-100 position-relative">
                    <div class="container">
                        <div class="post-detail-wrap w-100">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-8">
                                    <div class="post-detail w-100">
                                        
						<?php echo $page_description;?>
                                         <div class="reply-form w-100">
										 
                                     
									 </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-4">
                                    <aside class="sidebar-wrap w-100">
                                        <div class="widget2 brd-rd5 w-100">
                                            
                                            
            </div>
                                            <div class="about-widget text-center w-100">
                                                <div class="about-widget-img d-inline-block">
 													
			<img class="img-fluid w-100" src="<?php echo $product_image;?>" title="<?php echo $page_title;?>" alt="<?php echo $page_title;?>">
			<?php echo $this->element('enquirybox'); ?>

                                                 </div>
                                             </div>
                                        </div> 
                                        <div class="widget2 category_widget brd-rd5 w-100">
                                           <!-- <h3>Our Products</h3>
									<ul class="mb-0 list-unstyled w-100">
									<?/*php foreach($products as $product_item) : ?>
									<li>
									<a href="<?php echo $subdomainurl;?><?php echo $product_item['Product']['slug'];?>.html" title="<?php echo $product_item['Product']['name'];?>">
									<?php echo $product_item['Product']['name'];?> 
									</a> &nbsp;
									</li>
									<?php endforeach;*/?>  
									</ul>
									
                                        </div> 
                                    </aside><!-- Sidebar Wrap -->
                                </div>
                            </div>
                        </div><!-- Blog Detail Wrap -->
                    </div>
                </div>
            </section>
       