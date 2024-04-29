$(document).ready(function(){  
	// code to get all records from table via select box
	$("#get_medicine").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'medid='+ id;    
		$.ajax({
			url: 'sendDataToMedicineFile.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(employeeData) {
			   if(employeeData) {
					$("#heading").show();		  
					$("#no_records").hide();					
					$("#quantity").text(employeeData.quantity);
					$("#description").text(employeeData.description);
					
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
