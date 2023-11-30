<?php 

require 'conexao.class.php';
include 'cliente.class.php'

interface IRepositorioCliente{

	public function cadastrarCliente($cliente);
	public function removerCliente($cliente);
	public function atualizarCliente($cliente);
	public function buscarCliente($cliente);
	public function getListarCliente();
}

class RepositorioClienteSQL implements IRepositorioCliente
{
	private $conexao;

	public function __construct()
	{
		$this->conexao = new Conexao("localhost", "locadora", "alunolab","popcorntv");
		if ($this->conexao->conectar() == false) {
			echo "Erro" . mysqli_error();
		}
	}

	public function cadastrarCliente($cliente)
	{
		$nome = $cliente->getNome();
		$cpf = $cliente->getCpf();
		$telefone = $cliente->getTelefone();
		$email = $cliente->getEmail();

		$sql = "INSERT INTO cliente(
			codigo,
			nome,
			cpf,
			telefone,
			email)

			VALUES(
				'')
		)
?>