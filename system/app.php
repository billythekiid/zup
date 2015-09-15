<?php

class App extends Conexao{

	public function __construct() {
		parent::__construct();			       
	}

	// Valida CEP
	public function validaCEP($cep) {
		if (preg_match('/^(?:[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])$/', $this->trataCEP($cep))){
			return false;
		}
		return true;
	}

	// Retira Caracteres de CEP
	public function trataCEP($cep) {

		$a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ"!@#$%&*()_+={[}]/?;:.,\\\'<>°ºª ';
		$b = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr---------------------------------';	
		$cep = utf8_decode($cep);
		$cep = strtr($cep, utf8_decode($a), $b);
		$cep = strip_tags(trim($cep));
		$cep = str_replace(array("-----","----","---","--","-"), "", $cep);

		return trim(strtolower(utf8_encode($cep)));
	}
}