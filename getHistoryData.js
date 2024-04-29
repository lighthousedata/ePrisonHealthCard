$(document).ready(function(){  
	// code to get all records from table via select box
	$("#get_history").change(function() {    
		var prisoners_no = $(this).find(":selected").val();
		var dataString = 'histprisoners_no='+ prisoners_no;    
		$.ajax({
			url: 'sendDataToHistoryFile.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(employeeData) {
			   if(employeeData) {
					$("#heading").show();		  
					$("#no_records").hide();					
					$("#test_type").text(employeeData.test_type);
					$("#service_date").text(employeeData.service_date);
					$("#age").text(employeeData.age);
					$("#tested_for_hiv").text(employeeData.tested_for_hiv);
					$("#results").text(employeeData.results);
					$("#records").show();		 
				} else {
					$("#heading").hide();
					$("#records").hide();
					$("#no_records").show();
				}   	
			} 
		});
 	}) 
});
