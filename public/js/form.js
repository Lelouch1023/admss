$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


function approve(id){
	var values = {
		'area_assign' : $("#area_assign"+id).val(),
		'user_id' : $('#userid_'+id).val(),
		'approve' : true
	}
		$.ajax({
	        url: 'admin',
	        type: "POST",
	        data: values,
	        success: function(data){
	    	if(data.success == true){

	    	  	$('#containeradmin').html(data.html);

	    		$('#successmsg').show(500).fadeOut(2000);
  				
	    	  // console.log(data);
	    		}	
	    	  	
       		},
      		
			
   		});



}
function assign(id){
	var values = {
		'area_handled' : $("#area_handled"+id).val(),
		'user_id' : $('#user'+id).val(),
		'assign' : true
	}
		$.ajax({
	        url: 'admin',
	        type: "POST",
	        data: values,
	        success: function(data){
	    	if(data.success == true){

	    	  	$('#containeradmin').html(data.html);
	    		//$('#successmsg').show(500).fadeOut(2000);
  				$('#mytab li a[href="#chairstab"]').tab('show');
	  
	    		}	
	    	  	
       		}, 
      		
			
   		});
}

function giveadmin(id){
	var values = {
		'user_id' : $('#user'+id).val(),
		'giveadmin' : true
	}
		$.ajax({
	        url: 'admin',
	        type: "POST",
	        data: values,
	        success: function(data){
	    	if(data.success == true){

	    	  	$('#containeradmin').html(data.html);
	    		//$('#successmsg').show(500).fadeOut(2000);
  				$('#mytab li a[href="#chairstab"]').tab('show');
	  
	    		}	
	    	  	
       		}, 
      		
			
   		});
}

function revokeadmin(id){
	var values = {
		'user_id' : $('#user'+id).val(),
		'revokeadmin' : true
	}
		$.ajax({
	        url: 'admin',
	        type: "POST",
	        data: values,
	        success: function(data){
	    	if(data.success == true){

	    	  	$('#containeradmin').html(data.html);
	    		//$('#successmsg').show(500).fadeOut(2000);
  				$('#mytab li a[href="#chairstab"]').tab('show');
	  
	    		}	
	    	  	
       		}, 
      		
			
   		});
}