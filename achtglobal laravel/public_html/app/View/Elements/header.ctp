<?php ?>
<header class="stick style3 w-100" style="background-color: #190a02;">
<?php /*
<div class="topbar bg-color1 w-100">
<div class="container">
<div class="topbar-inner d-flex flex-wrap justify-content-between align-items-center w-100">
<ul class="topbar-info-list mb-0 list-unstyled d-inline-flex">
<li><i class="thm-clr fas fa-map-marker-alt"></i><?php echo $company_address;?></li>
<li><i class="thm-clr far fa-envelope-open"></i>Email: <a href="mailto:<?php echo $company_email;?>" title=""><?php echo $company_email;?></a></li>
<li><i class="thm-clr far fa-phone-call"></i>Phone: <a href="tel:<?php echo $company_phone;?>" title=""><?php echo $company_phone;?></a></li>

</ul>
<ul class="topbar-links mb-0 list-unstyled d-inline-flex">
<li><a href="javascript:void(0);" title="">Careers</a></li>
<li><a href="javascript:void(0);" title="">Help Desk</a></li>
<li><a href="javascript:void(0);" title="">Login</a></li>
</ul>
</div>
</div>
</div><!-- Topbar -->*/ ?>
<div class="logo-info-bar-wrap w-100">
<div class="container">
<div class="logo-info-bar-inner w-100 d-flex flex-wrap justify-content-between align-items-center">
<div class="logo-social d-inline-flex flex-wrap justify-content-between align-items-center">
<div class="logo"><div class="call-us">
<i style="color: #fff;" class="thm-clr far fa-envelope-open"></i>
<!--<span>24/7 Email Services</span>-->
 <a style="color: #fff;" href="mailto:<?php echo $company_email;?>" title=""><?php echo $company_email;?></a></div></div><!-- Logo -->

</div>
<div class="top-info-wrap d-inline-flex flex-wrap justify-content-between align-items-center">

 

<div class="call-us">
<i style="color: #fff;" class="thm-clr flaticon-phone-call"></i>
<!--<span>24/7 Phone Services</span>-->
<strong><a style="color: #fff;" href="tel:<?php echo $company_phone;?>" title=""><?php echo $company_phone;?></a></strong>
</div>
<?php /*
<div class="add-cart">
<a href="cart.html" title="">
<i class="thm-bg fas fa-shopping-basket"></i>
Add to Cart
<span class="d-block">(Item: 02)</span>
</a>
</div>*/ ?>
</div>                            
</div>
</div>
</div><!-- Logo Info Bar Wrap -->


<div class="menu-wrap">
<div class="container">
<nav class="d-inline-flex thm-bg justify-content-between align-items-center w-100">
<div class="header-left">
    <a href="<?php echo $this->webroot;?>" title="">
    <img class="img-fluid" src="images/<?php echo $website_logo;?>" alt="<?php echo $company_name;?>" title="<?php echo $company_name;?>"></a>
    
<ul class="mb-0 list-unstyled d-inline-flex">
    
<li><a href="<?php echo $this->webroot;?>" title="">Home</a></li>
<li><a href="company-profile.html" title="">Company Profile</a></li>
<li class="menu-item-has-children"><a href="our-products.html" title="">Our 
Products</a>
<ul class="mb-0 list-unstyled">
<?php foreach($products as $product_item): $pf++; if($pf > 50) { break; } ?>
<li><a href="<?php echo $subdomainurl;?><?php echo $product_item['Product']['slug'];?>.html" title="<?php echo $product_item['Product']['name'];?>"><?php echo $product_item['Product']['name'];?></a></li>
<?php endforeach;?>
</ul>
</li>
<li><a href="sitemap.html" title="">Sitemap</a></li>
<li><a href="contact-us.html" title="">Contact Us</a></li>
<li class="menu-item-has-children"><a href="#" title="">Flipbook</a>

