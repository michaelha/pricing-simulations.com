
</div><!--/.fluid-container-->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="bootstrap/docs/assets/js/jquery.js"></script>
<script src="bootstrap/docs/assets/js/bootstrap-transition.js"></script>
<script src="bootstrap/docs/assets/js/bootstrap-alert.js"></script>
<script src="bootstrap/docs/assets/js/bootstrap-modal.js"></script>
<script src="bootstrap/docs/assets/js/bootstrap-dropdown.js"></script>
<script src="bootstrap/docs/assets/js/bootstrap-scrollspy.js"></script>
<script src="bootstrap/docs/assets/js/bootstrap-tab.js"></script>
<script src="bootstrap/docs/assets/js/bootstrap-tooltip.js"></script>
<script src="bootstrap/docs/assets/js/bootstrap-popover.js"></script>
<script src="bootstrap/docs/assets/js/bootstrap-button.js"></script>
<script src="bootstrap/docs/assets/js/bootstrap-collapse.js"></script>
<script src="bootstrap/docs/assets/js/bootstrap-carousel.js"></script>
<script src="bootstrap/docs/assets/js/bootstrap-typeahead.js"></script>
<script src="datepicker/js/bootstrap-datepicker.js"></script>


<script>
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'mm-dd-yyyy'
			});
			$('#dp2').datepicker();
			$('#dp3').datepicker();
			
			
			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});
		});
	</script>
	
	
</body>
</html>