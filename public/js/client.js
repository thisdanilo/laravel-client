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

    function searchZipcode() {
        var _this = $(this),
            cep = _this.val().replace("-", ""),
            address = _this.closest(".row");

        if (cep.length == 8) {
            city_search = "";

            $.getJSON(
                "//viacep.com.br/ws/" + cep + "/json/?callback=?",
                function (dados) {
                    if (!("erro" in dados)) {

                        address.find(".street").val(dados.logradouro);

                        address.find(".district").val(dados.bairro);

                        address.find(".number").val("");

                        address.find(".comp").val("");

                        address.find(".info").val("");

                        address.find(".uf").val(dados.uf);

                        address.find(".city").val(dados.localidade);
                    } else {
                        address.find(".state").val("").trigger("change");

                        address.find(".street").val("");

                        address.find(".district").val("");

                        address.find(".number").val("");

                        address.find(".comp").val("");

                        address.find(".info").val("");
                    }
                }
            );
        }
    }

    $(document).delegate(".zipcode", "input", searchZipcode);
});
