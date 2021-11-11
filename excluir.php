<?php
    require('conexao.php');

    $id =filter_input(INPUT_GET, 'id');

    if ($id) {
        echo ($id);
        $deletar = "DELETE FROM agenda_sala WHERE id='$id'";
        $con = $mysqli->query($deletar) or die($mysqli->error);
}
header('Location: index.php');
exit;
?>