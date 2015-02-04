$(function() {
    $(".asig").click(function() {
        cadena=$(this).val();
        var pedazo = cadena.split(",");
        idevento=pedazo[0];
        evento=pedazo[1];evento = evento.toUpperCase();
         $.post('index.php', 'controller=asistenciaalumno&action=mostrar_alumnos&idevento='+idevento+'&evento='+evento, function(data) {
            console.log(data);
            $("#lista_eventos").empty().append(data);
        });
       
    });
    $("#lista").css("display","none");
  
    
    $.post('index.php', 'controller=asistenciaalumno&action=nota_de_tutoria', function(data) {
            console.log(data);
            $("#nota").empty().append(data);
        });

});

