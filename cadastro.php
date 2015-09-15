<?php    
    // System
    include('system/system.php');

    // Verificar de existe requisição
    if(isset($_POST["cep"]) && !empty($_POST["cep"])){

	    $endereco = new Endereco();
	    $endereco->setCep($_POST["cep"]);
	    $endereco->setEndereco($_POST["endereco"]);
	    $endereco->setBairro($_POST["bairro"]);
	    $endereco->setCidade($_POST["cidade"]);
	    $endereco->setEstado($_POST["estado"]);
	    $endereco->salvar($endereco);
    }
    else{
	?>

		<form action="cadastro.php" method="POST" name="cadastro" id="cadastro">

		<span>
			<label>CEP</label>
			<input type="text" id="cep" name="cep"/>
		</span>

		<span>
			<label>Endereço</label>
			<input type="text" id="endereco" name="endereco"/>
		</span>

		<span>
			<label>Bairro</label>
			<input type="text" id="bairro" name="bairro"/>
		</span>

		<span>
			<label>Cidade</label>
			<input type="text" id="cidade" name="cidade"/>
		</span>

		<span>
			<label>Estado</label>
			<input type="text" id="estado" name="estado" maxlength="2" />
		</span>

		<button>Cadastrar</button>
		</form>

		<div class="clear"></div>

	<?php }
	    	
