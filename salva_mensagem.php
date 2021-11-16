<?php
echo "<script>console.log('Debug Objects:');</script>";
require('conexao.php');  // Este comando é para fazer a ligação de uma página, que está ligando com o banco de dados
$databanco = "SELECT data FROM agenda_sala"; // Aqui é o comando para puxar todas as datas cadastradas na agenda_sala

$con = $mysqli->query($databanco) or die($mysqli->error); // Aqui ele vai conectar no banco e fazer uma busca, caso não conecta vai
// retornar um erro

$data = $_POST['Data']; // Aqui é pra enviar o dado escrito no campo do formulario da data
//print_r($con . '--'. $data . '--' . $databanco . '--' . $databanco['data']); IGNORA
while ($datavalida = $con->fetch_array()) { // Aqui eu não sei mt bem o que é, meu amigo que passou o código

    // $datanew = $datacerta['data']; // Pegando a informação da data dentro do array
    // print_r($datacerta);
    for($i = 0; $i<count($datavalida); $i++){ // loop para receber numero em que o array está, para saber se é o último
        if ($datavalida[$i] == $data) {  // If para verificar se a data digitada ja está guardada no banco
           echo "<script>alert('Sala já agendada!');</script>";
           sleep(2);
           header("Location: index.php");
           break 2;
        }else{
            if(!isset($datavalida[$i+1])){// caso for a ultima verificação e não entrou no if acima, ele insere os valores
                $nome = $_POST['Nome']; //   var_dump($nome); Caso não esteja... Vai enviar o Nome, Sala, Hora 
                $sala = $_POST['Sala'];
                $hora = $_POST['Hora'];
                $sql = "INSERT INTO agenda_sala(nome, nome_sala, data, horario) VALUES ('$nome','$sala', '$data', '$hora')"; // Inserir os dados no banco
                if (mysqli_query($mysqli, $sql)) { // Conexão dos dados com o banco
                    echo "<script>alert('Data Inserida!');</script>";
                    sleep(2);
                    header("Location: index.php"); //Isso é pra caso o dado não esteja registrado, após registrar no banco ele vai encaminhar o ususario para 
                    // a página index.php
                } else {
                    echo "Erro" . mysqli_connect_error($conexao); // Caso não conecta... Apresentar erro.
                }
                break 2;
            }
        }
    }
}

mysqli_close($mysqli);
