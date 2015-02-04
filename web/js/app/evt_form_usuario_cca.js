$(function() {    
    $( "#save" ).click(function(){
        bval = true; 
        
        bval = bval && $( "#nombres" ).required();
        bval = bval && $( "#apellidos" ).required();       
        bval = bval && $( "#dni" ).required();
        bval = bval && $( "#sexo" ).required();
        bval = bval && $( "#direccion" ).required();
        bval = bval && $( "#telefono" ).required();
        if ( bval ) {
            $("#frm").submit();
            alert("DATOS GUARDADOS");
            window.close();
        }
        else{alert("LLENAR TODOS LOS CAMPOS!!!");}
        return false;
    });   
});   