<ul class="mb-0 list-unstyled">
<li><a href="https://online.fliphtml5.com/jqeoq/ptny/#p=1 ">English</a></li>
<li><a href="https://online.fliphtml5.com/jqeoq/znqk/index.html#p=1">Italian</a></li>
<li><a href="https://online.fliphtml5.com/jqeoq/tuzj/index.html#p=1  ">Portuguese </a></li>
<li><a href="https://online.fliphtml5.com/jqeoq/qpvp/index.html#p=1  "> Chinese</a></li>
</ul>
</li>
</ul>
</div>
<!--<div class="header-right-btns">-->
<!--<a class="get-quote" href="contact-us.html" title=""><i class="far fa-comments"></i>Get A Quote<i class="flaticon-arrow-pointing-to-right"></i></a>-->
<!--</div>-->
</nav>
</div>
</div><!-- Menu Wrap -->
</header><!-- Header -->
<div class="sticky-menu">
<div class="container">
<div class="sticky-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
<div class="logo"><h1 class="mb-0"><a href="<?php echo $this->webroot;?>" title="Home"><img class="img-fluid" src="images/<?php echo $website_logo;?>" alt="<?php echo $company_name;?>" title="<?php echo $company_name;?>"></a></h1></div><!-- Logo -->
<nav class="d-inline-flex justify-content-between align-items-center">
<div class="header-left">
<ul class="mb-0 list-unstyled d-inline-flex">
<li><a href="<?php echo $this->webroot;?>" title="">Home</a></li>
<li><a href="company-profile.html" title="">Company Profile</a></li>
<li class="menu-item-has-children"><a href="our-products.html" title="">Our Products</a>
<ul class="mb-0 list-unstyled">
<?php foreach($products as $product_item) : ?>
<li><a href="<?php echo $subdomainurl;?><?php echo $product_item['Product']['slug'];?>.html" title="<?php echo $product_item['Product']['name'];?>"><?php echo $product_item['Product']['name'];?></a></li>
<?php endforeach;?>
</ul>
</li>
<li><a href="sitemap.html" title="">Sitemap</a></li>
<li><a href="contact-us.html" title="">Contact Us</a></li>


<li class="menu-item-has-children"><a href="#" title="">Flipbook</a>

<ul class="mb-0 list-unstyled">
<li><a href="https://online.fliphtml5.com/jqeoq/ptny/#p=1 ">English</a></li>
<li><a href="https://online.fliphtml5.com/jqeoq/znqk/index.html#p=1">Italian</a></li>
<li><a href="https://online.fliphtml5.com/jqeoq/tuzj/index.html#p=1  ">Portuguese </a></li>
<li><a href="https://online.fliphtml5.com/jqeoq/qpvp/index.html#p=1  "> Chinese</a></li>
</ul>
</li>
</ul>
</div>
</nav>
</div>
</div>
</div><!-- Sticky Menu -->
<div class="rspn-hdr">
<div class="rspn-mdbr">
<div class="rspn-scil">
<a href="<?php echo $facebook_url;?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
<a href="<?php echo $twitter_url;?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
<a href="<?php echo $linkedin_url;?>" title="linkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
<a href="<?php echo $youtube_url;?>" title="youtube" target="_blank"><i class="fab fa-youtube"></i></a>
<a href="<?php echo $instagram_url;?>" title="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
</div>
<?php /*<form class="rspn-srch">
<input type="text" placeholder="Enter Your Keyword">
<button type="submit"><i class="fa fa-search"></i></button>
</form>*/ ?>
</div>
<div class="lg-mn">
<div class="logo"><a href="<?php echo $this->webroot;?>" title="Home"><img src="images/<?php echo $website_logo;?>" alt="<?php echo $company_name;?>"></a></div>
<div class="rspn-cnt">
<span><i class="thm-clr far fa-envelope-open"></i><a href="mailto:<?php echo $company_phone;?>" title=""><?php echo $company_email;?></a></span>
<span><i class="thm-clr fas fa-map-marker-alt"></i><?php echo $company_address;?></span>
</div>
<span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
</div>
<div class="rsnp-mnu">
<span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
<ul class="mb-0 list-unstyled w-100">
<li><a href="<?php echo $this->webroot;?>" title="">Home</a></li>
<li><a href="company-profile.html" title="">Company Profile</a></li>
<li class="menu-item-has-children"><a href="our-products.html" title="">Our Products</a>
<ul class="mb-0 list-unstyled">
<?php foreach($products as $product_item) : ?>
<li><a href="<?php echo $subdomainurl;?><?php echo $product_item['Product']['slug'];?>.html" title="<?php echo $product_item['Product']['name'];?>"><?php echo $product_item['Product']['name'];?></a></li>
<?php endforeach;?>
</ul>
</li>
<li><a href="sitemap.html" title="">Sitemap</a></li>
<li><a href="contact-us.html" title="">Contact Us</a></li>
<li class="menu-item-has-children"><a href="#" title="">Flipbook</a>

<ul class="mb-0 list-unstyled">
<li><a href="https://online.fliphtml5.com/jqeoq/ptny/#p=1 ">English</a></li>
<li><a href="https://online.fliphtml5.com/jqeoq/znqk/index.html#p=1">Italian</a></li>
<li><a href="https://online.fliphtml5.com/jqeoq/tuzj/index.html#p=1  ">Portuguese </a></li>
<li><a href="https://online.fliphtml5.com/jqeoq/qpvp/index.html#p=1  "> Chinese</a></li>
</ul>

</ul>
</div><!-- Responsive Menu -->
</div><!-- Responsive Header -->