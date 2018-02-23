function loadd(id){
   
    var values = {
        '_token' : $('#token').val(),
        'areaid' : $('#areaarch_'+id).val(),
        'paramletarch' : true
    }
    $.ajax({
        type: "POST",
        url: "archive",
        data: values,
        success: function (data) {
                    //remove disabled from province and change the options
                    $('select[name="paramletarch"]').prop("disabled", false);
                    $('select[name="paramletarch"]').html(data.response);
                    //console.log(data);
        }
    });
    //console.log(values);
}

function unarchive(id){
   
    var values = {
        '_token' : $('#token').val(),
        'filename' : $('#filename_'+id).val(),
        //'paramletarch' : true
    }
    $.ajax({
        type: "POST",
        url: "unarchv",
        data: values,
        success: function (data) {
            if(data.success == true){
                    //remove disabled from province and change the options
                    location.reload();
                    $('#successmsgarch').show('800').fadeOut('2000');
                    //console.log(data);
            }
            if(data.success == false){
                    $('#errorarch').show('8000').delay('2000').fadeOut();
            }
            // console.log(data);
        }
    });
    //console.log(values);
}


function loadsub(id) {
    var vals = {
        '_token' : $('#token').val(),
        'areaid' : $('#areaarch_'+id).val(),
        'letter' : $('#paramletarch_'+id).val(),
        'subparam' : true

    }
   

    $.ajax({
        type: "POST",
        url: "archive",
        data: vals,
        success: function (data) {
                    //remove disabled from city and change the options
                    $('select[name="subparamarch"]').prop("disabled", false);
                    $('#mantagBtn').prop('disabled', false);
                    $('select[name="subparamarch"]').html(data.responsev);
                    //console.log(data);
        }
    });
    //console.log(vals);
}

function loadfiless(){

    var values = {
            'doctype' : $('#doctypeallfiles').val(),
            '_token' : $('#tokenaf').val(),

        };

        $.ajax({
            url: 'all_files',
            type: "POST",
            data: values,
            success: function(data){
                if(data.success == true){
                    
                   $('#filetcontainer').html(data.html);
                   $('#doctypeallfiles').val(data.doctype);
                   console.log(data);


                
                }       
            },          
        });

}