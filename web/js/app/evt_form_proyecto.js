$(function () {
    
 
    var codigofacultad = $("#CodigoFacultad");
    var codigofaculta = $("#idejetematico");


    codigofaculta.change(function () {
        var ids = $(this).val();

        $.post('index.php', 'controller=linea_investigacion&action=getLinea_investigacion&idejetematico=' + ids, function (data) {
            $("#idlinea_investigacion").empty().append(data);
        });
    });

    codigofacultad.change(function () {
        var ids = $(this).val();

        $.post('index.php', 'controller=escuelaprofesional&action=getEscuelaProfesional&CodigoFacultad=' + ids, function (data) {
            $("#CodigoEscuela").empty().append(data);
        });
    });

    $("#departamento").change(function () {
        var ids = $(this).val();
        $.post('index.php', 'controller=proyecto&action=getListaProvincias&departamento=' + ids, function (data) {
//            console.log(data);
            //provincia
            $("#provincia").empty().append(data);
        });
    });


    $("#provincia").change(function () {
        var ids = $(this).val();
        $.post('index.php', 'controller=proyecto&action=getListaDistritos&provincia=' + ids, function (data) {
//            console.log(data);
            //distrito
            $("#distrito").empty().append(data);
        });
    });
    
    $("#distrito").change(function () {

        var ids = $(this).val();
        var valor = $("#distrito option:selected").html();

        var departamento = $("#departamento").val();
        var provincia = $("#provincia").val();
        html = "<tr id='"+(ids)+"'bgcolor='white' align='center'><td>"+ 
        departamento +
        "</td><td>" + provincia +
        "</td><td>" + valor +
        "</td> <td><a  class='btn btn-danger eli' id='"+(ids)+
        "' onclick='javascript:elimina(this);' style='font-size: 10px;padding: 4px;'>Eliminar</a></td> </tr>";


        $("#datos").append(html);
        $("#tablaubi").attr({'style': ' '});
        var select1 = $('#departamento');
        var select2 = $('#provincia');
        var select3 = $('#distrito');
        select1.val($('option:first', select1).val());
        select2.val($('option:first', select2).val());
        select3.val($('option:first', select3).val());
    });


    /*cont = 1;
    $("#newobj").click(function () {
        var captura = $("#objetivos_especificos").val();
        if (captura == "") {
            $("#objetivos_especificos").focus();
        } else {

            html = "<tr><td><font><font>Objetivo Especifico " + cont + "</font></font></td><td><textarea id='objetivos_especificos" + cont + "' name='objetivos_especificos" + cont + "' class='form-control' rows='3' style='margin-bottom: 0px;'></textarea></td></tr>";

            $("#ooo").append(html);
            $("#objetivos_especificos" + cont + "").val(captura);
            $("#conta").val(cont);
            $("#objetivos_especificos").val("");
            cont++;
        }

    });
    $("#dltobj").click(function () {
        cont--;
        $("#objetivos_especificos" + cont + "").remove();


    });*/




});
var validarForm = function ()
{
    $("#frm").submit();
}

function elimina(a){
    par=$(a).attr('id');
   $("#"+par).remove();
}