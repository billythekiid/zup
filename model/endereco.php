<?php

class Endereco extends App{

	public $id;
	public $status;
    public $cep;
    public $endereco;
    public $bairro;
    public $cidade;
    public $estado;

	//Construtor
	public function __construct() {

		parent::__construct();
		$id       = $this->id;
		$status   = $this->status;
	    $cep      = $this->cep;
	    $endereco = $this->endereco;
	    $bairro   = $this->bairro;
	    $cidade   = $this->cidade;
	    $estado   = $this->estado;		       
	}

	public function salvar($obj) {

		$ins = $this->consulta("SELECT * FROM tb_endereco WHERE cep = ".$obj->getCep()."");

		if($this->existe($ins)){
			
			$response["status"]   = "ERRO";
	 		$response["mensagem"] = "O endereço informado já foi cadastrado.";
		}
		else{

			$insere = $this->consulta("INSERT INTO tb_endereco (`id`, `cep`, `endereco`, `bairro`, `cidade`, `estado`)
													  	   VALUES ('', '".$obj->getCep()."', '".$obj->getEndereco()."', '".$obj->getBairro()."', '".$obj->getCidade()."', '".$obj->getEstado()."')");
			if($insere){
				$response["status"]   = "SUCESSO";
	 			$response["mensagem"] =  "O endereço foi cadastrado com sucesso.";
			}			
		}

 		echo json_encode($response);
	}

	public function buscarCep($cep) {
 		
 		if($this->validaCEP($cep)){

			$response["status"]   = "ERRO";
 			$response["mensagem"] = "O CEP informado é inválido";
 		}
 		else{

 			$sel = $this->consulta("SELECT * FROM tb_endereco WHERE cep = ".$this->trataCEP($cep)."");
 			
 			if($retorno = $this->busca($sel)){

				$response["status"]   = "SUCESSO";
				$response["cep"]      = $retorno["cep"];
				$response["endereco"] = $retorno["endereco"];
				$response["bairro"]   = $retorno["bairro"];
				$response["cidade"]   = $retorno["cidade"];
				$response["estado"]   = $retorno["estado"];
	 		}
	 		else{
	 			$response["status"]   = "ERRO";
	 			$response["mensagem"] = "O CEP informado não foi encontrado";
	 		}
	 	}
 		
 		echo json_encode($response);
	}

	public function getId() {
 		return $this->id;
	}

	public function setStatus($value) {
		$this->status = $value;
	}

	public function getStatus() {
 		return $this->status;
	}	

	public function setCep($value) {
		$this->cep = $this->trataCEP($value);
	}

	public function getCep() {
 		return $this->cep;
	}	

	public function setEndereco($value) {
		$this->endereco = $value;
	}

	public function getEndereco() {
 		return $this->endereco;
	}

	public function setBairro($value) {
		$this->bairro = $value;
	}

	public function getBairro() {
 		return $this->bairro;
	}
	
	public function setCidade($value) {
		$this->cidade = $value;
	}

	public function getCidade() {
 		return $this->cidade;
	}

	public function setEstado($value) {
		$this->estado = $value;
	}

	public function getEstado() {
 		return $this->estado;
	}
}

