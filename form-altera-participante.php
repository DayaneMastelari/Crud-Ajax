<!doctype html>
<html lang="pt">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script src="bootstrap/jquery.js"></script>
    <title>Cadastro Sorteio</title>
</head>
    <body>
    	<?php
            require_once("menu.php");
            require_once("class/Participante.php");
            require_once("class/ParticipanteDao.php");

            $participanteDao = new ParticipanteDao($conexao);
            $id = $_GET['id'];
            $participante = $participanteDao->buscaParticipante($id);
    	?>
    	<div class="page-header container">
        	<h1>Alterando Participante</h1>
        </div>
        <form action="altera-paciente.php" method="post" class="container"> 
            <input type="hidden" name="id" value="<?=$participante->getId()?>">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input name="nome" class="form-control" type="text" value="<?=$participante->getNome()?>">
                </div>
                <div class="form-group col-md-6">
                    <div class="row">
                        <div class="control-label col-md-12">
                            <label for="cpf">CPF</label>
                        </div>
                        <div class="col-md-6">
                            <input name="cpf" class="form-control" type="text" value="<?=$participante->getCpf()?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <label for="email">Email</label>
                    <input name="email" class="form-control" type="email" value="<?=$participante->getEmail()?>">
                </div>
                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="label-control col-md-12">
                            <label for="cidade">Cidade</label>
                        </div>
                        <div class="col-md-6">
                            <input name="cidade" id="cidade" class="form-control" type="text" value="<?=$participante->getCidade()?>"> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <label class="control-label col-md-12" for="cep">CEP</label>
                        <div class="col-md-6">
                            <input name="cep" class="form-control" type="text" value="<?=$participante->getCep()?>">
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="tel">Telefone</label>
                        </div>
                        <div class="col-md-6">
                            <input name="telefone" class="form-control" type="tel" value="<?=$participante->getTelefone()?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">                
                <div class="form-group col-sm-6 col-md6 col-lg-6">
                    <label for="endereco">Endereço</label>
                    <input name="endereco" class="form-control" type="text" value="<?=$participante->getEndereco()?>">
                </div>
                <div class="form-group col-sm-3 col-md-3 col-lg-3">
                    <label for="estado">Estado</label>
                    <select name="estado" class="form-control">
                        <option><?=$participante->getEstado()?></option>
                        <option value="Acre">Acre</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                </div>
            </div>

            <div class="row">                
                <div class="form-group col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="bairro">Bairro</label>
                        </div>
                        <div class="col-md-6">
                            <input name="bairro" class="form-control" type="text" value="<?=$participante->getBairro()?>">
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="nasc">Nascimento</label>
                        </div>
                        <div class="col-md-6">
                            <input name="nascimento" class="form-control" type="text" value="<?=$participante->getNascimento()?>">
                        </div>
                    </div>
                </div> 
            </div>
            <div class="form-group col-md6">
                <button class="btn btn-primary btn-lg" type="submit">Gravar</button>
            </div> 
        </form>
    </body>
</html>