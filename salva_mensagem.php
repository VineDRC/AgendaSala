<?php
echo "<script>console.log('Debug Objects:');</script>";
require('conexao.php');
$databanco = "SELECT `data` FROM agenda_sala";

$con = $mysqli->query($databanco) or die($mysqli->error);
$data = $_POST['Data']; // Puxar o dando enviado pelo formulário
while ($datacerta = $con->fetch_array()) {
    $result[] = $datacerta;
}
for ($i = 0; $i < count($result); $i++) { // loop para receber numero em que o array está, para saber se é o último
    if ($result[$i][0] == $data) {  // If para verificar se a data digitada ja está guardada no banco
        echo "<script>alert('Sala já agendada!');</script>";
        sleep(2);
        header("Location: index.php");
        break;
    } else if ($i == (count($result)-1)) {
        // caso for a ultima verificação e não entrou no if acima, ele insere os valores
        $nome = $_POST['Nome']; //   var_dump($nome); Caso não esteja... Vai enviar o Nome, Sala, Hora 
        $sala = $_POST['Sala'];
        $hora = $_POST['Hora'];
        $sql = "INSERT INTO agenda_sala(nome, nome_sala, data, horario) VALUES ('$nome','$sala', '$data', '$hora')";
        if (mysqli_query($mysqli, $sql)) {
            echo "<script>alert('Data Inserida!');</script>";
            sleep(2);
            header("Location: index.php");
        } else {
            echo "Erro" . mysqli_connect_error($conexao);
        }
        break;
    }
}

mysqli_close($mysqli);
