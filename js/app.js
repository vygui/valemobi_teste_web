
// --
//Esta função envia os dados do formulário através do ajax
// --

$(function() {
    // Seleciona o formulário
    var form = $('#negociar');

    // Seleciona o local onde exibira mensagem - interface
    var formMessages = $('#contato_enviado');
	
	

    // Evento que escuta o formulário de contato quando for enviado
	$(form).submit(function(event) {
		// Faz o navegador parar o carregamento e envio
		event.preventDefault();
		
		//validação de dados 
		quantidade = document.negociar.quantidade.value;
		preco = document.negociar.preco_total.value;
		if (quantidade != '0' && quantidade != '') {
			quantidade = 'aprovado';
		}
		if (preco != '0' && preco != '00' && preco != '0,00' && preco != '') {
			preco = 'aprovado';
		}
		
		if (preco == 'aprovado' && quantidade == 'aprovado') {
		
			// Serialização do formulário 
			var formData = $(form).serialize();
		
			// Enviar o formulário com AJAX
			$.ajax({
				type: 'POST',
				url: $(form).attr('action'),
				data: formData
			}).done(function(response) {
				// Mensagem de sucesso - .successo
				$(formMessages).text('Operação salva.');
				$('#contato_enviado').css('display','block');
				$(formMessages).removeClass('erro');
				$(formMessages).addClass('sucesso');
				
				// Limpa o formulário
				document.negociar.codigo.value = "";
				document.negociar.nome.value = "";
				document.negociar.tipo.value = "";
				document.negociar.quantidade.value = "";
				document.negociar.preco_total.value = "";
			}).fail(function(data) {
				// Mensagem de erro - .erro
				$('#contato_enviado').css('display','block');
				$(formMessages).removeClass('sucesso');
				$(formMessages).addClass('erro');

				//Mensagem de erro
				if (data.responseText !== '') {
					$(formMessages).text(data.responseText);
				} else {
					$(formMessages).text('Opa! Ocorreu um erro e sua operação não pode ser salva.');
				}
			});
		} else {
			$(formMessages).text('Quantidade ou preço do produto inválido. Utileze apenas números.');
			$('#contato_enviado').css('display','block');
			$(formMessages).removeClass('sucesso');
			$(formMessages).addClass('erro');
		}
	});
	
});

		