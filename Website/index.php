<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Notifier</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="seminario.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../styles/bootstrap/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Save Message</a></li>
            <li role="presentation"><a href="#footer">About</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Notifier</h3>
      </div>

      <div class="jumbotron">
        <h1>Notifier</h1>
        <p class="lead">Notifique com facilidade, a qualquer momento. Basta fixar a barra magnética e encaixar o Notifier. Pronto!</p>
      </div>
	  
		<form action="savedata.php" method="POST" role="form">
		  <div class="form-group">
			<label for="message">Mensagem:</label>
			<input type="text" class="form-control" id="message" name="message">
		  </div>
		  <input id="submit" type="submit" value="Salvar" class="btn btn-primary">
		</form>
		<br>
      <footer class="footer" id="footer">
        <p>Notifier é um produto criado por José Augusto e Érico, num Projeto da disciplina de Seminários em SI 3, com supervisão e Apoio do Professor Vinícius Gama.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
