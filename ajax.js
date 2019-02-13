$(document).ready(function listaParticipante(){
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

$(function CadastoParticipante(){

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

$(function atualizaParticipante(){

	$('#formulario-cadastro').submit(function(event){
		event.preventDefault();
		var formDados = new FormData($(this)[0]);

		$.ajax({
			url:'atualizaParticipante.php',
			type:'POST',
			data:formDados,
			cache:false,
			contentType:false,
			processData:false,
			success:function (data)
     {document.getElementById('resultado').innerHTML = 'Alteraro com sucesso.';
			  $('#envia_msg').each (function(){
			this.reset();
           });
	  },
			dataType:'html'
		});
		return false;
	});
});

$(document).ready(function buscaParticipante(){
	$('#formulario-altera-participante').empty();
	$.ajax({
		type:'post',
		dataType: 'json',
		url: 'listaParticipante.php',
		success: function(dados){
			$('#nome').value(dados.nome);
			
		}
	});
});

/*for(var i=0;dados.length>i;i++){
	$('#formulario-altera-participante').append('<tr><td>'+dados[i].nome+'</td><td>'+dados[i].telefone+'</td><td>'+dados[i].email+'</td></tr>');
}*/


