$(document).ready(function () {

    $(".zipcode").mask("00000-000");

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
