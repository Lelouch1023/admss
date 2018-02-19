$.ajaxSetup({

  headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

  }

});


function approve(id){
	var values = {
		'_token' : $('#tokenadm').val(),
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
		'_token' : $('#tokenadm').val(),
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
	  			$("#reqtab").removeClass("active");
	  			$("#chairtab").addClass("active");
	  			
	    		}	
	    	  	
       		}, 
      		
			
   		});
}

function giveadmin(id){
	var values = {
		'_token' : $('#tokenadm').val(),
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
		'_token' : $('#tokenadm').val(),
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

function approvetag(id){
	var values = {
		
		'_token' : $('#tokentag').val(),
		'filename' : $('#file_'+id).val(),
		'param' : $('#param_'+id).val(),
		'approvetag' : true
	}
		$.ajax({
	        url: 'pending',
	        type: "POST",
	        data: values,
	        success: function(data){	
		    	if(data.success == true){
		    		location.reload();
		    	   $('#pendingcontainer').html(data.html);
		    	   $('#pendingsucc').show(500).fadeOut(3000);
		    	   $('#msgid').fadeOut(3000);
		    	   // $('#actionmodal').modal('show');
  				
		    	}		
       		},			
   		});

  	//console.log(values);

}

function rejectag(id){
	var values = {
		
		'_token' : $('#tokentagdel').val(),
		'filename' : $('#file_'+id).val(),
		'param' : $('#param_'+id).val(),
		'rejectag' : true
	}
		$.ajax({
	        url: 'pending',
	        type: "POST",
	        data: values,
	        success: function(data){
		    	if(data.success == true){
		    		location.reload();
		    	   $('#pendingcontainer').html(data.html);
		    	   $('#pendingdel').show(500).fadeOut(2000);
  				
		    	}		
       		},			
   		});

 		// console.log("hello");

}

//for archive


// //once all field are set, submit
// $('#myForm').submit(function () { 
//     $.ajax({
//         type: "POST",
//         url: "find.php",
//         data: $('#myForm').serialize(),
//         success: function (data) {
//                 //success
//         }
//       });
//     });
// });
