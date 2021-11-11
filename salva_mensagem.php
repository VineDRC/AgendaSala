<?php
include('conexao.php');  // Este comando é para fazer a ligação de uma página, que está ligando com o banco de dados

$databanco = "SELECT data FROM agenda_sala"; // Aqui é o comando para puxar todas as datas cadastradas na agenda_sala

$con = $mysqli->query($databanco) or die($mysqli->error); // Aqui ele vai conectar no banco e fazer uma busca, caso não conecta vai
// retornar um erro

$data = $_POST['Data']; // Aqui é pra enviar o dado escrito no campo do formulario da data

//print_r($con . '--'. $data . '--' . $databanco . '--' . $databanco['data']); IGNORA

while ($datacerta = $con->fetch_array()) { // Aqui eu não sei mt bem o que é, meu amigo que passou o código

    // $datanew = $datacerta['data']; // Pegando a informação da data dentro do array
    // print_r($datacerta);
    foreach ($datacerta as $dataren) {
        if ($dataren == $data) {  // If para verificar se a data digitada ja está guardada no banco
            print_r($dataren); // Print para teste de variavel
            echo "<script>alert('Sala já agendada !');</script>";
            header('Location: index.php');
            break 2;
        } else {
            $nome = $_POST['Nome']; //   var_dump($nome); Caso não esteja... Vai enviar o Nome, Sala, Hora 
            $sala = $_POST['Sala'];
            $hora = $_POST['Hora'];
            print_r($dataren);
           // $sql = "INSERT INTO agenda_sala(nome, nome_sala, data, horario) VALUES ('$nome','$sala', '$data', '$hora')"; // Inserir os dados no banco
            if (mysqli_query($mysqli, $sql)) { // Conexão dos dados com o banco
                // echo "<script>alert('$datanew');</script>"; // Alerta para teste de variavel
              //  header('Location: index.php'); //Isso é pra caso o dado não esteja registrado, após registrar no banco ele vai encaminhar o ususario para 
                // a página index.php
            } else {
                echo "Erro" . mysqli_connect_error($conexao); // Caso não conecta... Apresentar erro.
            }
            mysqli_close($mysqli);
        }
    }
}
