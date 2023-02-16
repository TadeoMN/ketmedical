// JavaScript Document
$(document).ready(function() {

    "use strict";

    
    $("#but_submit").click(function(){



        var nombre = $("#nombre").val().trim();
        var password = $("#password").val().trim();
        var email = $("#email").val().trim();
        var phone = $("#phone").val().trim();
        var rpassword = $("#rpassword").val().trim();
   
        //alert(username);

      /*   $("#error").hide();
        if (username == "") {
             $("#error").show();
            $('#error').html('Falta Usuario');
            return false;
        } 
        if (password == "") {
             $("#error").show();
            $('#error').html('Falta Password');
            return false;
        } */

        var dataString = "email=" + email + "&password=" + password  + "&nombre=" + nombre  + "&phone=" + phone  + "&rpassword=" + rpassword   ; 

        if (password!=rpassword)
        {
             $("#error").show();
                        $('#error').html('¡Las contraseñas no coinciden!');
                        return false;
        }
     
           console.log(dataString);
        if
         (email!="" && password !="")
        {
        $.ajax({
            type: "POST",
            data: dataString,
            url: "php/loginvalidateusuario.php",
            cache: false,
             processData:false,
                         success: function (d) {
                console.log(d);
                  
                         $("#error").hide();
                        $("#success").show();
                        $('#success').html('Iniciando Sesión de Paciente'); 
                        //  $_SESSION['usuario']=username;
                         setTimeout(' window.location.href = "index.php"; ',2000);
                        //location.href = "index.html";  
                     
                     
                    
                }
        });
        return false;
    }
        
    });
    $("#reset").on('click', function() {
        $(".form-control").removeClass("success").removeClass("error");
    });
    
})



