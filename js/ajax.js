$(function(){
    // Executa assim que o botão de salvar for clicado
    $('#but_salvar').click(function(e){
        // Cancela o envio do formulário
        e.preventDefault();
        // Pega os valores dos inputs e coloca nas variáveis
        var telefone = $('#telefone').val();
        // Método post do Jquery
        $.post('php/insere.php', {
            telefone:telefone,
        }, function(resposta){
            // Valida a resposta
            if(resposta == 1){
                // Limpa os inputs
                $('input').val('');
                alert('Telefone cadastrado com sucesso');
            }else {
                alert('Telefone cadastrado com sucesso');
            }
        });
        
    });
});