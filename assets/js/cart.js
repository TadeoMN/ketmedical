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



$(document).on("click", ".open-AddPaqueteDialog", function () {
         var idEspe = $(this).attr('idEspe');
           var idEspecialidad = $(this).attr('Especialidad');
             var dataString2 = "id=" + idEspe + "&id_especialidad=" + idEspecialidad; 

            $("#especialidadtabla").empty(); 
     $(".modal-body #idEspep").val( idEspe );
    
        var dataString = "id=" + idEspe;      
       
           $.ajax({
            type: "POST",
            data:  dataString,
            url: "php/consultadoctor.php",
          //  cache: false,
            dataType: 'json',
            success: function (response) {
                console.log(response);
                  var len = response.length;
                  //alert(len);
                     for( var i = 0; i<len; i++){

                                     $(".modal-body #esp_nuevop").val( response[i]['Nombre'] );                                 
                                        
                                         $(".modal-body #estudio2p").val( response[i]['id_especialidad'] );
                                          $(".modal-body #idEspep").val( response[i]['id'] );

                                         $.ajax({
                                            type: "POST",
                                            data:  dataString2,
                                            url: "php/consultapaquetedoctor.php",
                                          //  cache: false,
                                            dataType: 'json',
                                            success: function (responsex) {
                                                console.log(responsex);
                                                  var len = responsex.length;

                                                   var bloque='<table  id="tablapaquetes" class="datatable table table-hover table-center mb-0">' ;
                                                                         bloque=bloque +    '<thead><tr><th><input type="checkbox" /></th><th>Id</th><th>Paquete</th></tr></thead><tbody>';
                                                  //alert(len);
                                                     for( var i = 0; i<len; i++){

                                                                     var id = responsex[i]['Id'];
                                                                    var Especialidad = responsex[i]['Especialidad'];
                                                                     var activo = responsex[i]['activo'];

                                                                            if (activo==='1'   )
                                                                            {
                                                                          bloque=bloque +    '<tr><td><input type="checkbox" checked id="Check_Paquete_Rows_';
                                                                      }
                                                                      else
                                                                      {
                                                                              bloque=bloque +    '<tr><td><input type="checkbox" id="Check_Paquete_Rows_';
                                                                      }
                                                                           bloque=bloque + id + '" /> </td><td >';                                                                          
                                                                            bloque=bloque + id + '' ; 
                                                                             bloque=bloque +    '</td><td>';
                                                                              bloque=bloque + Especialidad + '' ; 
                                                                             bloque=bloque +    '</td>';
                                                                        
                                                                }
                                                                     bloque=bloque + '</tr></tbody></table>"'
                                                                 
                                                                         $("#especialidadtabla").append(bloque);
                                                  }
                                        });



                                }

                  }
        });
            //alert(dataString2);


return false;

     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});


$(document).on("click", ".open-AddBookDialog", function () {
         var idEspe = $(this).attr('idEspe');
     $(".modal-body #idEspe").val( idEspe );
   //  alert(idEspe);
        var dataString = "id=" + idEspe; 

         $.ajax({
            type: "POST",
            data:  dataString,
            url: "php/consultadoctor.php",
          //  cache: false,
            dataType: 'json',
            success: function (response) {
                console.log(response);
                  var len = response.length;
                  //alert(len);
                     for( var i = 0; i<len; i++){

                                     $(".modal-body #esp_nuevoe").val( response[i]['Nombre'] );                                    
                                     $(".modal-body #emaile").val( response[i]['correo'] );
                                     $(".modal-body #Cedulae").val( response[i]['cedula'] );
                                   
                                     $(".modal-body #img1").val( response[i]['imagen'] );
                                    
                                         $(".modal-body #estudio2e").val( response[i]['id_especialidad'] );
                                          $(".modal-body #idEspe").val( response[i]['id'] );





                                }

                  }
        });

     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});


 $(document).on("click",".resta",function()
    {
        var idEspe=$(this).attr("idEspe");
          var quantity1= $('#quantity_' + idEspe);
          //alert (quantity1.val());

        // var estadoEspe=$(this).attr("estadoEspe");
        //var datos= new FormData();
         
           var valor=0;
           valor=quantity1.val();
        //datos.append('idEspe',idEspe);
        // datos.append('estadoEspe',estadoEspe);
        var dataString = "idEspe=" + idEspe  + "&quantity1=" + valor;

      //   alert(dataString );

         $.ajax({
                      type: "POST",
                    url:"php/restacarrito.php",                  
                    data: dataString,
                    cache: false,
                    // dataType: 'json',
                    success: function(respuesta)
                    {
                         location.reload();
                             
                    }


                });
  
            




    })



$(document).on("click",".agregacarritomanual",function()
    {
               var idEspe=$(this).attr("idEspe");
               var precio= $('#Valoracion');
                var subcategoria= $('#id_subcategoria' );
                var session= $('#id_session' );
                 var medico= $('#id_medico' );

                var cantidad= $('#quantity');
                var dataString = "id_doctor=" + medico.val() + "&paquete=" + subcategoria.val()  + "&quantity=" + cantidad.val()  + "&preciofinal=" + precio.val() + "&iddr=" + idEspe + "&session=" + session.val()  ; 
                console.log(dataString);

                //alert (dataString);
                  $.ajax({
            type: "POST",
            data: dataString,
            url: "php/addcarrito.php",
            cache: false,
             processData:false,
                         success: function (d) {
                console.log(d);
                  
                         $("#error").hide();
                        $("#success").show();
                        $('#success').html('Iniciando Sesión de Paciente'); 
                        //  $_SESSION['usuario']=username;
                          window.location.href="cart.php"
                        //location.href = "index.html";  
                     
                     
                    
                }
        });
        return false;

         });

