 

<div id="commonenquiry">
 <span class="d-block">Write Here</span>
                <p class="mb-4 heading-cusotm">Get In Touch</p>
					<div id="alertmessage"></div>

                    <form method="post" action="enquiry.html">
                    <div class="row">
                           <div class="col-md-6 filed mb-3">
                            <input type="text" name="name" placeholder="Name*" required="" class="w-100 pl-3 border-0">
                        </div>

                        <div class="col-md-6 filed mb-3">
                            <input type="email" name="email" placeholder="Email*" required="" class="w-100 pl-3 border-0">
                        </div>

                        <div class="col-md-6 filed mb-3">
                            <input type="text" name="phone" placeholder="Phone Number*" required="" class="w-100 pl-3 border-0">
                            </div>

                            <div class="col-md-6 filed mb-3">
                                <input type="text" name="address" placeholder="Address" class="w-100 pl-3 border-0">
                            </div>

                            <div class="col-md-12 filed mb-3">
                                <textarea name="message" placeholder="Message" class="w-100 pl-3 border-0" ></textarea>
                            </div>

                            <div class="col-md-12 filed-btn">
                                <input type="submit" name="submit" value="Submit" class="border-0 text-white w-25">
                            </div>
                        </div>
                    </form>
</div>
					
<script>
$(function() {   		 
$("#commonenquiry form").on('submit', function(event) {

var $form = $(this);		
$.ajax({
type: $form.attr('method'),
url: $form.attr('action'),
data: $form.serialize(),
success: function() {

$('#alertmessage').html('Thank you for enquiry.');
$('#alertmessage').addClass(' alert alert-info');
		 
$("#alertmessage").show();

$('#commonenquiry form')[0].reset();		 

}
});
event.preventDefault();		 
});
});
</script>

