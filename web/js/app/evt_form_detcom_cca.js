$(function() {
    
    $( "#save" ).click(function(){
        bval = true;  
//        bval = bval && $( "#idcomision" ).required();
//        bval = bval && $( "#nombres" ).required();
      
        if ( bval ) {
            $("#frm").submit();
            alert("DATOS GUARDADOS");
            window.close();
        }
        else{alert("LLENAR TODOS LOS CAMPOS!!!");}
        return false;
    });   
});