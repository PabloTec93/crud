$(document).ready(function(){
    listar();
    });


$("#formforma").on('submit', function(e){
              e.preventDefault();        
              $.ajax({
                  type: 'POST',
                  url: '../ajaxphp/forma/guardar.php',
                  data: new FormData(this),
                  dataType: 'json',
                  contentType: false,
                  cache: false,
                  processData:false,
                beforeSend: function() {
                },
                success: function(response){
                    document.getElementById('formforma').reset();
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

$("#updateformForma").on('submit', function(e){
              e.preventDefault();        
              $.ajax({
                  type: 'POST',
                  url: '../ajaxphp/forma/actualizar.php',
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
        jQuery.post("../ajaxphp/forma/listar.php", { 
        estado: estado },
        function(data, textStatus){
            $('#mostrarDatos').html(data);
        })
        }

function eliminar(id){
            var id_formaPago = id;
             Swal.fire({
              title: 'Estadas seguro?',
              text: "Estas seguro de eliminar el forma!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si'
            }).then((result) => {
              if (result.isConfirmed) {
                  $.ajax({
               type: 'POST',
               url: '../ajaxphp/forma/eliminar.php',
               data: { id_formaPago: id_formaPago },
                success: function(response){
   
                 Swal.fire(
                  'Solicitud!',
                  'El forma fue eliminado correctamente.',
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
