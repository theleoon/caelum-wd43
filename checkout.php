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

      <h1>Ótima escolha!</h1>
      <p>Obrigado....</p>

    </div>
  </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-default">

          <div class="panel-heading">
            <h2 class="panel-title">Sua compra</h2>
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
      <div class="col-md-4">
        <div class="panel panel-default">

          <div class="panel-heading">
            <h2 class="panel-title">Dados pessoais</h2>
          </div>

          <div class="panel-body">
        <form action="finaliza.php" method="POST">
          <fieldset>
            <legend></legend>

            <input type="hidden" name="produto" value="Fuzzy Cardigan">
            <input type="hidden" name="preco" value="129.00">
            <input type="hidden" name="cor" value="<?= $_POST['cor'] ?>">
            <input type="hidden" name="tamanho" value="<?= $_POST['tamanho'] ?>">
            <input type="hidden" name="mensagem" value="<?= $_POST['mensagem'] ?>">

            <div class="form-group">
              <label for="nome">Nome completo</label>
              <input type="text" class="form-control" id="nome" name="nome" autofocus required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>

              <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input type="email" class="form-control"
                         id="email" name="email">
              </div>
            </div>
            <div class="form-group">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" id="cpf" name="cpf"
        placeholder="000.000.000-00">
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" value="sim" name="spam" checked>
                Quero receber spam da Mirror Fashion
              </label>
            </div>
          </fieldset>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="panel panel-default">

        <div class="panel-heading">
          <h2 class="panel-title">Cartão de Crédito</h2>
        </div>

        <div class="panel-body">
          <fieldset>
            <div class="form-group">
              <label for="numero-cartao">Número - CVV</label>
              <input type="text" class="form-control"
                     id="numero-cartao" name="numero-cartao">
            </div>

            <div class="form-group">
              <label for="bandeira-cartao">Bandeira</label>
              <select name="bandeira-cartao" id="bandeira-cartao"
                  class="form-control">
                <option value="master">MasterCard</option>
                <option value="visa">VISA</option>
                <option value="amex">American Express</option>
              </select>
            </div>

            <div class="form-group">
              <label for="validade-cartao">Validade</label>
              <input type="month" class="form-control"
                     id="validade-cartao" name="validade-cartao">
            </div>
          </fieldset>

          <button type="submit" class="btn btn-primary">
            <span class="glyphicon glyphicon-thumbs-up"></span>
            Confirmar Pedido
          </button>
        </form>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- Rodapé -->
  <?php include("rodape.php"); ?>
</body>
</html>
