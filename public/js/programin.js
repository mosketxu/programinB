$(document).ready(function(){

    if(screen.height>1000) 
        $(".alturatabla").height(560);
    else 
        $(".alturatabla").height(340);

    $(".select2").select2({
        allowClear:true
    });
    
});

