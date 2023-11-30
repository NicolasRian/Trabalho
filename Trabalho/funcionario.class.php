<?php 
	class funcionario{

		private $codigo;
		private $nome;
		private $cpf;
		private $telefone;
		private $email;
		private $funcional;
	

	public function __construct($codigo, $nome, $cpf, $telefone, $email, $funcional){

		$this->codigo = $codigo;
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->telefone = $telefone;
		$this->email = $email;
		$this->funcional = $funcional
	}
	//Parte do SET

	public function setCodigo($novoCodigo){
		$this->codigo = $novoCodigo;
	}

	public function setNome($novoNome){
		$this->nome = $novoNome;
	}

	public function setCpf($novoCpf){
		$this->cpf = $novoCpf;
	}

	public function setTelefone($novoTelefone){
		$this->telefone = $novoTelefone;
	}

	public function setEmail($novoEmail){
		$this->email = $novovEmail;
	}

	public function setFuncional()

	//Parte do GET

	public function getCodigo(){
		return $this->codigo;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function getEmail(){
		return $this->email;
	}
}

?>