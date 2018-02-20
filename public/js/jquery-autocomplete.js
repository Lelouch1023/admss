$( function() {

            
        var baseURL = $(this).data("url");
            $( "#searchItem" ).autocomplete({
              source: appURL + '/search'
            });
          } );


$('#searchItem').keypress(function (e) {
                if (e.which == 13) {
                    $('#searchForm').submit();
                    return false;   
                }
 });