$( function() {
            
            $( "#searchItem" ).autocomplete({
              source: 'http://adms.dev/search'
            });
          } );


$('#searchItem').keypress(function (e) {
                if (e.which == 13) {
                    $('#searchForm').submit();
                    return false;   
                }
 });