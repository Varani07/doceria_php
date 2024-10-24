<?php
include_once '../model/Ingrediente.php';
include_once '../model/database/IngredienteDAO.php';

if(isset($_REQUEST['acao'])){
    
    $acao = $_REQUEST['acao'];

    switch ($acao) {
        case 'inserir':
            //inserindo um ingrediente
            if(isset($_POST['txtnome']) && !empty($_POST['txtnome'])){
                $dao = new IngredienteDAO();
                $objeto = new Ingrediente();
                $objeto->descricao = $_POST['txtnome'];

                if($dao->insert($objeto)){
                    ?>
                    
                    <script type="text/javascript">
                        alert('Ingrediente salvo com sucesso.');
                        location.href = '../view/listaingredientes.php';
                    </script>

                    <?php
                }else{
                    ?>
                    
                    <script type="text/javascript">
                        alert('Erro! Item não foi salvo.');
                        history.go(-1);
                    </script>

                    <?php
                }
            }
            break;
        case 'alterar':
            if(isset($_POST['idingredientes']) && isset($_POST['txtnome']) && !empty($_POST['txtnome'])){
                $dao = new IngredienteDAO();
                $objeto = new Ingrediente();
                $objeto->idingredientes = $_POST['idingredientes'];
                $objeto->descricao = $_POST['txtnome'];
                if($dao->update($objeto)){
                    ?>
                    <script type="text/javascript">
                        alert('Ingrediente salvo com sucesso.');
                        location.href = '../view/listaingredientes.php';
                    </script>
                    <?php
                }else{
                    ?>
                    <script type="text/javascript">
                        alert('Problema ao alterar o ingrediente.');
                        history.go(-1);
                    </script>
                    <?php
                }
            }
            break;
        case 'deletar':
            if(isset($_GET['idingredientes'])){
                $id = $_GET['idingredientes'];
                $dao = new IngredienteDAO();
                if($dao->delete($id)){
                    ?>
                    <script type="text/javascript">
                        alert('Ingrediente deletado com sucesso.');
                        location.href = '../view/listaingredientes.php';
                    </script>
                    <?php
                }else{
                    ?>
                    <script type="text/javascript">
                        alert('Problema ao deletar o ingrediente.');
                        history.go(-1);
                    </script>
                    <?php
                }
            }
            break;
        default:

            break;
        }        
}

?>