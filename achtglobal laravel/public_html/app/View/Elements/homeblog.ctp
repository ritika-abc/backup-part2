<?php if(count($blogs) > 0) { ?>

<section>
<div class="w-100 pt-100 pb-50 position-relative">
<div class="container">
<div class="sec-title w-100">
<div class="sec-title-inner d-inline-block">
<span class="d-block thm-clr">OUR BLOG</span>
<h3 class="mb-0">Our Latest News</h3>
</div>
</div>
<div class="blog-wrap w-100">
<div class="row post-caro">

<?php 

foreach($blogs as $blog_item) : 

$blog_item_image_url = $this->Html->url('/images/blogs/'.$blog_item['Blog']['image']);
$blog_item_image = "images/noimage.png";
$blog_item_image = ($blog_item['Blog']['image'] != '')?$blog_item_image_url:$blog_item_image;

?>
<div class="col-md-6 col-sm-6 col-lg-4">
<div class="post-box w-100 text-center">
<div class="post-img overflow-hidden w-100">
<a href="blog/<?php echo $blog_item['Blog']['slug'];?>.html" title="<?php echo $blog_item['Blog']['name'];?>"><img class="img-fluid w-100 "src="<?php echo $blog_item_image;?>" alt="<?php echo $blog_item['Blog']['name'];?>" title="<?php echo $blog_item['Blog']['name'];?>"></a>
</div>
<div class="post-info w-100">
<h3 class="mb-0">
<a href="blog/<?php echo $blog_item['Blog']['slug'];?>.html" title="<?php echo $blog_item['Blog']['name'];?>">
<?php echo $blog_item['Blog']['name'];?></a></h3>


<?php /*   <p class="mb-0">There are many variations of passages of Lorem Ipsum available.</p>
<div class="post-info-bottom d-flex flex-wrap w-100">
<span class="d-inline-block"><i class="far fa-user"></i><a href="javascript:void(0);" title="">Jibon Hasan</a></span>
<ul class="post-meta mb-0 list-unstyled d-inline-flex">
<li><i class="far fa-calendar-alt"></i>July 03, 2020</li>
<li><i class="fas fa-comment-dots"></i>02</li>
</ul>
</div>*/ ?>
</div>
</div>
</div>
<?php endforeach;?>



</div>
</div><!-- Blog Wrap -->
<div class="view-all w-100 text-center">
<a class="thm-btn thm-bg" href="blog.html" title="">View All News<i class="flaticon-arrow-pointing-to-right"></i></a>
</div><!-- View All -->
</div>
</div>
</section>










<?php } ?>	  