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
    	?>
    	<div class="page-header container">
        	<h1>Participe do Sorteio</h1>
        </div>
        <form action="adiciona-participante.php" method="post" class="container"> 
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input name="nome" id="nome" class="form-control" type="text" placeholder="Seu nome">
                </div>
                <div class="form-group col-md-6">
                    <div class="row">
                        <div class="control-label col-md-12">
                            <label for="cpf">CPF</label>
                        </div>
                        <div class="col-md-6">
                            <input name="cpf" id="cpf" class="form-control" type="text" placeholder="Seu CPF">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <label for="email">Email</label>
                    <input name="email" id="email" class="form-control" type="email" placeholder="seu@email">
                </div>
                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="label-control col-md-12">
                            <label for="cidade">Cidade</label>
                        </div>
                        <div class="col-md-6">
                            <input name="cidade" id="cidade" class="form-control" type="text" placeholder="Cidade"> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <label class="control-label col-md-12" for="cep">CEP</label>
                        <div class="col-md-6">
                            <input name="cep" id="cep" class="form-control" type="text" placeholder="CEP">
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="tel">Telefone</label>
                        </div>
                        <div class="col-md-6">
                            <input name="telefone" id="tel" class="form-control" type="tel" placeholder="Seu Telefone">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">                
                <div class="form-group col-sm-6 col-md6 col-lg-6">
                    <label for="endereco">Endereço</label>
                    <input name="endereco" id="endereco" class="form-control" type="text" placeholder="Seu Endereço">
                </div>
                <div class="form-group col-sm-3 col-md-3 col-lg-3">
                    <label for="estado">Estado</label>
                    <select name="estado" class="form-control">
                    <option value="AC">AC</option>
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
                            <input name="bairro" id="bairro" class="form-control" type="text" placeholder="Bairro">
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="nasc">Nascimento</label>
                        </div>
                        <div class="col-md-6">
                            <input name="nascimento" id="nasc" class="form-control" type="text" placeholder="Data de Nascimento">
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