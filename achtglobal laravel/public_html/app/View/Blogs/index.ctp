<div class="section_banner">
    <img src="images/banner1.jpg">
    <div class="page_heading">
    <div class="container">
        <h1>Our Blog</h1>
    </div>
</div>
</div>
<div class="section_breadcrumbs">
<div class="container">
    <ul>
        <li><a href="<?php echo $this->webroot;?>">Home</a></li>
        <li>Our Blog</li>
    </ul>
</div>
</div>
 
<div class="section_catgeory">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="categoriesdetails">
                    <h2 class="h1_title">Our Blog</h2>
					<?php /*
                    <div class="right_img">
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalID">
                            <div class="catimage">
                                <img src="images/category-1.jpg" alt="">
                            </div>
                            <button type="button">Enquire Now</button></a>
                        </div>

                        <h3>Faucibus ferme aultricies urna cum sociis natoque penatibus</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo. Mauris ma massa eleifend et purus vel feugiat rutrum nulla cras vitae est vel ipsum faucibus ferme aultricies urna cum sociis natoque penatibus.</p>
                        <p>Dolor sit amet, consectetur adipiscing elit. Ut sed bibendum leo. Mauris mau massa, eleifend et purus vel feugiat rutrum . Cras vitae est vel ipsum fau bus fermentum a ultricies urna cum sociis.</p>
                        <h3>By the sublimated printing technology</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo. Mauris ma massa eleifend et purus vel feugiat rutrum nulla cras vitae est vel ipsum faucibus ferme aultricies urna cum sociis natoque penatibus.</p>
                        <p>Ut sed bibendum leo mauris massa, eleifend et purus vel, feugiat rutrum nulla cras vitae est vel ipsum faucibus ferm aultricies urna dum sociis natoque penatibus et magnis.</p>
                        <h3>In the most versatile designs and patterns</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo. Mauris ma massa eleifend et purus vel feugiat rutrum nulla cras vitae est vel ipsum faucibus ferme aultricies urna cum sociis natoque penatibus.</p>

                        <p>Famur sit amet consectetur adipiscing elit ut sed bibenum leo. Mauris mauris as sa eleifend et purus vel feugiat rutrum nulla.</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo mauris massa, eleifend et purus vel, feugiat rutrum nulla cras vitae est vel ipsum faucibus ferm aultricies urna dum sociis natoque penatibus et magnis.</p>
						*/ ?>
                    </div>

                    <div class="clearfix"></div>
					
					     <div class="Detials_more_Item">
                        <div class="row">
						
						
<?php foreach($blogs as $blog_item) : 


$product_image_url2 = $this->Html->url('/images/blogs/'.$blog_item['Blog']['image']);
$product_image2 = "images/noimage.png";
$product_image2 = ($blog_item['Blog']['image'] != '')?$product_image_url2:$product_image2;

?>
                                      
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <a href="blog/<?php echo $blog_item['Blog']['slug'];?>.html" title="<?php echo $blog_item['Blog']['name'];?>" class="Detials_item">
                                    <div class="image">
                                        <img src="<?php echo$product_image2;?>"  title="<?php echo $product_name;?>" alt="<?php echo $product_name;?>">
                                    </div>
                                    <h4><?php echo $blog_item['Blog']['name'];?><span></span></h4>
                                    <span class="read_more">Read More</span>
                                </a>
 							 
                            </div>
							
                                      <?php endforeach;?>    
                       
 
                            
                        </div>
                    </div>

               

                </div>
            </div>

        </div>
    </div>
	
<?php /*

<div class="section_gallery">
    <div class="container">
        <h3 class="title_2">Our Gallery</h3>
        <div class="clearfix"></div>
        <div class="row">            
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="category_gal">
                     <a data-fancybox="photo-gallery" href="images/category-1.jpg">
                        <div class="image-box">
                            <figure class="image">
                               <img src="images/category-1.jpg" alt="">
                            </figure>
                            <div class="overlay">
                                <span class="fas fa-search-plus"></span>
                                <div class="title-box">
                                    <h5>Lorem ipsum dolor sit</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="category_gal">
                     <a data-fancybox="photo-gallery" href="images/category-1.jpg">
                        <div class="image-box">
                            <figure class="image">
                               <img src="images/category-1.jpg" alt="">
                            </figure>
                            <div class="overlay">
                                <span class="fas fa-search-plus"></span>
                                <div class="title-box">
                                    <h5>Lorem ipsum dolor sit</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>



            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="category_gal">
                     <a data-fancybox="photo-gallery" href="images/category-1.jpg">
                        <div class="image-box">
                            <figure class="image">
                               <img src="images/category-1.jpg" alt="">
                            </figure>
                            <div class="overlay">
                                <span class="fas fa-search-plus"></span>
                                <div class="title-box">
                                    <h5>Lorem ipsum dolor sit</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>



            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="category_gal">
                     <a data-fancybox="photo-gallery" href="images/category-1.jpg">
                        <div class="image-box">
                            <figure class="image">
                               <img src="images/category-1.jpg" alt="">
                            </figure>
                            <div class="overlay">
                                <span class="fas fa-search-plus"></span>
                                <div class="title-box">
                                    <h5>Lorem ipsum dolor sit</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>



            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="category_gal">
                     <a data-fancybox="photo-gallery" href="images/category-1.jpg">
                        <div class="image-box">
                            <figure class="image">
                               <img src="images/category-1.jpg" alt="">
                            </figure>
                            <div class="overlay">
                                <span class="fas fa-search-plus"></span>
                                <div class="title-box">
                                    <h5>Lorem ipsum dolor sit</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="category_gal">
                     <a data-fancybox="photo-gallery" href="images/category-1.jpg">
                        <div class="image-box">
                            <figure class="image">
                               <img src="images/category-1.jpg" alt="">
                            </figure>
                            <div class="overlay">
                                <span class="fas fa-search-plus"></span>
                                <div class="title-box">
                                    <h5>Lorem ipsum dolor sit</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>   
        </div>
    </div>
</div>
 
 */ ?>