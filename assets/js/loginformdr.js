// JavaScript Document
$(document).ready(function() {

    "use strict";

    
    $("#but_submit").click(function(){



        var username = $("#email").val().trim();
        var password = $("#password").val().trim();
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

        var dataString = "email=" + username + "&password=" + password   ; 
     
        if (username!="" && password !="")
        {
        $.ajax({
            type: "POST",
            data: dataString,
            url: "php/loginvalidate.php",
            cache: false,
             dataType: 'json',
            success: function (d) {
                console.log(d);
                   var len = d.length;
                      for( var i = 0; i<len; i++){
                            var id2 = d[i]['usuario'];
                      }
                      if (id2>0)
                      {
                         $("#error").hide();
                        $("#success").show();
                        $('#success').html('Iniciando Sesión de Doctor'); 
                        //  $_SESSION['usuario']=username;
                         setTimeout(' window.location.href = "doctor-dashboard.php"; ',2000);
                        //location.href = "index.html";  
                      }
                      else
                      {
                        $("#error").show();
                        $('#error').html('¡Datos de acceso incorrectos, favor de consultar con el personal de Ket!');
                        return false;
                      }
                     
                    
                }
        });
        return false;
    }
        
    });
    $("#reset").on('click', function() {
        $(".form-control").removeClass("success").removeClass("error");
    });
    
})



