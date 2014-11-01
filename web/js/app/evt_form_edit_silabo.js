// eliminar filas
    $(".eliminar").click(function(){
        var parent = $(this).parent();
        $(parent).remove();
    });

//modal para editar
    $( "#dialogoo" ).dialog({
        autoOpen: false,
        show: {
          effect: "blind",
          duration: 200
        },
        hide: {
          effect: "explode",
          duration: 300
        },
        buttons: {
          "Grabar": function() {
            $( this ).dialog( "close" );
          },
          Cancel: function() {
            $( this ).dialog( "close" );
          }
        }
         
      });

//editar silabo
 $( "#comp" ).click(function() {
     cp= $("#comp").html();
     $("#edit").html(cp);
     $("#dialogoo").title("competencia");
      $( "#dialogoo" ).dialog( "open" );
    });
      $( "#met" ).click(function() {
      me=  $("#met").html();
      $("#edit").html(me);
      $( "#dialogoo" ).dialog( "open" );

    });
      $( "#ob" ).click(function() {
      me=  $("#ob").html();
      $("#edit").html(me);
      $( "#dialogoo" ).dialog( "open" );

    });
    $( "#su" ).click(function() {
      me=  $("#su").html();
      $("#edit").html(me);
      $( "#dialogoo" ).dialog( "open" );

    });
 