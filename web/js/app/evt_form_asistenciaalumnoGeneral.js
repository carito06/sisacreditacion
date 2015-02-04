$(function() {
    $(".asig").click(function() {
        cadena=$(this).val();
        var pedazo = cadena.split(",");
        idevento=pedazo[0];
        evento=pedazo[1];evento = evento.toUpperCase();
         $.post('index.php', 'controller=asistenciaalumnoGeneral&action=lista_alumnosf_tutoria&idevento='+idevento+'&evento='+evento, function(data) {
            console.log(data);
            $("#lista_eventos").empty().append(data);
        });
       
    })
    $("#lista").css("display","none");

    $("#save").click(function() {
        bval = true;
        
        if (bval) {
            $("#frm").submit();
        }
        return false;
    });
});