$(document).on("click",".agregacarrito",function()
    {
               var idEspe=$(this).attr("idEspe");
               var precio= $('#Valoracion_' + idEspe);
                var subcategoria= $('#id_subcategoria_' + idEspe);
                var session= $('#id_session_' + idEspe);
                 var medico= $('#id_medico_' + idEspe);

                var cantidad= $('#quantity_' + idEspe);
                var dataString = "id_doctor=" + medico.val() + "&paquete=" + subcategoria.val()  + "&quantity=" + cantidad.val()  + "&preciofinal=" + precio.val() + "&iddr=" + idEspe + "&session=" + session.val()  ; 
                console.log(dataString);

                //alert (dataString);
                  $.ajax({
            type: "POST",
            data: dataString,
            url: "php/addcarrito.php",
            cache: false,
             processData:false,
                         success: function (d) {
                console.log(d);
                  
                         $("#error").hide();
                        $("#success").show();
                        $('#success').html('Iniciando Sesión de Paciente'); 
                        //  $_SESSION['usuario']=username;
                          window.location.href="cart.php"
                        //location.href = "index.html";  
                     
                     
                    
                }
        });
        return false;

         });


 $(document).on("click",".suma",function()
    {
        var idEspe=$(this).attr("idEspe");
          var quantity1= $('#quantity_' + idEspe);
          //alert (quantity1.val());

        // var estadoEspe=$(this).attr("estadoEspe");
        //var datos= new FormData();
           var valor=0;
           valor=quantity1.val();
        
        //datos.append('idEspe',idEspe);
        // datos.append('estadoEspe',estadoEspe);
    var dataString = "idEspe=" + idEspe  + "&quantity1=" + valor;

         //alert(dataString );

         $.ajax({
                      type: "POST",
                    url:"php/sumacarrito.php",                  
                    data: dataString,
                    cache: false,
                    // dataType: 'json',
                    success: function(respuesta)
                    {
                         location.reload();
                             
                    }


                });
  
            




    })

        $(document).on("click",".eliminaart",function()
    {
        var idEspe=$(this).attr("idEspe");
         
        //var datos= new FormData();

         
        
        //datos.append('idEspe',idEspe);
        // datos.append('estadoEspe',estadoEspe);
    var dataString = "idEspe=" + idEspe ;

         //alert(dataString );

         $.ajax({
                      type: "POST",
                    url:"php/eliminacart.php",                  
                    data: dataString,
                    cache: false,
                    // dataType: 'json',
                    success: function(respuesta)
                    {
                                //alert(respuesta);
                                   location.reload();
            
                        //console.log("respuesta",respuesta);
                    }


                });
  
           




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

     $("#fpaquetesForm").submit(function(e) {    

         var idEspep= $('#idEspep');
        var estudio2p= $('#estudio2p');
      

        //alert('emtre');
         $("#fpaquetesForm input[type=checkbox]:checked").each(function(){

                //console.log( $(this).parent().children('input[name="cantSpecies"]').val());
                // buscamos el td más cercano en el DOM hacia "arriba"
                // luego encontramos los td adyacentes a este
                var valor="";
                $(this).closest('td').siblings().each(function(){
                   
                    valor=valor + "-" + $(this).text();
                  // obtenemos el texto del td 
                //  console.log($(this).text());
                });
                 var dataString = "idEspe=" + idEspep.val() + "&estudio2p=" + estudio2p.val() + "&array=" + valor + '';
                  //var dataString = "idEspe=" + idEspe + "&estadoEspe=" + estadoEspe + '';

                 //console.log(dataString);
                  valor=""

                   $.ajax({
            type: "POST",
            url: "php/nuevopaquetedoctor.php", 
            data: dataString,     
            //contentType: false,
           cache: false,
          //  processData:false,
            success: function (response) {
             
                console.log("entre",response);
               Swal.fire({

                                                        icon: "success",
                                                        title: "La asignación de paquete ha sido creada con éxito",
                                                        showConfirmButton: true,
                                                        confirmButtonText: "Cerrar",
                                                        closeOnConfirm: false
                                                    }).then((result)=>{
                                                            if(result.value)
                                                            {
                                                                window.location.href="doctores.php";
                                                            }


                                                })
              
             
                     
                     
                    
                }
        });
              });



 
       
         return false;
        
    });


  // $("#fupForm").on('submit', function(e){
     $("#fupForm").submit(function(e) {    

        var especialidad= $('#esp_nuevo');
         var email= $('#email');
          var password= $('#password');
              var Cedula= $('#Cedula');
    
        var estudio2 = $("#estudio2");

        if (especialidad.val() == "") 
        {
            return false;
        }
          if (email.val() == "") 
        {
            return false;
        }
          if (password.val() == "") 
        {
            return false;
        }
         if (Cedula.val() == "") 
        {
            return false;
        }
          if (estudio2.val() == "") 
        {
            return false;
        }
         //console.log("entre",especialidad.val());
        $.ajax({
            type: "POST",
            url: "php/nuevodoctor.php",
            data: new FormData(this),           
            contentType: false,
            cache: false,
            processData:false,
            success: function (response) {
             
                //console.log("entre",response);
               Swal.fire({

                                                        icon: "success",
                                                        title: "El registro de doctor ha sido creada con éxito",
                                                        showConfirmButton: true,
                                                        confirmButtonText: "Cerrar",
                                                        closeOnConfirm: false
                                                    }).then((result)=>{
                                                            if(result.value)
                                                            {
                                                                window.location.href="doctores.php";
                                                            }


                                                })
              
             
                     
                     
                    
                }
        });
       
         return false;
        
    });
    
    
})



