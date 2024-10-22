<!-- cadastro.html -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - Doceria Dark Moon</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
  <div class="geral">
    <div class="topo">
      <div class="logo">
        <img src="../img/logo.png" alt="Doceria Dark Moon">
      </div>
      <div class="texto-topo">
        <h1>Doceria Dark Moon</h1>
        <p>Artigos gourmet e doces deliciosos</p>
      </div>
    </div>
    <div class="menu-horizontal">
      <ul>
          <li><a href="principal.php">Início</a></li>
        <li><a href="#">Login</a></li>
      </ul>
    </div>
    <div class="container">
      <div class="menu-lateral">
        <ul>
          <li><a href="listaingredientes.php">Ingredientes</a></li>
          <li><a href="#">Receitas</a></li>
          <li><a href="#">Sair</a></li>
        </ul>
      </div>      <div class="conteudo">
        <form action="#" method="post">
          <label>Nome:</label>
          <input type="text" name="txtnome"><br><br>
          <input type="hidden" name="acao" value="inserir"/>
          <input type="submit" name="btnCadastrar" value="Cadastrar"/>
          <input type="reset" name="btnLimpar" value="Limpar"/>
        </form>
      </div>
    </div>
    <div class="rodape">
      <p>&copy; 2023 Doceria Dark Moon. Todos os direitos reservados.</p>
    </div>
  </div>
</body>
</html>
