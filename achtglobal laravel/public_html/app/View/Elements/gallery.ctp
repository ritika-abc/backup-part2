
<div class="section_gallery">
    <div class="container">
        <div class="clearfix"></div>
        <div class="row">  
	<?php $i = 0; foreach ($galleries as $gallery): $i++; ?>
<?php  
$thumbImageurl = 'images/galleries/'.$gallery['Gallery']['image'];
$Imageurl = "images/noimage.png";

$Imageurl = ($gallery['Gallery']['image'] != '')?$thumbImageurl:$Imageurl;
?>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="category_gal">
                     <a data-fancybox="photo-gallery" href="<?php echo $Imageurl;?>"  title="<?php echo h($gallery['Gallery']['name']); ?>">
                        <div class="image-box">
                            <figure class="image">
                               <img src="<?php echo $Imageurl;?>" title="<?php echo h($gallery['Gallery']['name']); ?>" alt="<?php echo h($gallery['Gallery']['name']); ?>">
                            </figure>
                            <div class="overlay">
                               
                                <div class="title-box">
                                    <h5><?php echo h($gallery['Gallery']['name']); ?></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
<?php endforeach; ?>
   
        </div>
    </div>
</div>
