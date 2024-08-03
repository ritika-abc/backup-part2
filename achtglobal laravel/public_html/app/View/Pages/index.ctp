<?php echo $this->element('slider'); ?>
<?php
$page_image_url = $this->Html->url('/images/pages/'.$page_image);
$page_image = "images/noimage.png";
$page_image = ($page_image != '')?$page_image_url:$page_image;
?>
<!-- 
<section>
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



<div class="serv-box-inner">



</div><!-- Services Wrap -->
</div> 
</div>
</div><!-- About Wrap -->
</div>
</div>
</section>


<br></br>
 <?/*php 

$homesection_item2 = $homesections[1];


$thumbImageurl1 = $this->Html->url('/images/homesections/'.$homesection_item2['Homesection']['section1_image']);
$section1_image = "/images/noimage.png";

$section21_image = ($homesection_item2['Homesection']['section1_image'] != '')?$thumbImageurl1:$section1_image;


$thumbImageurl1 = $this->Html->url('/images/homesections/'.$homesection_item2['Homesection']['section2_image']);
$section2_image = "/images/noimage.png";

$section22_image = ($homesection_item2['Homesection']['section2_image'] != '')?$thumbImageurl1:$section2_image;



$thumbImageurl1 = $this->Html->url('/images/homesections/'.$homesection_item2['Homesection']['section3_image']);
$section3_image = "/images/noimage.png";

$section23_image = ($homesection_item2['Homesection']['section3_image'] != '')?$thumbImageurl1:$section3_image;



$thumbImageurl1 = $this->Html->url('/images/homesections/'.$homesection_item2['Homesection']['section4_image']);
$section4_image = "/images/noimage.png";

$section24_image = ($homesection_item2['Homesection']['section4_image'] != '')?$thumbImageurl1:$section4_image;


*/?>


<section><!--
<div class="w-100 pb-70 position-relative">
<div class="container">
<div class="sec-title v2 text-center w-100">
<div class="sec-title-inner d-inline-block">

<h2 class="mb-0"><?php echo $homesection_item2['Homesection']['name'];?>
</h2>
<p class="mb-0"><?php echo $homesection_item2['Homesection']['description'];?></p>
</div>
</div>
<div class="serv-wrap text-center w-100">
<div class="row res-caro2">
<div class="col-md-4 col-sm-6 col-lg-3">
<div class="serv-box2 position-relative overflow-hidden w-100" style="background-image: url(images/resources/b1.png);">
<i><img class="img-fluid" src="images/resources/b1.png" alt="GuiNet Technologies" title="GuiNet Technologies"></i>
<div class="serv-box-inner">
<h3 class="mb-0"><?php echo $homesection_item2['Homesection']['section1_title'];?></h3>
<p class="mb-0"><?php echo $homesection_item2['Homesection']['section1_description'];?></p>
<span class="d-block"><i class="thm-clr"></i></span>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-lg-3">
<div class="serv-box2 position-relative overflow-hidden w-100" style="background-image: url(images/resources/serv-bg2.jpg);">
<i><img class="img-fluid" src="images/resources/b2.png" alt="GuiNet Technologies" title="GuiNet Technologies"></i>
<div class="serv-box-inner">
<h3 class="mb-0"><?php echo $homesection_item2['Homesection']['section2_title'];?></h3>
<p class="mb-0"><?php echo $homesection_item2['Homesection']['section2_description'];?></p>
<span class="d-block"><i class="thm-clr"></i></span>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-lg-3">
<div class="serv-box2 position-relative overflow-hidden w-100" style="background-image: url(images/resources/serv-bg3.jpg);">
<i><img class="img-fluid" src="images/resources/b3.png" alt="GuiNet Technologies" title="GuiNet Technologies"></i>
<div class="serv-box-inner">
<h3 class="mb-0"><?php echo $homesection_item2['Homesection']['section3_title'];?></h3>
<p class="mb-0"><?php echo $homesection_item2['Homesection']['section3_description'];?></p>
<span class="d-block"><i class="thm-clr"></i></span>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-lg-3">
<div class="serv-box2 position-relative overflow-hidden w-100" style="background-image: url(images/resources/serv-bg4.jpg);">
<i><img class="img-fluid" src="images/resources/b4.png" alt="GuiNet Technologies" title="GuiNet Technologies"></i>
<div class="serv-box-inner">
<h3 class="mb-0"><?php echo $homesection_item2['Homesection']['section4_title'];?></h3>
<p class="mb-0"><?php echo $homesection_item2['Homesection']['section4_description'];?></p>
<span class="d-block"><i class="thm-clr"></i></span>
</div>
</div>
</div>
</div>
</div><!-- Services Wrap -->
</div>
</div>
</section>
<?php /*
<section>
<div class="w-100 pt-155 pb-155 blue-layer opc85 position-relative">
<div class="fixed-bg" style="background-image: url(images/parallax3.jpg);"></div>
<div class="particles-js" id="prtcl"></div>
<div class="container">
<div class="banner-wrap position-relative text-center w-100">
<div class="banner-inner d-inline-block">
<h2 class="mb-0">Bridging gap between Business and Technology</h2>
<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
<a class="thm-btn thm-bg" href="about.html" title="">Learn More<i class="flaticon-arrow-pointing-to-right"></i></a>
</div>
</div><!-- Banner Wrap -->
</div>
</div>
</section>








*/ ?>








<?php echo $this->element('homeproducts'); ?>

<?//php echo $this->element('homeblog'); ?>
<php></php>


