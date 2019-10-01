$(document).ready(function() {
	preecheTabela();
	function preecheTabela(){



		$.ajax({
			method: 'get',
			url: 'listar_enquetes.php',
			dataType: 'json',
			success: function(dados){				
				$('#enquete').html('');
				for(var i = 0; i < dados.length; i++){
                    $('#enquete').append('<tr>'+
							'<td><a href="opicao.php?id_pergunta='+ dados[i]['id_pergunta']  +'">' + dados[i]['per_pergunta'] +'</a></td><td>' + dados[i]['per_tempo'] + '</td></tr>' )
							;
				}

			}
		});
	}
	$('#listarenquete').on('click', function(event) {
		event.preventDefault();
	
	});
	 opicao();
	function opicao(){
    $.ajax({
			method: 'get',
			url: 'listar_opicao.php?id_pergunta=' + $("input[name='id_pergunta']").val(),
			dataType: 'json',
			success: function(dados){				
				$('#opicao').html('');
				for(var i = 0; i < dados.length; i++){
                    $('#opicao').append('<tr>'+
							
							'<td>' + dados[i]['per_pergunta'] +'</td>'+
							'<td>' + dados[i]['opi_opicao'] + '</td>'+
							'<td>'+ '<input type="radio" value="'+dados[i]['id_opicao']+'"name="opicoes"'+'</td></tr>' );
				}

			}

		});
	}
	$('#listaropicao').on('click', function(event) {
		event.preventDefault();
	   
});
$('#salvar').on('click', function(event){
event.preventDefault();
$.ajax({
	method:'get',
	url:'salvar.php',
	dataType:'json',
	data: {opicoes: $("input[name='opicoes']:checked").val(), id_per:$("input[name='id_pergunta']").val()},
	success: function(dados){
	alert("Salvo com sucesso");    
	}
})
})
});

