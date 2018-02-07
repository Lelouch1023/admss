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

//script for keywords

$(document).ready(function () {
    $('#bootstrapTagsInputForm')
        .find('[name="cities"]')
            // Revalidate the cities field when it is changed
            .change(function (e) {
                $('#bootstrapTagsInputForm').formValidation('revalidateField', 'cities');
            })
            .end()
        .find('[name="countries"]')
            // Revalidate the countries field when it is changed
            .change(function (e) {
                $('#bootstrapTagsInputForm').formValidation('revalidateField', 'countries');
            })
            .end()
        .formValidation({
            framework: 'bootstrap',
            excluded: ':disabled',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                cities: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter at least one city you like the most.'
                        }
                    }
                },
                countries: {
                    validators: {
                        callback: {
                            message: 'Please enter 2-4 countries you like most.',
                            callback: function (value, validator, $field) {
                                // Get the entered elements
                                var options = validator.getFieldElements('countries').tagsinput('items');
                                return (options !== null && options.length >= 2 && options.length <= 4);
                            }
                        }
                    }
                }
            }
        });
});

