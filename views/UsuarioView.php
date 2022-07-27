<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/usuario.js"></script>
    <title>Cadastro Usuario</title>
</head>
    <body>
        <div class="container-lg">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Cadastrar
        </button>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Cadastrar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            <form class="col-md-12">
                <div class="row mb-3"> <!-- $id  -->
                    <label align="center" class="col-md-2 col-sm-12 col-form-label">ID</label>
                        <div class="col-md-2 col-sm-12">
                            <input id="idUsuario" hide type="text" readonly disable="true" class="form-control">
                        </div>
                </div>
                <div class="row mb-3"><!-- $status -->
                    <label align="center" class="col-md-2 col-sm-12 col-form-label">Status:</label>
                        <div class="col-md-2 col-sm-12">
                            <select class="form-select">
                                <option selected>Choose...</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
                        </div>
                </div>
                <div class="row mb-3"> <!-- $name  -->
                    <label align="center" class="col-md-2 col-sm-12 col-form-label">Name:</label>
                        <div class="col-md-3 col-sm-12">
                            <input id="nomePessoa" class="form-control" type="text">
                        </div>
                </div>

                <div class="row mb-3"> <!-- $usuario  -->
                    <label align="center" class="col-md-2 col-sm-12 col-form-label">Usuario:</label>
                        <div class="col-md-3 col-sm-12">
                            <input id="userUsuario" class="form-control" type="text">
                        </div>
                </div>
            
                <div class="row mb-3"><!-- $email -->
                    <label align="center" class="col-md-2 col-sm-12 col-form-label">E-mail:</label>
                        <div class="col-md-3 col-sm-12">
                            <input id="email" class="form-control" type="email">
                        </div>
                </div>

                <div class="row mb-3"> <!-- $senha  -->
                    <label align="center" class="col-md-2 col-sm-12 col-form-label">Senha:</label>
                        <div class="col-md-3 col-sm-12">
                            <input id="senhaUsuario" class="form-control" type="text">
                        </div>
                </div>
                <!-- <button type="submit" class="btn btn-primary">Confirm</button> -->
            </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
        <table id="tabelaUsuarios"  class="table table-dark table-hover">
        </table>
        </div>
    </body>
</html>