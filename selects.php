<h4>Select Field</h4>
<p class="lead">Implementar uma classe para criar um select field para um formul&aacute;rio de registro de usu&aacute;rio.</p>
<form autocomplete="off">
    <input type="hidden" name="form-submitted" value="1">
    <div class="row">
        <div class="col-6">
            <div class="form-group row">
                <label for="inputNomeSelectField" class="col-sm-3 col-form-label text-right">Nome *</label>
                <div class="col-sm-9">
                    <input type="text" id="inputNomeSelectField" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group row">
                <label for="inputEmailSelectField" class="col-sm-3 col-form-label text-right">E&ndash;mail *</label>
                <div class="col-sm-9">
                    <input type="email" id="inputEmailSelectField" class="form-control" placeholder="nome@exemplo.com" required="required">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group row">
                <label for="inputCidadeSelectField" class="col-sm-3 col-form-label text-right">Cidade *</label>
                <div class="col-sm-9">
                    <input type="text" id="inputCidadeSelectField" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group row">
                <label for="selectEstadoSelectField" class="col-sm-3 col-form-label text-right">Estado *</label>
                <div class="col-sm-9">
                    <?php
                        include_once('solutions/Select.php');
                        $optionsSelectField = [
                            'MG' => 'Minas Gerais',
                            'SP' => 'São Paulo',
                            'RJ' => 'Rio de Janeiro',
                            'BA' => 'Bahia',
                            'PR' => 'Paraná',
                            'AM' => 'Amazonas',
                            'CE' => 'Ceará',
                            'DF' => 'Distrito Federal',
                            'PB' => 'Paraíba',
                            'ES' => 'Espírito Santo',
                            'PI' => 'Piauí',
                            'GO' => 'Goiás',
                            'AL' => 'Alagoas',
                            'MA' => 'Maranhão',
                            'RR' => 'Roraima',
                            'MS' => 'Mato Grosso do Sul',
                            'TO' => 'Tocantins',
                            'PA' => 'Pará',
                            'PE' => 'Pernambuco',
                            'AP' => 'Amapá',
                            'RS' => 'Rio Grande do Sul',
                            'RN' => 'Rio Grande do Norte',
                            'SC' => 'Santa Catarina',
                            'RO' => 'Rondônia',
                            'MT' => 'Mato Grosso',
                            'AC' => 'Acre',
                            'SE' => 'Sergipe',
                        ];
                        sort($optionsSelectField);
                        echo Select::create($optionsSelectField, ['id' => 'selectEstadoSelectField', 'name' => 'selectField', 'class' => 'form-control', 'required' => true]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</form>
