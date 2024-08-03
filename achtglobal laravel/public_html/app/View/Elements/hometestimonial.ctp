<?php if(count($testimonials) > 0) { ?>
<section>
<div class="w-100 dark-layer2 pt-100 pb-100 opc1 overflow-hidden position-relative">
<div class="fixed-bg zoom-anim back-blend-screen h-tst patern-bg dark-bg" style="background-image: url(images/pattern-bg2.jpg);"></div>
<div class="#" id="prtcl"></div>
<div class="container">
<div class="testi-wrap position-relative w-100">
<h2 class="mb-0">WHAT CLIENTS SAYS?</h2>
<div class="testi-caro">
<?php 
$i = 0; 
foreach ($testimonials as $testimonial): $i++; 
$thumbImageurl = 'images/testimonials/'.$testimonial['Testimonial']['image'];
$Imageurl = "images/noimage.png";
$Imageurl = ($testimonial['Testimonial']['image'] != '')?$thumbImageurl:$Imageurl;
?>
<div class="testi-box-wrap">
<div class="testi-box">
<div class="testi-info">
<h3 class="mb-0">“<?php echo h($testimonial['Testimonial']['name']); ?>”</h3>
<p class="mb-0"><?php echo $testimonial['Testimonial']['short_description']; ?></p>
<!-- <span class="d-inline-block text-color3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span class="thm-clr">(07 Review)</span></span>-->
</div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
</div>
</section>
<?php } ?>