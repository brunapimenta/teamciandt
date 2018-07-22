<h4>Formul&aacute;rio</h4>
<?php
    include_once('solutions/Form.php');

    $formSave = ['success' => true, 'invalid_field' => ''];
    if (isset($_POST) && !empty($_POST) && isset($_POST['form-submitted'])) {
        $objForm = new Form();
        $formSave = $objForm->save($_POST);

        if ($formSave['success']) {
            echo '<div class="alert alert-success" role="alert"><strong>Feito!</strong> Os dados foram armazenados corretamente.</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Ops!</strong> Ocorreu um erro, tente novamente.</div>';
        }
    }
?>
<form method="post" action="solutions.php#list-form" autocomplete="off">
    <input type="hidden" name="form-submitted" value="1">
    <div class="row">
        <div class="col-6">
            <div class="form-group row">
                <label for="inputNome" class="col-sm-3 col-form-label text-right">Nome *</label>
                <div class="col-sm-9">
                    <input type="text" name="nome" id="inputNome" class="form-control <?= (!$formSave['success'] && $formSave['invalid_field'] === 'all' ? 'is-invalid' : ''); ?>" required="required" value="<?= (!$formSave['success'] ? $_POST['nome'] : '') ?>">
                    <?php
                        if ($formSave['success'] === false && $formSave['invalid_field'] === 'all') {
                            echo '<div class="invalid-feedback">';
                                echo $formSave['invalid_message'];
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group row">
                <label for="inputSobrenome" class="col-sm-4 col-form-label text-right">Sobrenome *</label>
                <div class="col-sm-8">
                    <input type="text" name="sobrenome" id="inputSobrenome" class="form-control <?= (!$formSave['success'] && $formSave['invalid_field'] === 'all' ? 'is-invalid' : ''); ?>" required="required" value="<?= (!$formSave['success'] ? $_POST['sobrenome'] : '') ?>">
                    <?php
                        if ($formSave['success'] === false && $formSave['invalid_field'] === 'all') {
                            echo '<div class="invalid-feedback">';
                                echo $formSave['invalid_message'];
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-3 col-form-label text-right">E&ndash;mail *</label>
                <div class="col-sm-9">
                    <input type="email" name="email" id="inputEmail" class="form-control <?= (!$formSave['success'] && in_array($formSave['invalid_field'], ['email', 'all']) ? 'is-invalid' : ''); ?>" placeholder="nome@exemplo.com" required="required" value="<?= (!$formSave['success'] ? $_POST['email'] : '') ?>">
                    <?php
                        if ($formSave['success'] === false && in_array($formSave['invalid_field'], ['email', 'all'])) {
                            echo '<div class="invalid-feedback">';
                                echo $formSave['invalid_message'];
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group row">
                <label for="inputTelefone" class="col-sm-4 col-form-label text-right">Telefone *</label>
                <div class="col-sm-8">
                    <input type="tel" name="telefone" id="inputTelefone" class="form-control <?= (!$formSave['success'] && in_array($formSave['invalid_field'], ['telefone', 'all']) ? 'is-invalid' : ''); ?>" pattern="\(\d{2}\)?9?\d{4}-\d{4}" placeholder="(00)00000-0000" required="required" value="<?= (!$formSave['success'] ? $_POST['telefone'] : '') ?>">
                    <?php
                        if ($formSave['success'] === false && in_array($formSave['invalid_field'], ['telefone', 'all'])) {
                            echo '<div class="invalid-feedback">';
                                echo $formSave['invalid_message'];
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group row">
                <label for="inputLogin" class="col-sm-3 col-form-label text-right">Login *</label>
                <div class="col-sm-9">
                    <input type="text" name="login" id="inputLogin" class="form-control <?= (!$formSave['success'] && in_array($formSave['invalid_field'], ['login', 'all']) ? 'is-invalid' : '') ?>" required="required" value="<?= (!$formSave['success'] ? $_POST['login'] : '') ?>">
                    <?php
                        if ($formSave['success'] === false && in_array($formSave['invalid_field'], ['login', 'all'])) {
                            echo '<div class="invalid-feedback">';
                                echo $formSave['invalid_message'];
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group row">
                <label for="inputSenha" class="col-sm-4 col-form-label text-right">Senha *</label>
                <div class="col-sm-8">
                    <input type="password" name="senha" id="inputSenha" class="form-control <?= (!$formSave['success'] && $formSave['invalid_field'] === 'all' ? 'is-invalid' : ''); ?>" required="required">
                    <?php
                        if ($formSave['success'] === false && $formSave['invalid_field'] === 'all') {
                            echo '<div class="invalid-feedback">';
                                echo $formSave['invalid_message'];
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Salvar</button>
</form>

