$(document).ready(function () {
    //-----------------------------------------------------
    // Defining a variable
    //-----------------------------------------------------

    var token = $("input[name='_token']").val(),
        datatable_url = window.location.origin + "/datatable/pt-br.json";

    //-----------------------------------------------------
    // Instance of plugins
    //-----------------------------------------------------

    $(".cpf").mask("000.000.000-00");
    $(".zipcode").mask("00000-000");

    $("#ajax-datatable").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: $("#route_datatable").val(),
            type: "POST",
            beforeSend: function (request) {
                return request.setRequestHeader("X-CSRF-Token", token);
            },
        },
        columns: [{
                data: "id"
            },
            {
                data: "name"
            },
            {
                data: "cpf"
            },
            {
                data: "email"
            },
            {
                data: "active"
            },
            {
                data: "action",
                orderable: false,
                searchable: false
            },
        ],
        language: {
            url: datatable_url,
        },
    });
});
