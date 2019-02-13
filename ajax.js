$(document).ready(function(){
	$('#tabela').empty();
	$.ajax({
		type:'post',
		dataType: 'json',
		url: 'listaParticipante.php',
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				$('#tabela').append('<tr><td>'+dados[i].nome+'</td><td>'+dados[i].telefone+'</td><td>'+dados[i].email+'</td></tr>');
			}
		}
	});
});

$(function(){

	$('#formulario-cadastro').submit(function(event){
		event.preventDefault();
		var formDados = new FormData($(this)[0]);

		$.ajax({
			url:'cadastraParticipante.php',
			type:'POST',
			data:formDados,
			cache:false,
			contentType:false,
			processData:false,
			success:function (data)
     {document.getElementById('resultado').innerHTML = 'Cadastrado com sucesso.';
			  $('#envia_msg').each (function(){
			this.reset();
           });
	  },
			dataType:'html'
		});
		return false;
	});
});
