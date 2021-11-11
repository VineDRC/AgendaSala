<?php
require('conexao.php');

$agenda_sala = [];
$dados = "SELECT * FROM agenda_sala";
$con = $mysqli->query($dados) or die($mysqli->error);
?>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<p class="subtitle">Salas Agendada</p>
<div id="BtnCabecalho">
<a href="cadastro.php"><button id="BtnCadastro">Cadastro</button></a>
</div>
<hr>
<div class="titleproducts">
    <table class="table bordered striped centered">
        <tbody>
            <tr class="negrito products">
                <td>Nome</td>
                <td>Nome Sala</td>
                <td>Data</td>
                <td>Horario</td>
                <td>Excluir</td>
            </tr>

            <?php while ($dado = $con->fetch_array()) { ?>
                <tr class="products">
                    <td><?php echo $dado['nome']; ?></td>
                    <td><?php echo $dado['nome_sala']; ?></td>
                    <td><?php echo $dado['data']; ?></td>
                    <td><?php echo $dado['horario']; ?></td>
                    <td><a href="excluir.php?id=<?= $dado['id']; ?>">Excluir</a></td>
                    <!--<td><form action="" method="post"><input type="submit" href="excluir.php" value="Excluir" name="excluir"<?= $dado['id']?>></form>
                        <?php
                           // if(isset($_POST["excluir"])){
                                 // $id = $dado['id'];
                                  //echo ($id);
                                  //$deletar = "DELETE FROM agenda_sala WHERE id='$id'";
                                  //$con = $mysqli->query($deletar) or die($mysqli->error);
                                 // header("Refresh:3");
                           // }
                            //require("conexao.php");
                            //$string = implode("",$dado['id']);
                            //echo($string);
                            //$deletar = "DELETE agenda_sala FROM WHERE id=$string";
                            //header('cadastro.php')
                        ?>
                    </td> -->
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>