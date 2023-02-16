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
         var idEspe = $(this).attr('idEspe');
     $(".modal-body #idEspe").val( idEspe );
  //   alert(idEspe);
        var dataString = "id=" + idEspe; 

         $.ajax({
            type: "POST",
            data:  dataString,
            url: "php/consultapaquete.php",
          //  cache: false,
            dataType: 'json',
            success: function (response) {
                console.log(response);
                  var len = response.length;
                  //alert(len);
                     for( var i = 0; i<len; i++){

                                     $(".modal-body #esp_nuevoe").val( response[i]['nombre_paquete'] );                                    
                                     $(".modal-body #messagee").val( response[i]['desc_paquete'] );
                                     $(".modal-body #paq_car1e").val( response[i]['carac1_paquete'] );
                                     $(".modal-body #paq_car2e").val( response[i]['carac2_paquete'] );
                                     $(".modal-body #paq_car3e").val( response[i]['carac3_paquete'] );
                                     $(".modal-body #paq_car4e").val( response[i]['carac4_paquete'] );
                                     $(".modal-body #paq_car5e").val( response[i]['carac5_paquete'] );
                                     $(".modal-body #paq_precioe").val(parseFloat( response[i]['precio_paquete']).toFixed(2) );
                                     $(".modal-body #img1").val( response[i]['fot1_paquete'] );
                                     $(".modal-body #img2").val( response[i]['fot2_paquete'] );
                                    $(".modal-body #img3").val( response[i]['fot3_paquete'] );
                                    $(".modal-body #img4").val( response[i]['fot4_paquete'] );
                                         $(".modal-body #estudio2e").val( response[i]['id_paquete'] );
                                          $(".modal-body #idEspe").val( response[i]['id'] );
                                           $(".modal-body #tiempoe").val( response[i]['Tiem_paquete'] );
                                            $(".modal-body #cuidadose").val( response[i]['Cuida_paquete'] );
                                             $(".modal-body #comoe").val( response[i]['Como_paquete'] );
                                              $(".modal-body #anestesiae").val( response[i]['Anest_paquete'] );





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
                    url:"php/paquete.modelo.php",                  
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
            url: "php/editpaq.php",
            data: new FormData(this),           
            contentType: false,
            cache: false,
            processData:false,
            success: function (response) {
               console.log(response);
               Swal.fire({


                                                        icon: "success",
                                                        title: "El paquete ha sido actualizado con éxito",
                                                        showConfirmButton: true,
                                                        confirmButtonText: "Cerrar",
                                                        closeOnConfirm: false
                                                    }).then((result)=>{
                                                            if(result.value)
                                                            {
                                                                window.location.href="paquetes.php";
                                                            }


                                                })
              
             
                     
                     
                    
                }
        });
       
         return false;
        
    });


  // $("#fupForm").on('submit', function(e){
     $("#fupForm").submit(function(e) {    

        var especialidad= $('#esp_nuevo');
         var message= $('#message');
          var paq_precio= $('#paq_precio');
          var describe = $(".estudio2 option:selected");
        var estudio2 = $("#estudio2");

        if (especialidad.val() == "") 
        {
            return false;
        }
          if (message.val() == "") 
        {
            return false;
        }
          if (paq_precio.val() == "") 
        {
            return false;
        }
          if (estudio2.val() == "") 
        {
            return false;
        }
         console.log("entre",especialidad.val());
        $.ajax({
            type: "POST",
            url: "php/nuevopaquete.php",
            data: new FormData(this),           
            contentType: false,
            cache: false,
            processData:false,
            success: function (response) {
             
                //console.log("entre",response);
               Swal.fire({

                                                        icon: "success",
                                                        title: "El paquete ha sido creada con éxito",
                                                        showConfirmButton: true,
                                                        confirmButtonText: "Cerrar",
                                                        closeOnConfirm: false
                                                    }).then((result)=>{
                                                            if(result.value)
                                                            {
                                                                window.location.href="paquetes.php";
                                                            }


                                                })
              
             
                     
                     
                    
                }
        });
       
         return false;
        
    });
    
    
})



