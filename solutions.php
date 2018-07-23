<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="description" content="Soluções dos exercícios para fazer parte do Team CI&T">
    <meta name="author" content="Bruna Pimenta">
    <link rel="icon" href="assets/icon.png">

    <title>Team CI&T | Solu&ccedil;&otilde;es</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/solutions.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Team CI&T</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">In&iacute;cio</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="solutions.php">Solu&ccedil;&otilde;es</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Contato</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Solu&ccedil;&otilde;es</h1>
      <p class="lead">Escolha uma solu&ccedil;&atilde;o abaixo e a veja funcionando.</p>

      <div class="row">
        <div class="col-2">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action" id="list-countries-list" data-toggle="list" href="#list-countries" role="tab" aria-controls="countries">Pa&iacute;ses</a>
            <a class="list-group-item list-group-item-action" id="list-bites-list" data-toggle="list" href="#list-bites" role="tab" aria-controls="bites">Jo&atilde;ozinho</a>
            <a class="list-group-item list-group-item-action" id="list-extensions-list" data-toggle="list" href="#list-extensions" role="tab" aria-controls="extensions">Extens&otilde;es</a>
            <a class="list-group-item list-group-item-action" id="list-form-list" data-toggle="list" href="#list-form" role="tab" aria-controls="form">Formul&aacute;rio</a>
            <a class="list-group-item list-group-item-action" id="list-parsers-list" data-toggle="list" href="#list-parsers" role="tab" aria-controls="parsers">Conversor</a>
            <a class="list-group-item list-group-item-action" id="list-selects-list" data-toggle="list" href="#list-selects" role="tab" aria-controls="selects">Select Field</a>
            <a class="list-group-item list-group-item-action" id="list-users-list" data-toggle="list" href="#list-users" role="tab" aria-controls="users">API</a>
          </div>
        </div>
        <div class="col-10">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show" id="list-countries" role="tabpanel" aria-labelledby="list-countries-list">
              <?php include_once('countries.php'); ?>
            </div>
            <div class="tab-pane fade" id="list-bites" role="tabpanel" aria-labelledby="list-bites-list">
              <?php include_once('bites.php'); ?>
            </div>
            <div class="tab-pane fade" id="list-extensions" role="tabpanel" aria-labelledby="list-extensions-list">
              <?php include_once('extensions.php'); ?>
            </div>
            <div class="tab-pane fade" id="list-form" role="tabpanel" aria-labelledby="list-form-list">
              <?php include_once('form.php'); ?>
            </div>
            <div class="tab-pane fade" id="list-parsers" role="tabpanel" aria-labelledby="list-parsers-list">
              <?php include_once('parsers.php'); ?>
            </div>
            <div class="tab-pane fade" id="list-selects" role="tabpanel" aria-labelledby="list-selects-list">
              <?php include_once('selects.php'); ?>
            </div>
            <div class="tab-pane fade" id="list-users" role="tabpanel" aria-labelledby="list-users-list">
              <!-- include_once('users.php'); -->
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted"><a href="contact.php" target="_blank">Bruna Pimenta</a> &copy; 2018</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="/assets/js/vendor/popper.min.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        var url = window.location.href;
        if (url.indexOf("#") > -1) {
          $('#list-tab a[href="' + url.substr(url.indexOf("#")) + '"]').tab('show');
        } else {
          $('#list-tab a[href="#list-countries"]').tab('show');
        }
      });
    </script>
  </body>
</html>
