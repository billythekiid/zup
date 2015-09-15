<?php    
    // System

    // Verificar de existe requisição
    if(isset($_GET["cep"]) && !empty($_GET["cep"])){

	    $cep = $_GET["cep"];

	    $endereco = new Endereco();
	    $endereco->buscarCep($cep);
    }
    else{
    	?>
			<form action="busca.php" method="GET" name="busca" id="busca">
			<input type="text" id="cep" name="cep"/>
			<button>Pesquisar</button>
			</form>

			<div class="clear"></div>
    	<?php
    }


