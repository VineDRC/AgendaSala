<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Agenda</title>
</head>
<script src="Front.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,500&display=swap');
</style>

<body>
    <div id="FundoAgenda">
        <h1 id="Principal">Agenda de Reunião</h1>
        <h1>Por favor insira o seu Nome, Sala, Data e qual Horário queres agendar.</h1>
        <form method="POST" action="salva_mensagem.php">
            <h1 id="Nome">Insira o seu Nome : <input type="text" name="Nome" id="NomeEdit" maxlength="50" placeholder="Digite o seu Nome Completo..." required></h1>
            <h1 id="Sala">Insira o Nome da Sala : <input type="text" name="Sala" id="SalaEdit" placeholder="Ex : Sala de Reunião..." required></h1>
            <h1 id="Data">Insira a Data : <input type="date" name="Data" id="DataEdit">
                <h1 id="Horario">Insira o Horário : <input type="time" name="Hora" id="HorarioEdit">
                    <div id="Botao">
                        <input type="submit" value="Enviar" onclick="Enviar()" id="BtnEnviar">
                        <br>
                        <div id="Ahref">
                        <a href="index.php">Clique aqui para voltar a Agenda.</a>
                        </div>
                    </div>
        </form>
    </div>
</body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="style.css" />

</html>