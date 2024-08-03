
<section id="news" class="clearfix">
 <div class="container" >
  <div class="row">
   <div class="news_top clearfix">
    <div class="col-sm-3 news_top_left clearfix">
	 <div class="news_top_left_inner clearfix">
	  <h2>SIGN UP FOR NEWSLETTER</h2>
	 </div>
	</div>
	<div class="col-sm-3 news_top_middle clearfix">
	 <div class="input-group col-sm-12 news_top_middle_inner clearfix">
                                <input type="text" class="  search-query form-control form-control_news" placeholder="Enter Email Address">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class="newspaper">SUBSCRIBE</span>
                                    </button>
                                </span>
                            </div>
	</div>
	<div class="col-sm-4 news_top_middle_2 clearfix">
	 <div class="news_top_middle_2_inner clearfix">
	  
	 </div>
	</div>
	<div class="col-sm-2 news_top_right clearfix">
	 <div class="news_top_right_top clearfix">
	  <div class="col-sm-2 news_top_right_top_left clearfix">
	   <div class="news_top_right_top_left_inner clearfix">
	  
	   </div>
	  </div>
	  <div class="col-sm-10 news_top_right_top_right clearfix">
	   <div class="news_top_right_top_right_inner clearfix">
	    <p><a href="#"><img style="height:40px;" src="image/246x50-logo_gold.png"></a></p>
	   </div>
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>



<section id="footer_last_2" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="footer_last_2 clearfix">
   <div class="footer_last_2_inner clerafix">
	   <p class="website">© 2023 Naikorganic Exim. All rights reserved | Design by<a href="https://web2export.com/"> Web 2 Export</a></p>
	  </div>
   </div>
  </div>
 </div>
</section>
<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
<script>
var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":"100","marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"919989909765","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
var wa_widgetSetting = {"title":"Naikorganic Exim","subTitle":"Manufacturer in India ","headerBackgroundColor":"#070906","headerColorScheme":"light","greetingText":"Hi there! \nHow can I help you?","ctaText":"Start Chat","btnColor":"#1A1A1A","cornerRadius":40,"welcomeMessage":"Hello","btnColorScheme":"light","brandImage":"image/246x50-logo_gold.png","darkHeaderColorScheme":{"title":"#333333","subTitle":"#4F4F4F"}};
window.onload = () => {
_waEmbed(wa_btnSetting, wa_widgetSetting);
};
</script>
<script type="text/javascript">
$(document).ready(function(){

/*****Fixed Menu******/
var secondaryNav = $('.cd-secondary-nav'),
   secondaryNavTopPosition = secondaryNav.offset().top;
	$(window).on('scroll', function(){
		if($(window).scrollTop() > secondaryNavTopPosition ) {
			secondaryNav.addClass('is-fixed');	
		} else {
			secondaryNav.removeClass('is-fixed');
		}
	});	
	
});
</script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
	</script>
<script type="text/javascript">
	$(document).on('click', '.panel-heading span.icon_minim', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('focus', '.panel-footer input.chat_input', function (e) {
    var $this = $(this);
    if ($('#minim_chat_window').hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideDown();
        $('#minim_chat_window').removeClass('panel-collapsed');
        $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '#new_chat', function (e) {
    var size = $( ".chat-window:last-child" ).css("margin-left");
     size_total = parseInt(size) + 400;
    alert(size_total);
    var clone = $( "#chat_window_1" ).clone().appendTo( ".container" );
    clone.css("margin-left", size_total);
});
$(document).on('click', '.icon_close', function (e) {
    //$(this).parent().parent().parent().parent().remove();
    $( "#chat_window_1" ).remove();
});

	</script>
	
</body>
       
</html>
