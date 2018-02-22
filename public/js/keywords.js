$(document).ready(function () {
    $('#bootstrapTagsInputForm')
        .find('[name="cities"]')
            // Revalidate the cities field when it is changed
            .change(function (e) {
                $('#bootstrapTagsInputForm').formValidation('revalidateField', 'keyword');
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
                keyword: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter at least one keyword.'
                        }
                    }
                },
               
            }
        });


    $('#inputTags')
        .find('[name="cities"]')
            // Revalidate the cities field when it is changed
            .change(function (e) {
                $('#inputTags').formValidation('revalidateField', 'cities');
            })
            .end()
        .find('[name="countries"]')
            // Revalidate the countries field when it is changed
            .change(function (e) {
                $('#inputTags').formValidation('revalidateField', 'countries');
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
            }
    //     });

    // $('#tag-form-submit').prop('disabled',true);
    // $('#keywordinp').keyup(function(){
    //     $('#tag-form-submit').prop('disabled', this.value == "" ? true : false);     
    })
});

function stoppedTyping(){

    var count = $('#keywordinp').val().length();
        // if(count == 0) { 
        //     document.getElementById('keysub').disabled = false; 
        // } else { 
        //     document.getElementById('keysub').disabled = true;
        // }
        console.log(count);
    }