<!-- Tours Section-->
   <!-- <section class="yacht-tours-containern">
        <div class="auto-containern">
            <div class="content-containern full-view">
                <div class="content-innern">
                    
                    <div class="results-row">
                        
                        <div class="row clearfix">
                            
                                    <div class="col-lg-12 ">
                                        <h2 class="holi09 pl-2" style="font-weight: 600;font-family: sans-serif;font-size: 42px;">Best Destinations</h2>
                                    </div>
                                    
                            
                            
                          
                            <div class="package-block-two col-lg-4 col-md-6 col-sm-12">
                             <a href="himachal-tours.html">
                                <div class="inner-box">
                                   
                                    <div class="image-box">
                                        <a href="himachal-tours.html"><img src="images/homesections/himachal.png" alt="" title=""></a>
                                    </div>
                                    <div class="contentn">
                                        <h4><a href="himachal-tours.html">Himachal Tours</a></h4>
                                       
                                    </div>
                                    
                                </div>
                                </a>
                            </div>
                          
                            <div class="package-block-two col-lg-4 col-md-6 col-sm-12">
                             <a href="rajasthan-tours.html">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="rajasthan-tours.html"><img src="images/homesections/rajasthan.png" alt="" title=""></a>
                                    </div>
                                    <div class="contentn">
                                        <h4><a href="rajasthan-tours.html">Rajasthan Tours</a></h4>
                                        
                                    </div>
                                </div>
                                </a>
                            </div>

                          
                         
                            <div class="package-block-two col-lg-4 col-md-6 col-sm-12">
                                <a href="uttarakhand-tourism.html">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="uttarakhand-tourism.html"><img src="images/homesections/uttrakhand.png" alt="" title=""></a>
                                    </div>
                                    <div class="contentn">
                                        <h4><a href="uttarakhand-tourism.html">Uttarakhand Tours</a></h4>
                                        
                                    </div>
                                </div>
                                </a>
                            </div>


                            <div class="package-block-two col-lg-4 col-md-6 col-sm-12">
                                <a href="punjab-tourism.php">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="punjab-tours.html"><img src="images/homesections/punjab.png" alt="" title=""></a>
                                    </div>
                                    <div class="contentn">
                                        <h4><a href="punjab-tours.html">Punjab Tours</a></h4>
                                        
                                    </div>
                                </div>
                                </a>
                            </div>
                          
                            <div class="package-block-two col-lg-4 col-md-6 col-sm-12">
                                <a href="jammu-kashmir-tours.html">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="jammu-kashmir-tours.html"><img src="images/homesections/jammu&kashmir.png" alt="" title=""></a>
                                    </div>
                                    
                                    <div class="contentn">
                                        <h4><a href="jammu-kashmir-tours.html">Jammu and Kashmir Tours</a></h4>
                                        
                                    </div>
                                </div>
                                </a>
                            </div>
                      
                            <div class="package-block-two col-lg-4 col-md-6 col-sm-12">
                             <a href="uttar-pardesh-tours.html">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="uttar-pardesh-tours.html"><img src="images/homesections/utterpradesh.png" alt="" title=""></a>
                                    </div>
                                    <div class="contentn">
                                        <h4><a href="uttar-pardesh-tours.html">Uttar Pardesh</a></h4>
                                        
                                    </div>
                                </div>
                              </a>
                            </div>
                           
                            <div class="package-block-two col-lg-4 col-md-6 col-sm-12">
                             <a href="new-delhi-tours.html">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="new-delhi-tours.html"><img src="images/homesections/new-delhi.png" alt="" title=""></a>
                                    </div>
                                    <div class="contentn">
                                        <h4><a href="new-delhi-tours.html">New Delhi Tours</a></h4>
                                        
                                    </div>
                                </div>
                             </a>
                            </div>
                            
                          
                            <div class="package-block-two col-lg-4 col-md-6 col-sm-12">
                             <a href="chardham-yatra.html">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="chardham-yatra.html"><img src="images/homesections/chardham.png" alt="" title=""></a>
                                    </div>
                                    <div class="contentn">
                                        <h4><a href="chardham-yatra.html">Chardham Yatra</a></h4>
                                        
                                    </div>
                                </div>
                             </a>
                            </div>
                            
                            
                        </div>
                        

                    </div>

                </div>

            </div>
        </div>
    </section>
 <section> -->
<!--<div class="w-100 thm-layer opc1 overflow-hidden position-relative">
<div class="parallax-bg zoom-anim back-blend-multiply patern-bg thm-bg" style="background-image: url(images/pattern-bg1.png);"></div>
<div class="container">
<div class="facts-wrap shadow-none text-center w-100">
<div class="row">
<div class="col-md-3 col-sm-6 col-lg-3">
<div class="fact-box w-100">
<h2 class="mb-0"><span class="counter">6000</span><sup>+</sup></h2>
<h4 class="mb-0">Services Completed</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 col-lg-3">
<div class="fact-box w-100">
<h2 class="mb-0"><span class="counter">5000</span><sup>+</sup></h2>
<h4 class="mb-0">Happy Clients</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 col-lg-3">
<div class="fact-box w-100">
<h2 class="mb-0"><span class="counter">31</span><sup>+</sup></h2>
<h4 class="mb-0">Total Number of Employees</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 col-lg-3">
<div class="fact-box w-100">
<h2 class="mb-0"><span class="counter">5</span><sup></sup></h2>
<h4 class="mb-0">No. Of Vehicles</h4>
</div>
</div>
</div>
</div><!-- Facts Wrap 
</div>
</div>
</section>-->

 


<!--<?php echo $this->element('homefaq'); ?>-->
