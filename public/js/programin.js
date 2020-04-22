
function update(formulario,ruta,limpiar) {
   var token= $('#token').val();

   $.ajaxSetup({
       headers: { "X-CSRF-TOKEN": $('#token').val() },
   });
   var formElement = document.getElementById(formulario);
   var formData = new FormData(formElement);

   $.ajax({
       type:'POST',
        url: ruta,
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data) {
            toastr.success(data[1],{
            'progressBar':true,
            "positionClass":"toast-bottom-center",
            });
            if(limpiar==1)
            document.getElementById(formulario).reset();
        },
        error: function(data){
            var resp_e = data.responseJSON.errors;
            $.each(resp_e,function(key,value) {
                toastr.error(value,{
                    "closeButton": true,
                    "progressBar":true,
                    "positionClass": "toast-top-center",
                    "options.escapeHtml" : true,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": 0,
                });
            });
            console.log(data);
           }
    });
}

function eliminar(ruta,id) {
    $confirmacion=confirm('¿Seguro que lo quieres eliminar?');
    if($confirmacion){
        var row= $(this).parents('tr');
        var form=$('#formDelete'+id);
        var url=ruta;
        var data=form.serialize();

        $.post(url,data,function(result){
            toastr.success(result[1],{
                "progressBar":true,
                "positionClass":"toast-top-left",
                });
            toastr.options.positionClass = 'toast-top-left';
                $('#tr'+id).fadeOut();
            // row.fadeOut();
        }).fail(function(){
            toastr.error('No se ha eliminado ',{
                "closeButton": true,
                "progressBar":true,
                "positionClass":"toast-top-left",
                "options.escapeHtml" : true,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": 0,
            });
            console.log(data);
        });
    };
}

function addline(formulario,ruta) {
    var token= $('#token').val();
    $.ajaxSetup({
        headers: { "X-CSRF-TOKEN": $('#token').val() },
    });
    var formElement = document.getElementById(formulario);
    var formData = new FormData(formElement);
    var fila="<tr>";
    var id='';
    var cierre='';
    var form='';

    $.ajax({
        type:'POST',
         url: ruta,
         data:formData,
         cache:false,
         contentType: false,
         processData: false,
         success: function(data) {
             toastr.success('Asiento Añadido',{
             'progressBar':true,
             "positionClass":"toast-bottom-center",
             });
             document.getElementById(formulario).reset();
             $.each(data,function(key,value){
                if(key=='id') {
                    id="'"+value+"'";
                    form='formDelete'+value;
                };
                if(key=='token') {token=value;};
                 fila=fila + '<td>'+value+'</td>' ;
             });
             cierre="<td class='text-right m-0 pr-3'>"+
                    "<form  id="+form+">"+
                    "<input type='hidden' name='_method' value='POST' />"+
                    "<input type='hidden' name='_token' value="+token+" />"+
                    "<a href='#!' class='btn-delete' title='Eliminar' " + 
                    'onclick="eliminarfila('+id+')"><i class="far fa-trash-alt text-danger fa-lg ml-1"></i></a>'+
                    "</form>";

             fila=fila+cierre+'</tr>';
             document.getElementById("tablaasientos").insertRow(-1).innerHTML = fila;
         },
         error: function(data){
             var resp_e = data.responseJSON.errors;
             $.each(resp_e,function(key,value) {
                 toastr.error(value,{
                     "closeButton": true,
                     "progressBar":true,
                     "positionClass": "toast-top-center",
                     "options.escapeHtml" : true,
                     "showDuration": "300",
                     "hideDuration": "1000",
                     "timeOut": 0,
                 });
             });
             console.log(data);
            }
     });
 }
 

 function eliminarfila(id) {
     ruta = "/conta/" + id;
     
    $confirmacion=confirm('¿Seguro que lo quieres eliminar?');
    if($confirmacion){
        var row= $(this).parents('tr');
        var form=$('#formDelete'+id);
        var url=ruta;
        var data=form.serialize();

        $.post(url,data,function(result){
            toastr.success(result[1],{
                "progressBar":true,
                "positionClass":"toast-top-left",
                });
            toastr.options.positionClass = 'toast-top-left';
                $('#tr'+id).fadeOut();
            // row.fadeOut();
        }).fail(function(){
            toastr.error('No se ha eliminado ',{
                "closeButton": true,
                "progressBar":true,
                "positionClass":"toast-top-left",
                "options.escapeHtml" : true,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": 0,
            });
            console.log(data);
        });
    };
}
