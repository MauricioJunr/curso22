$( document ).ready(function() {

    $(".btnEditar").on("click", function(){
        var id = $(this).val();
        console.log("Sou o clicar do editar id:" + id);
    });

    $(".btnExcluir").on("click", function(){
        var id = $(this).val();
        console.log("Sou o clicar do excluir" + id);
    });


});