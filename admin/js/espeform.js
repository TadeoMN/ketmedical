// JavaScript Document

    $(".nuevaFoto").change(function()
    {
        var imagen=this.files[0];
        console.log("imagen",imagen);
            


/* Validamos que la imagen sea JPG o PNG */

    if (imagen["type"]!= "image/jpeg" && imagen["type"]!= "image/png")
    {
        $(".nuevaFoto").val("");

        Swal.fire({
              icon: 'error',
              title: 'Error al subir la imagen',
              text: 'La imagen debe estar en formato PNG o JPEG',
              confirmButtonText: "¡Cerrar!"
            });

    }
    else if (imagen["size"]> 2000000)
    {
            $(".nuevaFoto").val("");

                    Swal.fire({
                          icon: 'error',
                          title: 'Error al subir la imagen',
                          text: 'La imagen no debe pesar mas de 2 MB',
                          confirmButtonText: "¡Cerrar!"
                        });
    }
    else
    {
        /*var datosImagen= new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load",function(event)
        {
            var RutaImagen=event.target.result;
            $(".previsualizar").attr("src",RutaImagen);

        })*/
    }

})



$(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).attr('Especialidad');
     $(".modal-body #esp_nuevo").val( myBookId );

      var Imagen = $(this).attr('Imagen');
     $(".modal-body #Imagen").val( Imagen );

       var idEspe = $(this).attr('idEspe');
     $(".modal-body #idEspe").val( idEspe );
      var dataString = "id=" + idEspe; 

         $.ajax({
            type: "POST",
            data:  dataString,
            url: "php/consultaesp.php",
          //  cache: false,
            dataType: 'json',
            success: function (response) {
                console.log(response);
                  var len = response.length;
                  //alert(len);
                     for( var i = 0; i<len; i++){

                                     $(".modal-body #img1").val( response[i]['Imagen'] );                                    
                                     





                                }

                  }
        });
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});

        $(document).on("click",".checktoggle",function()
    {
        var idEspe=$(this).attr("idEspe");
         var estadoEspe=$(this).attr("estadoEspe");
        //var datos= new FormData();

         if (estadoEspe==0)
            {

                    estadoEspe=1;

            }
            else
            {
                estadoEspe=0;
            }
        
        //datos.append('idEspe',idEspe);
        // datos.append('estadoEspe',estadoEspe);
    var dataString = "idEspe=" + idEspe + "&estadoEspe=" + estadoEspe + '';

         //alert(dataString );

         $.ajax({
                      type: "POST",
                    url:"php/esp.modelo.php",                  
                    data: dataString,
                    cache: false,
                    // dataType: 'json',
                    success: function(respuesta)
                    {
                                //alert(respuesta);
                                   Swal.fire({

                                                        icon: "success",
                                                        title: "Se activo/desactivo la especialidad con éxito",
                                                        showConfirmButton: true,
                                                        confirmButtonText: "Cerrar",
                                                        closeOnConfirm: false
                                                    })
            
                        //console.log("respuesta",respuesta);
                    }


                });
  
            if (estadoEspe==0)
            {
                    
                    $(this).attr('estadoEspe',1);


            }
            else
                 
            {
                  
                    $(this).attr('estadoEspe',0);


            }




    })

$(document).ready(function(e) {
   
     $("#feditForm").submit(function(e) {    

        //alert('emtre');

        $.ajax({
            type: "POST",
            url: "php/editesp.php",
            data: new FormData(this),           
            contentType: false,
            cache: false,
            processData:false,
            success: function (response) {
             
               Swal.fire({

                                                        icon: "success",
                                                        title: "La especialidad ha sido actualizada con éxito",
                                                        showConfirmButton: true,
                                                        confirmButtonText: "Cerrar",
                                                        closeOnConfirm: false
                                                    }).then((result)=>{
                                                            if(result.value)
                                                            {
                                                                window.location.href="specialities.php";
                                                            }


                                                })
              
             
                     
                     
                    
                }
        });
       
         return false;
        
    });


  // $("#fupForm").on('submit', function(e){
     $("#fupForm").submit(function(e) {    

        var especialidad= $('#esp_nuevo');
        if (especialidad.val() == "") 
        {
            return false;
        }

        $.ajax({
            type: "POST",
            url: "php/nuevaesp.php",
            data: new FormData(this),           
            contentType: false,
            cache: false,
            processData:false,
            success: function (response) {
             
               Swal.fire({

                                                        icon: "success",
                                                        title: "La especialidad ha sido creada con éxito",
                                                        showConfirmButton: true,
                                                        confirmButtonText: "Cerrar",
                                                        closeOnConfirm: false
                                                    }).then((result)=>{
                                                            if(result.value)
                                                            {
                                                                window.location.href="specialities.php";
                                                            }


                                                })
              
             
                     
                     
                    
                }
        });
       
         return false;
        
    });
    
    
})



