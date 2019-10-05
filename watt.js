$(document).ready(function() {

	$("#appliance").on('change', function() {
		//alert("it changes");
		var electronicId = $(this).val();
		
		if (electronicId) {
			$.ajax({
				type: 'POST',
				url: 'process.php',
				data: {
					"electronicId": electronicId
				},
				success: function(html) {
					$('#watts').html(html);
				}
			});
		} else {
			$('#watts').html('<option value="">Select Electronics First</option>');
		}
	});
});