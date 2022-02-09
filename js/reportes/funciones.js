$(document).ready(function(){
    listar();
    });


$("#formEmpleado").on('submit', function(e){
              e.preventDefault();        
              $.ajax({
                  type: 'POST',
                  url: '../ajaxphp/empleados/guardar.php',
                  data: new FormData(this),
                  dataType: 'json',
                  contentType: false,
                  cache: false,
                  processData:false,
                beforeSend: function() {
                },
                success: function(response){
                    document.getElementById('formEmpleado').reset();
                    Swal.fire(
                          'Solicitud!',
                          response.message,
                          'success'
                        )

                                
                },
                error: function(error){
                    Swal.fire(
                              'Error!',
                              'Contacta al proveedor, no se pudo realizar su operación.',
                              'error'
                            )

                    
                  }
              })
    });

$("#updateformEmpleado").on('submit', function(e){
              e.preventDefault();        
              $.ajax({
                  type: 'POST',
                  url: '../ajaxphp/empleados/actualizar.php',
                  data: new FormData(this),
                  dataType: 'json',
                  contentType: false,
                  cache: false,
                  processData:false,
                beforeSend: function() {
                },
                success: function(response){
                     Swal.fire(
                          'Solicitud!',
                          response.message,
                          'success'
                        )
                                
                },
                error: function(error){
                   Swal.fire(
                              'Error!',
                              'Contacta al proveedor, no se pudo realizar su operación.',
                              'error'
                            )

                    
                  }
              })
    });

function listar(){
         var estado = "1";
        jQuery.post("../ajaxphp/empleados/listar.php", { 
        estado: estado },
        function(data, textStatus){
            $('#mostrarDatos').html(data);
        })
        }

function eliminar(id){
            var id_empleado = id;
             Swal.fire({
              title: 'Estadas seguro?',
              text: "Estas seguro de eliminar el empleado!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si'
            }).then((result) => {
              if (result.isConfirmed) {
                  $.ajax({
               type: 'POST',
               url: '../ajaxphp/empleados/eliminar.php',
               data: { id_empleado: id_empleado },
                success: function(response){
   
                 Swal.fire(
                  'Solicitud!',
                  'El empleado fue eliminado correctamente.',
                  'success'
                        )
                listar();
                 
              
                } ,
                error: function(error){
                   Swal.fire(
                              'Error!',
                              'Contacta al proveedor, no se pudo realizar su operación.',
                              'error'
                            )

                    
                  }


              })
                
            }
        }) 
    }

function buscar(){
var f1 = $('#fecha1').val();
var f2 = $('#fecha2').val();
        jQuery.post("../ajaxphp/empleados/buscar.php", { 
        f1: f1, f2: f2 },
        function(data, textStatus){
            $('#mostrarDatos').html(data);
        })
}


function exportar(){
    var f1 = $('#fecha1').val();
    var f2 = $('#fecha2').val();
    page = '../ajaxphp/exportar.php?fecha1='+fecha1+'&fecha2='+fecha2+'&search='+search;
     window.location = page
}