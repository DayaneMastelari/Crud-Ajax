$(document).ready();

$(function listar(){
	$('#tabela').empty();
	$.ajax({
		type:'post',
		dataType: 'json',
		url: 'listaParticipante.php',
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				var alterar = '<a class="btn btn-default" href="form-altera-participante.php?id=' +dados[i].id + '"><span class="glyphicon glyphicon-pencil"></span></a>';
				var remover = '<a class="btn btn-default" href="?id=' + dados[i].id + '"><span class="glyphicon glyphicon-trash"></span></a>';
				$('#tabela').append('<tr><td>'+dados[i].nome+'</td><td>'+dados[i].telefone+'</td><td>'+dados[i].email+'</td><td>' + alterar + '</td><td>' + remover + '</td></tr>');

			}
		}
	});
});

$(function cadastrar(){

	$('#formulario-cadastro').submit(function(event){
		event.preventDefault();
		var formDados = $("#formulario-cadastro").serialize();

		$.ajax({
			url:'cadastraParticipante.php',
			type:'POST',
			data:formDados,
			cache:false,
			dataType:'html',
			success: function(data){
				console.log(data);
				$("#resultado").html(data);
			}
		});
		return false;
	});
});

$(function atualizar(){

	$('#formulario-altera-participante').submit(function(event){
		event.preventDefault();
		var formDados = $("#formulario-altera-participante").serialize();

		$.ajax({
			url:'atualizaParticipante.php',
			type:'POST',
			data:formDados,
			cache:false,
			dataType:'html',
			success: function(data){
				console.log(data);
				$("#resultado").html(data);
			}
		});
		return false;
	});
});

$(function remove(id){
	$(document).on("click", "#remover", function(){

		$.ajax({
			url: remove-participante.php,
			type : "POST",
			dataType : "id=" + id,
			success: function(data){
				$("td"+id).remove();
			  }
		})
	});
});
