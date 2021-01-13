<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fas fa-angle-up "></i></a>

<!--Jquery js -->
<script src="<?php echo e(asset('external2/js/vendors/jquery-3.2.1.min.js')); ?>"></script>

<!--Jquery.Sparkline js -->
<script src="<?php echo e(asset('external2/js/vendors/jquery.sparkline.min.js')); ?>"></script>

<!--Circle-Progress js -->
<script src="<?php echo e(asset('external2/js/vendors/circle-progress.min.js')); ?>"></script>

<!--Jquery.rating js -->
<script src="<?php echo e(asset('external2/plugins/jquery.rating/jquery.rating-stars.js')); ?>"></script>

<!--Bootstrap.min js-->
<script src="<?php echo e(asset('external2/plugins/bootstrap/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

<!-- Custom scroll bar Js-->
<script src="<?php echo e(asset('external2/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>

<!--Sticky JS -->
<script src="<?php echo e(asset('external2/js/sticky.js')); ?>"></script>

<!--Sidemenu js-->
<script src="<?php echo e(asset('external2/plugins/side-menu/side-menu.js')); ?>"></script>

<!-- Sidemenu-responsive-tabs js-->
<script src="<?php echo e(asset('external2/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js')); ?>"></script>
<script src="<?php echo e(asset('external2/js/left-menu.js')); ?>"></script>

<!--Sticky JS -->
<script src="<?php echo e(asset('external2/js/sticky.js')); ?>"></script>

<!--Horizontal js -->
<script src="<?php echo e(asset('external2/plugins/horizontal-menu/horizontal-menu.js')); ?>"></script>

<!--Select2 js -->
<script src="<?php echo e(asset('external2/plugins/select2/select2.full.min.js')); ?>"></script>

<!-- peitychart -->
<script src="<?php echo e(asset('external2/plugins/peitychart/jquery.peity.min.js')); ?>"></script>

<!-- Timepicker js -->
<script src="<?php echo e(asset('external2/plugins/jquery.timepicker/jquery.timepicker.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/jquery.timepicker/toggles.min.js')); ?>"></script>

<!-- Datepicker js -->
<script src="<?php echo e(asset('external2/plugins/date-picker/date-picker.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/date-picker/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/jquery.mask/jquery.maskedinput.js')); ?>"></script>

<!--MutipleSelect js-->
<script src="<?php echo e(asset('external2/plugins/multipleselect/multiple-select.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/multipleselect/multi-select.js')); ?>"></script>

<!-- Inline js -->
<script src="<?php echo e(asset('external2/js/select2.js')); ?>"></script>

<!-- Gallery js -->
<script src="<?php echo e(asset('external2/plugins/gallery/picturefill.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/gallery/lightgallery.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/gallery/lg-pager.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/gallery/lg-autoplay.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/gallery/lg-fullscreen.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/gallery/lg-zoom.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/gallery/lg-hash.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/gallery/lg-share.js')); ?>"></script>
<script src="<?php echo e(asset('external2/js/gallery.js')); ?>"></script>

<!--Counters -->
<script src="<?php echo e(asset('external2/plugins/counters/counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/counters/waypoints.min.js')); ?>"></script>

<!-- Sidebar js -->
<script src="<?php echo e(asset('external2/plugins/sidebar/sidebar.js')); ?>"></script>

<!-- Custom js -->
<script src="<?php echo e(asset('external2/js/custom.js')); ?>"></script>

<!-- date picker -->
<script>
	$(document).ready(function() {
		var date_input = $('input[name="startdate"]'); //our date input has the name "date"
		var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
		var options = {
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		};
		date_input.datepicker(options);
	})
</script>

<script>
	$(document).ready(function() {
		var date_input = $('input[name="inspectiondate"]'); //our date input has the name "date"
		var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
		var options = {
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		};
		date_input.datepicker(options);
	})
</script>

<script>
	$(document).ready(function() {
		var date_input = $('input[name="lcduedate"]'); //our date input has the name "date"
		var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
		var options = {
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		};
		date_input.datepicker(options);
	})
</script>

<script>
	$(document).ready(function() {
		var date_input = $('input[name="clientduedate"]'); //our date input has the name "date"
		var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
		var options = {
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		};
		date_input.datepicker(options);
	})
</script>

<!-- dynamic amphur dropdown -->



<script type="text/javascript">
	$('.province').change(function() {
		if ($(this).val() != '') {
			var select = $(this).val();
			var _token = $('input[name="_token"]').val();
			$.ajax({
				url: "<?php echo e(route('dropdown.fetch')); ?>",
				method: "POST",
				data: {
					select: select,
					_token: _token
				},
				success: function(result) {
					$('.amphures').html(result);
				}
			})
		}

	});
</script>
<script type="text/javascript">
	$('.amphures').change(function() {
		if ($(this).val() != '') {
			var select = $(this).val();
			var _token = $('input[name="_token"]').val();
			$.ajax({
				url: "<?php echo e(route('dropdown.fetch_amphure')); ?>",
				method: "POST",
				data: {
					select: select,
					_token: _token
				},
				success: function(result) {
					$('.district').html(result);
				}
			})
		}

	});
</script>
<script type="text/javascript">
	$('.transname').change(function() {
		if ($(this).val() != '') {
			var select = $(this).val();
			var _token = $('input[name="_token"]').val();
			$.ajax({
				url: "<?php echo e(route('report.fetch')); ?>",
				method: "POST",
				data: {
					select: select,
					_token: _token
				},
				success: function(result) {
					$('.transtation').html(result);
				}
			})
		}
	});

	//varant for P.6 Table 
	var a1 = document.getElementsByName('govprice_row1a')[0];
	var a2 = document.getElementsByName('govprice_row2a')[0];
	var b2 = document.getElementsByName('govprice_row2b')[0];
	var d2 = document.getElementsByName('govprice_row2d')[0];
	var a3 = document.getElementsByName('govprice_row3a')[0];
	var b3 = document.getElementsByName('govprice_row3b')[0];
	var d3 = document.getElementsByName('govprice_row3d')[0];
	var a4 = document.getElementsByName('govprice_row4a')[0];
	var c4 = document.getElementsByName('govprice_row4c')[0];
	var d4 = document.getElementsByName('govprice_row4d')[0];
	var a5 = document.getElementsByName('govprice_row5a')[0];

	$("input[name = 'govprice_row2a']").keyup(
		function update_a1() {
			a1.value = +a2.value + +a3.value + +a4.value;
		}
	);
	$("input[name = 'govprice_row3a']").keyup(
		function update_a1() {
			a1.value = +a2.value + +a3.value + +a4.value;
		}
	);
	$("input[name = 'govprice_row3b']").keyup(
		function update_d3() {
			d3.value = Math.round(a3.value * b3.value);
			a5.value = Math.round(+d2.value + +d3.value + +d4.value);
		}
	);
	$("input[name = 'govprice_row4a']").keyup(
		function update_a1() {
			a1.value = +a2.value + +a3.value + +a4.value;
		}
	);
	$("input[name = 'govprice_row4c']").keyup(
		function update_d4() {
			d4.value = a4.value * c4.value;
			a5.value = Math.round(+d2.value + +d3.value + +d4.value);
		}
	);

	$("input[name = 'govprice_row2b']").keyup(function() {
		d2.value = Math.round(a2.value * b2.value);
		b3.value = Math.round(b2.value / 2);
		d3.value = Math.round(a3.value * b3.value);
		a5.value = Math.round(+d2.value + +d3.value + +d4.value);
	});
</script>
</body>

</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/report/footer.blade.php ENDPATH**/ ?>