// funcion para añadir registros o actualizar en todos los formularios menos en los de conta
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

// funcion para añadir registros o actualizar en todos los formularios  menos en los de conta
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

// funcion para añadir registros solo en los de conta
// function addline(formulario,ruta) {
function addline() {
    let controlfecha;
    controlfecha=controlperiodo();
    if(controlfecha==0){
        var token= $('#token').val();
        ruta="/conta/store";
        formulario='creaForm';
        $.ajaxSetup({
            headers: { "X-CSRF-TOKEN": $('#token').val() },
        });
        var formElement = document.getElementById(formulario);
        var formData = new FormData(formElement);
        var fila="<tr>";
        var id='';
        var cierre='';
        var form='';
        var i="0";
        var clase=""

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
                $("#provcli_id").val('-');
                // $('#provcli_id').val('341');
                // $("#provcli_id"). empty();
                $('#provcli_id').val(null).trigger('change');
                $.each(data,function(key,value){
                    if (i>6) clase='class="text-right"';
                    i++;
                    if(key=='id') {
                        id="'"+value+"'";
                        form='formDelete'+value;
                    };
                    if(key=='token') token=value
                    else fila=fila + '<td '+clase+'>'+value+'</td>' ;
                });
                cierre="<td class='text-right m-0 pr-3'>"+
                        "<form  id="+form+">"+
                        "<input type='hidden' name='_method' value='POST' />"+
                        "<input type='hidden' name='_token' value="+token+" />"+
                        "<a href='#!' class='btn-delete' title='Eliminar' " + 
                        'onclick="eliminarfila('+id+')"><i class="far fa-trash-alt text-danger fa-lg ml-1"></i></a>'+
                        "</form>";

                fila=fila+cierre+'</tr>';
                //  $('#tablaasientos tr:last').before(fila);
                // $("#tablaasientos > tbody").append(fila);
                // $('#bodyasientos tr:last').after(fila);
                $('#bodyasientos tr:first').before(fila);
                $('#fechaasiento').focus();

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
 }
 
// funcion para eliminar registros solo en los de conta
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

// funcion para controlar factura repetida en conta
function controlfactura(formulario,ruta) {
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
             if (data>0)
             $("#controlfactura").modal()
         },
     });
 }


// funcion para saltar de input en input con ENTER
document.addEventListener('keypress', function(evt) {
    // Si el evento NO es una tecla Enter
    if (evt.key !== 'Enter') {
        return;
    }
    let element = evt.target;
    // Si el evento NO fue lanzado por un elemento con class "focusNext"
    if (!element.classList.contains('focusNext')) {
      return;
    }
    // AQUI logica para encontrar el siguiente
    let tabIndex = element.tabIndex + 1;
    var next = document.querySelector('[tabindex="'+tabIndex+'"]');
    // Si encontramos un elemento
    if (next) {
      next.focus();
      event.preventDefault();
    }
  });

// Funcion para ejecutar guardar en conta sin tener que hacer clic con CTRL-S (desactiva el CTRL-S por defecto)
$(document).keydown(function (e) {
    e = e || event;
    if (e.ctrlKey && String.fromCharCode(e.keyCode) == 'S')
    {
        e.preventDefault();
        // document.getElementById("btn_nuevo").click();
        $('#btn_add').click();
    }
});


// dar formato a numero
function number_format(amount, decimals) {

    amount += ''; // por si pasan un numero en vez de un string
    amount = parseFloat(amount.replace(/[^0-9\.]/g, '')); // elimino cualquier cosa que no sea numero o punto

    decimals = decimals || 0; // por si la variable no fue fue pasada

    // si no es un numero o es igual a cero retorno el mismo cero
    if (isNaN(amount) || amount === 0) 
        return parseFloat(0).toFixed(decimals);

    // si es mayor o menor que cero retorno el valor formateado como numero
    amount = '' + amount.toFixed(decimals);

    var amount_parts = amount.split('.'),
        regexp = /(\d+)(\d{3})/;

    while (regexp.test(amount_parts[0]))
        amount_parts[0] = amount_parts[0].replace(regexp, '$1' + ',' + '$2');

    return amount_parts.join('.');
}

function controlperiodo(){
    let f=$('#fechaasiento').val();
    var date = new Date(f);
    let periodo=$("#periodo").val();
    let anyo=$("#anyo").val();
    month = date.getMonth() + 1;
    year = date.getFullYear();
    let mensaje="La fecha no pertenece al periodo. Corríjala.";
    let esfechamala=0;

    switch (periodo) {
        case '13':
            if(year!=anyo || month>3){
                esfechamala=1;
            }
            break;
        case '14':
            if(year!=anyo || month>6 || month<4){
                esfechamala=1;
            }
            break;
        case '15':
            if(year!=anyo || month>9 || month<7){
                esfechamala=1;
            }
            break;
        case '16':
            if(year!=anyo || month<10){
                esfechamala=1;
            }
            break;
        default:
            if(year!=anyo || month!=periodo){
                esfechamala=1;
            }
    }
    if (esfechamala==1){
        toastr.error(mensaje,{
         "closeButton": true,
         "progressBar":true,
         "positionClass": "toast-top-center",
         "options.escapeHtml" : true,
         "showDuration": "300",
         "hideDuration": "1000",
         "timeOut": 0,
        });
    }
    return esfechamala;
};
