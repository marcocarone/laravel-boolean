require('./bootstrap');

const $ = require('jquery');
$(document).ready(function() {
    // alert("ciao");

    $('#filter').change(function() {

        $.ajax({
            'url': window.location.protocol + '//' +
                window.location.host + '/api/studenti/eta',
            'data': {
                'eta': $(this).val()
            },
            'method': 'POST',
            success: function(data) {


                console.log(data);

            },
            error: function(errore) {
                alert("c'è un errore" + errore);
            }
        });
    });
});
