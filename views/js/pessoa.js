$( document ).ready(function() {
    var baseUrl = "http://localhost/curso22/controllers/PessoaController.php";

    $(".btnEditar").on("click", function(){
        var idpessoa = $(this).val();
        baseUrl += "?id=" + idpessoa;
        // ... controllers/PessoaController.php?id=15
        $.get(baseUrl).done(function (response) {
            console.log(JSON.stringify (response));
        })
    });

    $(".btnExcluir").on("click", function(){
        var id = $(this).val();
        baseUrl += "?id=" + id;
        $.get(baseUrl).done(function (response) {
            console.log(JSON.stringify (response));
        })
    });


});