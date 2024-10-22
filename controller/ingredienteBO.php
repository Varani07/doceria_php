<?php
include_once '../model/Ingrediente.php';
include_once '../model/database/IngredienteDAO.php';

if(isset($_POST['acao'])){
    
    $acao = $_POST['acao'];

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
            $dao = new IngredienteDAO();
            $objeto = new Ingrediente();
            $objeto->idingredientes = 6;
            $objeto->descricao = 'Aveia';
            if($dao->update($objeto)){
                echo 'Ingrediente atualizado.';
                echo '<hr/>';
            }
            break;
        case 'deletar':
            $id = 6;
            $dao = new IngredienteDAO();
            if($dao->delete($id)){
                echo 'Registro apagado.';
                echo '<hr/>';
            }
            break;
        default:

            break;
        }        
}

?>