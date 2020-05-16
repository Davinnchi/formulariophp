$( "#form" ).submit(function( event ) {
    alert( "Handler for .submit() called." );
    
    $("input").each(function() {
        var element = $(this);
        if (element.val() == "") {
            alert("Debe llenar todos los datos");
            return;
        }
        });
    event.preventDefault();
  });