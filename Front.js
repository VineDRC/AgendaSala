function Enviar() {
    var nome = document.getElementById('NomeEdit').value;
    var sala = document.getElementById('SalaEdit').value;
    var data = document.getElementById('DataEdit');
    var hora = document.getElementById('HorarioEdit');

        if (nome == ""){     /*Verificar Nome*/
            window.alert('Nome Vazio !');
        }else if (!isNaN(nome)){
            window.alert('Nome invalido !');
        }

        if (sala == ""){   /*Verifica Sala*/
            window.alert('Sala Invalida !');
        }else if (!isNaN(sala)){
            window.alert('Sala Invalida !')
        }
        if (data.value == ""){   /*Verificar Data*/
            window.alert('Data Vazia');
        }

        if (hora.value == ""){  /*Verificar Horário*/
            window.alert('Horario Vazio');
        }
}