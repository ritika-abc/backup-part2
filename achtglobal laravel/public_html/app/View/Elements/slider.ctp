

		  <section>
                <div class="w-100 position-relative">
                    <div class="feat-wrap position-relative w-100">
                        <div class="feat-caro">
						<?php foreach($sliders as $slider) : ?>

                            <div class="feat-item">
<div class="slide"><img src="images/sliders/<?php echo $slider['Slider']['image'];?>" alt="<?php echo $slider['Slider']['name'];?>" title="<?php echo $slider['Slider']['name'];?>" /></div>
                                <div class="container">
                                    <div class="feat-cap">
                                        <h2 class="mb-0"><?php echo $slider['Slider']['name'];?></h2>
                                        <p class="mb-0"><?php echo $slider['Slider']['description'];?></p>
                                       <?php 
                                     
                                       
                                       
                                       /* <div class="feat-cap-innr">
                                            <a class="thm-btn thm-bg" href="about.html" title="">Learn More<i class="flaticon-arrow-pointing-to-right"></i></a>
                                            <a class="video-btn" href="https://www.youtube.com/embed/6gUOzbhtVd4" data-fancybox title=""><span class="spinner"><i class="flaticon-play"></i></span>Intro Video <br> Watch</a>
                                        </div>*/ ?>
                                    </div>
                                </div>
                            </div>
							<?php endforeach;?>	

                               </div>
                    </div><!-- Featured Area Wrap -->
                </div>
            </section>