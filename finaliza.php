<html>
<body>
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <!-- Cabecalho -->
  <header>
    <?php
    $cabecalho_title = "Produto da Mirror Fashion";
    $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
    include("cabecalho.php");
    include("menu.php"); ?>
  </header>

  <div class="jumbotron">
    <div class="container">

      <h1>Pedido concluído!</h1>
      <p><?= $_POST['nome'] ?>, o seu pedido está em processamento e será enviado!</p>

    </div>
  </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-success">

          <div class="panel-heading">
            <h2 class="panel-title">Produtos</h2>
          </div>

          <div class="panel-body">

            <img src="img/produtos/foto2<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png"
        class="img-thumbnail img-responsive">

            <ul class="list-group">
              <li class="list-group-item">Produto: <?= $_POST['produto'] ?></li>
              <li class="list-group-item">Preço: <?= $_POST['preco'] ?></li>
              <li class="list-group-item">Tamanho: <?= $_POST['tamanho'] ?></li>
              <li class="list-group-item">Cor: <?= $_POST['cor'] ?></li>
              <li class="list-group-item">Mensagem: <?= $_POST['mensagem'] ?></li>
            </ul>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-success">

          <div class="panel-heading">
            <h2 class="panel-title">Dados pessoais</h2>
          </div>

          <div class="panel-body">

            <ul class="list-group">
              <li class="list-group-item">Nome Completo: <?= $_POST['nome'] ?></li>
              <li class="list-group-item">E-mail: <?= $_POST['email'] ?></li>
              <li class="list-group-item">CPF: <?= $_POST['cpf'] ?></li>
              <li class="list-group-item">Quer spam: <?= $_POST['spam'] ?></li>
              <li class="list-group-item">Nº Cartão: <?= $_POST['numero-cartao'] ?></li>
              <li class="list-group-item">Banceira: <?= $_POST['bandeira-cartao'] ?></li>
              <li class="list-group-item">Validade: <?= $_POST['validade-cartao'] ?></li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Rodapé -->
  <?php include("rodape.php"); ?>
</body>
</html>
