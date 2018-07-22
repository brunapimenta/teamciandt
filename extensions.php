<h4>Files' Extension</h4>
<form method="post" enctype="multipart/form-data" action="solutions.php#list-extensions">
    <input type="hidden" name="extensions-submitted" value="1">
    <div class="form-group">
        <label for="inputFileExtension">Choose one or more files</label>
        <input type="file" name="filesExtension[]" id="inputFileExtension" class="form-control-file" multiple>
    </div>
    <button type="submit" class="btn btn-primary">Send Files</button>
</form>
<?php
    include_once('solutions/Extensions.php');

    if (isset($_POST) && !empty($_POST) && isset($_POST['extensions-submitted'])) {
        $extensions = getFilesExtensions($_FILES);
        if (empty($extensions)) {
            echo '<h6>Nenhuma extensão foi encontrada.</h6>';
        } else {
            echo '<ol>';
                echo '<li>' . implode('</li><li>', $extensions) . '</li>';
            echo '</ol>';
        }
    }
?>
