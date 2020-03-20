require('./bootstrap');

const $ = require('jquery');

const Handlebars = require("handlebars");
$(document).ready(function() {
    // alert("ciao");

    $('#filter').change(function() {
        // console.log(parseInt( $(this).val()) );
        $.ajax({
            'url': window.location.protocol + '//' +
                window.location.host + '/api/studenti/eta',
            'data': {
                'eta': parseInt($(this).val())
            },
            'method': 'POST',
            success: function(data) {



                var dati= data.response;
                console.log(dati);
                $(".wrapper_studenti").empty();
                var source = $("#entry-template").html();
                var template = Handlebars.compile(source);
                for (var i = 0; i < dati.length; i++) {
                  var element = dati[i];
                    console.log(element);
                  var html = template(element);
                  $(".wrapper_studenti").append(html);
                };

            },
            error: function(errore) {
                alert("c'è un errore" + errore);
            }
        });
    });
});
