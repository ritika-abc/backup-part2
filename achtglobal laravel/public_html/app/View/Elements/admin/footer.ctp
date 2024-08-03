<?php ?>

		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javascript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">Admin Panel @<?php echo date('Y');?> | Developed By : PHP
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher 
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="custom-control custom-radio">
					<input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="darkmode">Dark Mode</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
					<label class="custom-control-label" for="lightmode">Light Mode</label>
				</div>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="DarkHeader">
				<label class="custom-control-label" for="DarkHeader">Dark Header</label>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="DarkMenu">
				<label class="custom-control-label" for="DarkMenu">Dark Menu</label>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="ColorLessIcons">
				<label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
			</div>
		</div>
	</div>
	 end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!--plugins-->
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/select2/js/select2.min.js"></script>
	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>
	<!--Data Tables js-->
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function () {
			//Default data table
			$('#example').DataTable();
			var table = $('#example2').DataTable({
				lengthChange: false,
				buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
			});
			table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
		});
	</script>
	

<script src="//cdn.ckeditor.com/4.5.7/full-all/ckeditor.js"></script>
<script>
    jQuery(document).ready(function($){
        var _content = $('.ckeditor').get(0);
        var basePath = "<?php echo $this->webroot;?>";
        var editor = CKEDITOR.replace( _content,
        {
            height: 400,
            filebrowserBrowseUrl : basePath + 'kcfinder/browse.php?type=files',
            filebrowserImageBrowseUrl : basePath + 'kcfinder/browse.php?type=images',
            filebrowserFlashBrowseUrl : basePath + 'kcfinder/browse.php?type=flash',
            filebrowserUploadUrl : basePath + 'kcfinder/upload.php?type=files',
            filebrowserImageUploadUrl : basePath + 'kcfinder/upload.php?type=images',
            filebrowserFlashUploadUrl : basePath + 'kcfinder/upload.php?type=flash'
        });
    });
</script>

	<!-- App JS -->
	<script src="assets/js/app.js"></script>
</body>

</html>
   