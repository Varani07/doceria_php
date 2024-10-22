<!-- index.html -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doceria Dark Moon</title>
  
  <script type="text/javascript">
  function deletar(idingredientes) {
      if(confirm('Deseja excluir o registro?')){
          document.location.href='../controller/ingredienteBO.php?acao=deletar&idingredientes='+idingredientes;
      }
    }
  </script>
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
      </div>
      <div class="conteudo">
        <h2>Listagem de Ingredientes</h2>        
        <table style="float: left; margin-right: 20px">
          <thead>
            <tr>
              <th>ID</th>
              <th>Descrição</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <!-- Dados da listagem -->
            <?php
                include_once '../model/database/IngredienteDAO.php';
                $dao = new IngredienteDAO();
                $lista = $dao->list();
                foreach ($lista as $value){
                    
                
            ?>
            <tr>
              <td><?php echo $value->idingredientes; ?></td>
              <td><?php echo $value->descricao; ?></td>
              <td><button name="btnupdingrediente" onclick="location.href='upingrediente.php?idingredientes=<?php echo $value->idingrediente; ?>'">Alterar</button></td>
              <td><button name="btnexcluir" onclick="javascript:deletar(<?php echo $value->idingrediente; ?>)">Deletar</button></td>
            </tr>
            <?php
                }
            ?>
          </tbody>
        </table>
        <button style="float: right" name="btncadingrediente" onclick="location.href='cadingrediente.php'">Cadastrar ingrediente</button>
      </div>
    </div>
    <div class="rodape">
      <p>&copy; 2023 Doceria Dark Moon. Todos os direitos reservados.</p>
    </div>
  </div>
</body>
</html>
