<h4>API</h4>
<p class="lead">Criar uma API simples para manipular uma lista de usu&aacute;rios.</p>
<p>Base URL: <code>localhost/teamciandt/api</code>.</p>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">METHOD</th>
                <th scope="col">ENDPOINT</th>
                <th scope="col">USAGE</th>
                <th scope="col">RETURNS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>GET</td>
                <td><a href="#" data-toggle="modal" data-target="#modalGetApi">/api/users</a></td>
                <td>Listar os usu&aacute;rios</td>
                <td>users</td>
            </tr>
            <tr>
                <td>POST</td>
                <td><a href="#" data-toggle="modal" data-target="#modalPostApi">/api/users</a></td>
                <td>Criar um usu&aacute;rio</td>
                <td>user</td>
            </tr>
            <tr>
                <td>PUT</td>
                <td><a href="#" data-toggle="modal" data-target="#modalPutApi">/api/users/{id}</a></td>
                <td>Atualizar um usu&aacute;rio</td>
                <td>user</td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td><a href="#" data-toggle="modal" data-target="#modalDeleteApi">/api/users/{email}</a></td>
                <td>Remover um usu&aacute;rio</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="modal fade" id="modalGetApi" tabindex="-1" role="dialog" aria-labelledby="modalTitleGetApi" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleGetApi">Listar os usu&aacute;rios <kbd>GET localhost/teamciandt/api/users</kbd></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">Retorna uma lista com todos os usu&aacute;rios existentes.</p>
                <h4>Formato Resposta</h4>
                <p>Com sucesso, o status da resposta ser&aacute; <code>200 OK</code> e o conte&uacute;do da resposta conter&aacute; um array de objetos JSON de usu&aacute;rio. Caso haja erro, o status da resposta ser&aacute; um c&oacute;digo de erro e o conte&uacute;do da resposta ser&aacute; vazio.</p>
                <hr>
                <h4>Exemplo</h4>
                <button type="button" class="btn btn-primary btn-sm" onclick="getUsers()">Listar usu&aacute;rios</button>
                <hr>
                <h5>user object</h5>
                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">KEY</th>
                                <th scope="col">VALUE TYPE</th>
                                <th scope="col">VALUE DESCRIPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>id</td>
                                <td>integer</td>
                                <td>O ID do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>nome</td>
                                <td>string</td>
                                <td>O nome do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>sobrenome</td>
                                <td>string</td>
                                <td>O sobrenome do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>string</td>
                                <td>O e&ndash;mail do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>telefone</td>
                                <td>string</td>
                                <td>O telefone do usu&aacute;rio.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPostApi" tabindex="-1" role="dialog" aria-labelledby="modalTitlePostApi" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitlePostApi">Criar um usu&aacute;rio <kbd>POST localhost/teamciandt/api/users</kbd></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">Cadastra um usu&aacute;rio na lista.</p>
                <h4>Par&acirc;metros de Requisi&ccedil;&atilde;o</h4>
                <p class="lead">Corpo</p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">KEY</th>
                                <th scope="col">VALUE TYPE</th>
                                <th scope="col">VALUE DESCRIPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>nome</td>
                                <td>string</td>
                                <td><i>Obrigat&oacute;rio</i>. O nome do usu&aacute;rio. N&atilde;o precisa ser &uacute;nico.</td>
                            </tr>
                            <tr>
                                <td>sobrenome</td>
                                <td>string</td>
                                <td><i>Obrigat&oacute;rio</i>. O sobrenome do usu&aacute;rio. N&atilde;o precisa ser &uacute;nico.</td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>string</td>
                                <td><i>Obrigat&oacute;rio</i>. O e&ndash;mail do usu&aacute;rio. O e&ndash;mail <strong>&eacute; &uacute;nico</strong>.</td>
                            </tr>
                            <tr>
                                <td>telefone</td>
                                <td>string</td>
                                <td><i>Obrigat&oacute;rio</i>. O telefone do usu&aacute;rio. N&atilde;o precisa ser &uacute;nico.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <h4>Formato Resposta</h4>
                <p>Com sucesso, o status da resposta ser&aacute; <code>200 OK</code> e o conte&uacute;do da resposta conter&aacute; um objeto JSON do usu&aacute;rio criado. Caso haja erro, o status da resposta ser&aacute; um c&oacute;digo de erro e o conte&uacute;do da resposta ser&aacute; vazio.</p>
                <hr>
                <h4>Exemplo</h4>
                <button type="button" class="btn btn-primary btn-sm" onclick="createUser({nome: 'Bruna', sobrenome: 'Pimenta', email: 'bruna_pymenta@hotmail.com', telefone: '(31) 99143-8364'})">Criar usu&aacute;rio</button>
                <hr>
                <h5>user object</h5>
                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">KEY</th>
                                <th scope="col">VALUE TYPE</th>
                                <th scope="col">VALUE DESCRIPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>id</td>
                                <td>integer</td>
                                <td>O ID do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>nome</td>
                                <td>string</td>
                                <td>O nome do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>sobrenome</td>
                                <td>string</td>
                                <td>O sobrenome do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>string</td>
                                <td>O e&ndash;mail do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>telefone</td>
                                <td>string</td>
                                <td>O telefone do usu&aacute;rio.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPutApi" tabindex="-1" role="dialog" aria-labelledby="modalTitlePutApi" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitlePutApi">Atualizar um usu&aacute;rio <kbd>PUT localhost/teamciandt/api/users/{id}</kbd></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">Altera os dados de um usu&aacute;rio espec&iacute;fico.</p>
                <h4>Par&acirc;metros de Requisi&ccedil;&atilde;o</h4>
                <p class="lead">Caminho</p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">KEY</th>
                                <th scope="col">VALUE TYPE</th>
                                <th scope="col">VALUE DESCRIPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>id</td>
                                <td>integer</td>
                                <td>O ID do usu&aacute;rio.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="lead">Corpo</p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">KEY</th>
                                <th scope="col">VALUE TYPE</th>
                                <th scope="col">VALUE DESCRIPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>nome</td>
                                <td>string</td>
                                <td><i>Opcional</i>. O novo nome do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>sobrenome</td>
                                <td>string</td>
                                <td><i>Opcional</i>. O novo sobrenome do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>string</td>
                                <td><i>Opcional</i>. O novo e&ndash;mail do usu&aacute;rio. O e&ndash;mail <strong>&eacute; &uacute;nico</strong>.</td>
                            </tr>
                            <tr>
                                <td>telefone</td>
                                <td>string</td>
                                <td><i>Opcional</i>. O novo telefone do usu&aacute;rio.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <h4>Formato Resposta</h4>
                <p>Com sucesso, o status da resposta ser&aacute; <code>200 OK</code> e o conte&uacute;do da resposta conter&aacute; objeto JSON do usu&aacute;rio atualizado. Caso haja erro, o status da resposta ser&aacute; um c&oacute;digo de erro e o conte&uacute;do da resposta ser&aacute; vazio.</p>
                <hr>
                <h4>Exemplo</h4>
                <button type="button" class="btn btn-primary btn-sm" onclick="updateUser(1, {sobrenome: 'Anacleto', telefone: '991438364'})">Atualizar usu&aacute;rio</button>
                <hr>
                <h5>user object</h5>
                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">KEY</th>
                                <th scope="col">VALUE TYPE</th>
                                <th scope="col">VALUE DESCRIPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>id</td>
                                <td>integer</td>
                                <td>O ID do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>nome</td>
                                <td>string</td>
                                <td>O nome do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>sobrenome</td>
                                <td>string</td>
                                <td>O sobrenome do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>string</td>
                                <td>O e&ndash;mail do usu&aacute;rio.</td>
                            </tr>
                            <tr>
                                <td>telefone</td>
                                <td>string</td>
                                <td>O telefone do usu&aacute;rio.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalDeleteApi" tabindex="-1" role="dialog" aria-labelledby="modalTitleDeleteApi" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleDeleteApi">Remover um usu&aacute;rio <kbd>DELETE localhost/teamciandt/api/users/{email}</kbd></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">Remove um usu&aacute;rio da lista a partir do e&ndash;mail do mesmo.</p>
                <h4>Par&acirc;metros de Requisi&ccedil;&atilde;o</h4>
                <p class="lead">Caminho</p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">KEY</th>
                                <th scope="col">VALUE TYPE</th>
                                <th scope="col">VALUE DESCRIPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>email</td>
                                <td>string</td>
                                <td>O e&ndash;mail do usu&aacute;rio.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <h4>Formato Resposta</h4>
                <p>Com sucesso, o status da resposta ser&aacute; <code>200 OK</code> e o conte&uacute;do da resposta conter&aacute; ser&aacute; vazio. Caso haja erro, o status da resposta ser&aacute; um c&oacute;digo de erro e o conte&uacute;do da resposta tamb&eacute; ser&aacute; vazio.</p>
                <hr>
                <h4>Exemplo</h4>
                <button type="button" class="btn btn-primary btn-sm" onclick="deleteUser('bruna_pymenta@hotmail.com')">Remover usu&aacute;rio</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function getUsers() {
        $.ajax({
            url: 'api/users',
            dataType: 'json'
        })
        .done(function(data) {
            alert(JSON.stringify(data, null, '\t'));
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            alert("Ops! Ocorreu um erro ao listar usuários. Mensagem: " + errorThrown + ".");
        });
    }

    function createUser(user) {
        $.ajax({
            url: 'api/users/create',
            method: 'post',
            dataType: 'json',
            data: user
        })
        .done(function(data) {
            alert(JSON.stringify(data, null, '\t'));
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            alert("Ops! Ocorreu um erro ao criar um usuário. Mensagem: " + errorThrown + ".");
        });
    }

    function updateUser(id, data) {
        $.ajax({
            url: 'api/users/update/' + id,
            method: 'put',
            dataType: 'json',
            data: data
        })
        .done(function(data) {
            alert(JSON.stringify(data, null, '\t'));
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            alert("Ops! Ocorreu um erro ao atualizar um usuário. Mensagem: " + errorThrown + ".");
        });
    }

    function deleteUser(email) {
        $.ajax({
            url: 'api/users/delete/' + email,
            method: 'delete',
        })
        .done(function() {
            alert("Feito! Usuário removido com sucesso.");
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            alert("Ops! Ocorreu um erro ao remover um usuário. Mensagem: " + errorThrown + ".");
        });
    }
</script>

