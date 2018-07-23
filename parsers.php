<h4>Conversor</h4>
<p class="lead">Converter arquivo XML para CSV.</p>
<form method="post" enctype="multipart/form-data" action="solutions.php#list-parsers">
    <input type="hidden" name="parser-submitted" value="1">
    <div class="form-group">
        <label for="inputFileParser">Escolha um arquivo</label>
        <input type="file" name="fileParser" id="inputFileParser" class="form-control-file" accept="text/xml" required="required">
    </div>
    <button type="submit" class="btn btn-primary">Converter</button>
</form>
<?php
    include_once('solutions/Parser.php');

    $formParser = ['success' => true, 'message' => ''];
    if (isset($_POST) && !empty($_POST) && isset($_POST['parser-submitted'])) {
        $objParser = new Parser();
        $formParser = $objParser->convert($_FILES['fileParser']);

        if ($formParser['success']) {
            echo '<div class="alert alert-success" role="alert"><strong>Feito!</strong> ' . $formParser['message'] . '</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Ops!</strong>' . $formParser['message'] . '</div>';
        }
    }
?>
