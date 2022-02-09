$(document).ready(function(){
    listar();
    });


$("#formsueldo").on('submit', function(e){
              e.preventDefault();        
              $.ajax({
                  type: 'POST',
                  url: '../ajaxphp/sueldo/guardar.php',
                  data: new FormData(this),
                  dataType: 'json',
                  contentType: false,
                  cache: false,
                  processData:false,
                beforeSend: function() {
                },
                success: function(response){
                    document.getElementById('formsueldo').reset();
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

$("#updateformsueldo").on('submit', function(e){
              e.preventDefault();        
              $.ajax({
                  type: 'POST',
                  url: '../ajaxphp/sueldo/actualizar.php',
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
        jQuery.post("../ajaxphp/sueldo/listar.php", { 
        estado: estado },
        function(data, textStatus){
            $('#mostrarDatos').html(data);
        })
        }

function eliminar(id){
            var id_sueldo = id;
             Swal.fire({
              title: 'Estadas seguro?',
              text: "Estas seguro de eliminar el sueldo!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si'
            }).then((result) => {
              if (result.isConfirmed) {
                  $.ajax({
               type: 'POST',
               url: '../ajaxphp/sueldo/eliminar.php',
               data: { id_sueldo: id_sueldo },
                success: function(response){
   
                 Swal.fire(
                  'Solicitud!',
                  'El sueldo fue eliminado correctamente.',
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
