// JavaScript Document

    








$(document).ready(function(e) {
   
    



  // $("#fupForm").on('submit', function(e){
     $("#fupForm").submit(function(e) {    

        var facebook= $('#facebook');
         var twitter= $('#twitter');
          var instagram= $('#instagram');
              var pinterest= $('#pinterest');
    
        var linkedin = $("#linkedin");

        var youtube = $("#youtube");

        
         //console.log("entre",especialidad.val());
        $.ajax({
            type: "POST",
            url: "php/nuevodoctor.php",
            data: new FormData(this),           
            contentType: false,
            cache: false,
            processData:false,
            success: function (response) {
             
                console.log("entre",response);
               Swal.fire({

                                                        icon: "success",
                                                        title: "Se actualizaron las redes sociales del Doctor",
                                                        showConfirmButton: true,
                                                        confirmButtonText: "Cerrar",
                                                        closeOnConfirm: false
                                                    }).then((result)=>{
                                                            if(result.value)
                                                            {
                                                                window.location.href="social-media.php";
                                                            }


                                                })
              
             
                     
                     
                    
                }
        });
       
         return false;
        
    });
    
    
})



