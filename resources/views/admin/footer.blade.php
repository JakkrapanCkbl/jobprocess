<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fas fa-angle-up "></i></a>

<!--Jquery js -->
<script src="{{asset('external2/js/vendors/jquery-3.2.1.min.js')}}"></script>

<!--Jquery.Sparkline js -->
<script src="{{asset('external2/js/vendors/jquery.sparkline.min.js')}}"></script>

<!--Circle-Progress js -->
<script src="{{asset('external2/js/vendors/circle-progress.min.js')}}"></script>

<!--Jquery.rating js -->
<script src="{{asset('external2/plugins/jquery.rating/jquery.rating-stars.js')}}"></script>

<!--Bootstrap.min js-->
<script src="{{asset('external2/plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('external2/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Custom scroll bar Js-->
<script src="{{asset('external2/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!--Sticky JS -->
<script src="{{asset('external2/js/sticky.js')}}"></script>

<!--Sidemenu js-->
<script src="{{asset('external2/plugins/side-menu/side-menu.js')}}"></script>

<!-- Sidemenu-responsive-tabs js-->
<script src="{{asset('external2/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js')}}"></script>
<script src="{{asset('external2/js/left-menu.js')}}"></script>

<!--Sticky JS -->
<script src="{{asset('external2/js/sticky.js')}}"></script>

<!--Horizontal js -->
<script src="{{asset('external2/plugins/horizontal-menu/horizontal-menu.js')}}"></script>

<!--Select2 js -->
<script src="{{asset('external2/plugins/select2/select2.full.min.js')}}"></script>

<!-- peitychart -->
<script src="{{asset('external2/plugins/peitychart/jquery.peity.min.js')}}"></script>

<!-- Timepicker js -->
<script src="{{asset('external2/plugins/jquery.timepicker/jquery.timepicker.js')}}"></script>
<script src="{{asset('external2/plugins/jquery.timepicker/toggles.min.js')}}"></script>

<!-- Datepicker js -->
<script src="{{asset('external2/plugins/date-picker/date-picker.js')}}"></script>
<script src="{{asset('external2/plugins/date-picker/jquery-ui.js')}}"></script>
<script src="{{asset('external2/plugins/jquery.mask/jquery.maskedinput.js')}}"></script>

<!--MutipleSelect js-->
<script src="{{asset('external2/plugins/multipleselect/multiple-select.js')}}"></script>
<script src="{{asset('external2/plugins/multipleselect/multi-select.js')}}"></script>

<!-- Inline js -->
<script src="{{asset('external2/js/select2.js')}}"></script>

<!-- Gallery js -->
<script src="{{asset('external2/plugins/gallery/picturefill.js')}}"></script>
<script src="{{asset('external2/plugins/gallery/lightgallery.js')}}"></script>
<script src="{{asset('external2/plugins/gallery/lg-pager.js')}}"></script>
<script src="{{asset('external2/plugins/gallery/lg-autoplay.js')}}"></script>
<script src="{{asset('external2/plugins/gallery/lg-fullscreen.js')}}"></script>
<script src="{{asset('external2/plugins/gallery/lg-zoom.js')}}"></script>
<script src="{{asset('external2/plugins/gallery/lg-hash.js')}}"></script>
<script src="{{asset('external2/plugins/gallery/lg-share.js')}}"></script>
<script src="{{asset('external2/js/gallery.js')}}"></script>

<!--Counters -->
<script src="{{asset('external2/plugins/counters/counterup.min.js')}}"></script>
<script src="{{asset('external2/plugins/counters/waypoints.min.js')}}"></script>

<!-- Sidebar js -->
<script src="{{asset('external2/plugins/sidebar/sidebar.js')}}"></script>

<!-- Custom js -->
<script src="{{asset('external2/js/custom.js')}}"></script>

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
				url: "{{route('dropdown.fetch')}}",
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


</body>

</html>