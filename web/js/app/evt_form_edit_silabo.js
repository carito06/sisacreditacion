
//editar silabo
	//competencia
	 $( "#comp" ).click(function() {
     cp= $("#comp").html();
     $("#edits").val(cp);
     $(".modal-title").html("competencia");
     $("#soyunid").addClass("comp");

     //$("#dialogoo").title("competencia");
      //$( "#dialogoo" ).dialog( "open" );
    });

	//metodologia 
      $( "#met" ).click(function() {
      me=  $("#met").html();
      $("#edits").val(me);
      $(".modal-title").html("metodologia");
      $("#soyunid").addClass("met");
    });

    //objetivo
      $( "#ob" ).click(function() {
      ob=  $("#ob").html();
      $("#edits").val(ob);
      $(".modal-title").html("objetivo");
      $("#soyunid").addClass("ob");
    });

    //sumilla
    $( "#su" ).click(function() {
    su=  $("#su").html();
    $("#edits").val(su);
	$(".modal-title").html("sumilla");
  $("#soyunid").addClass("su");
    });


var ii=2;

function agregarUni(){
  por= $("#porcentaje").val();
  var html = "";
  html += "<tr>";
  html += "<td><input type='text' id='nombreunidad"+ii+"' class='form-control validar' name='nombreuni[]' /></td>";
  html += "<td><input type='text' class='form-control validar' name='competencia[]' /></td>";
  html += "<td><input type='text' class='form-control validar' name='descripcion[]'  /></td>";
  html += "<td><input type='number' class='form-control validar' id='duracion"+ii+"' name='duracion[]'/></td>";
  html += "<td><input type='text' id='porcentaje' class='form-control validar' name='porcentaje[]' value='"+(100-por)+"' placeholder='%'/></td>";
  html += "<td><button type='button' class='btn btn-default' onClick='semana("+ii+")'>+</button></td>";
  html += "</tr>";
    
    h4 = "<div id='h"+ii+"'></div>"; 

   $(html).appendTo("#tabla tbody");
   $(h4).appendTo("#a");
   ii++;
}


// Evento que selecciona la fila y la elimina 
    $(".eliminar").click(function(){
      var trs=$("#tabla tr").length;
            alert(trs);
             if(trs>1){
                    // Eliminamos la columna
                $("#tabla tbody>tr:nth-child("+(parseInt(trs)-1)+"").remove();
            }
    });

//silabo
//$("#guardarS").click(function(){
  //var idsilabo=$("#silabo").val();
  //var campo=$("#edits").html();
  //alert(idsilabo+""+campo);
  //alert("asdfas");
//});
function guardarre(){
  var idsilabo=$("#silabo").val();
  var campo=$(".modal-body #edits").val();
  var nom= $("#myModalLabel").html();
  //alert(idsilabo+""+campo+""+nom);

  var t= $("#soyunid").attr('class');
  $("#"+t).html(campo);



  $.post('index.php', 'controller=cursosemestre&action=editarSilabo&codsilabo=' + idsilabo +'&campot='+ campo +'&nombre='+ nom, function(data) {
           // $("#cursodocente").empty().append(data);
  });
  $(".modal-body #edits").val("");
}
