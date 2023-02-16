// JavaScript Document
$(document).ready(function() {

    "use strict";

    
    $("#but_submit").click(function(){



        var username = $("#usuario").val().trim();
        var password = $("#password").val().trim();

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

        var dataString = "usuario=" + username + "&password=" + password   ; 
     
        if (username!="" && password !="")
        {
        $.ajax({
            type: "POST",
            data: dataString,
            url: "php/loginvalidate.php",
            cache: false,
             dataType: 'json',
            success: function (d) {
                   var len = d.length;
                      for( var i = 0; i<len; i++){
                            var id2 = d[i]['usuario'];
                      }
                      if (id2>0)
                      {
                         $("#error").hide();
                        $("#success").show();
                        $('#success').html('Iniciando Sesión'); 
                         setTimeout(' window.location.href = "index.html"; ',2000);
                        //location.href = "index.html";  
                      }
                      else
                      {
                        $("#error").show();
                        $('#error').html('¡Datos de acceso incorrectos!');
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



