$( document ).ready(function() {
    var url = "http://localhost/curso22/controllers/UsuarioController.php";
    var urlListarTodas = url + "?rota=listarTodosUsuarios";

    $.get(urlListarTodas).done(function(response) {
        montarTabela(response);
    }).fail(function(error) {
        console.log("Deu erro: " + JSON.stringify(error));
    });

    $("#tabelaUsuarios").on("click", ".btnEditar", function() {
        var id = $(this).val();
        var urlComId = url + "?id=" + id + "&rota=editarusuario";
        // http://localhost/curso22/controllers/UsuarioController.php?id=123&rota=editarpessoa
        
        $.get(urlComId).done(function(response) {
            // console.log("sou o response: " + JSON.stringify(response));

            $("#idPessoa").val(response[0].id);
            $("#nomePessoa").val(response[0].name);
            $("#staticBackdropLabel").html("Editar");
            $("#staticBackdrop").modal("show");
            // $("#staticBackdrop").modal("hide"); // fechar o modal

        });
    });

    $("#tabelaUsuarios").on("click", ".btnSalvar", function() {
        var id = $(this).val();
        var urlComId = url + "?id=" + id + "&rota=salvarusuario";
        // http://localhost/curso22/controllers/UsuarioController.php?id=123&rota=salvarpessoa
        
        $.get(urlComId).done(function(response) {

            $("#idUsuario").val(response[0].id);
            $("#nomeUsuario").val(response[0].name);
            $("#userUsuario").val(response[0].usuario);
            $("#emailUsuario").val(response[0].email);
            $("#senhaUsuario").val(response[0].senha);

            $(this).closest("tr").save();

        });
    });

    $("#tabelaUsuarios").on("click", ".btnExcluir", function() {
        var id = $(this).val();
        var urlComId = url + "?id=" + id + "&rota=excluirusuario";
        // http://localhost/curso22/controllers/UsuarioController.php?id=123&rota=excluirpessoa
        $(this).closest("tr").remove();
        $.get(urlComId).done(function(response) {
             // ajustar a animacao
             $(this).closest("tr").remove(); // remove o html da tabela, no caso a linha clicada

        });
    });

    function montarTabela (dados) {
        var cabecalho = montarCabecalho();
        var dados = montarDados(dados);
        var htmlTabela = (cabecalho + dados);
        $("#tabelaUsuarios").html(htmlTabela);
    }

    function montarCabecalho () {
        var cabecalho = (
            `<thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">senha</th>
                </tr>
            </thead>`
        );

        return cabecalho;
    }
    
    function montarDados (dados) {
        var tbody = `<tbody>`;

        $.each(dados, function(idx, usuario) {
            tbody += (
                `<tr>
                    <td>${usuario.id}</td>
                    <td>${usuario.nome}</td>
                    <td>${usuario.usuario}</td>
                    <td>${usuario.email}</td>
                    <td>${usuario.senha}</td>
                    <td>
                        <button class="btnEditar" value="${usuario.id}">Editar</button>
                        <button class="btnExcluir" value="${usuario.id}">Excluir</button>
                    </td>
                </tr>`
            );
        });

        tbody += "</tbody>";

        return tbody;
    }

});