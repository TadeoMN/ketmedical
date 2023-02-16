function consult_search(searching) {
    let datum = "search";
    let parameters = { "searching" : searching, "datum" : datum };
    $.ajax({
        data:parameters,
        url: 'php/search.php',
        type: 'POST',
        beforeSend: function () {
            console.log('estoy en ello');
        },
        success: function (data) {
            console.log('OK');

            if (searching === '') {
                document.getElementById("card-searching").style.opacity = 0;
                document.getElementById("card-searching").style.transition = "all 1s";
            } else {
                document.getElementById("card-searching").style.opacity = 1;
                document.getElementById("card-searching").style.transition = "all 1s";
            }
            document.getElementById("result_search").innerHTML = data;
        },
        error: function (data, error) {
            console.log('error');
        }
    });
}