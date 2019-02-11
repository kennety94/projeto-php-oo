<?php 
	require_once 'classes/Conexao.php';
	class Filme extends Conteudo{


		protected $duracao;
		protected $diretor;

		public function __construct($titulo, $data_lancamento, $genero, $duracao, $diretor){
			parent::__construct($titulo, $data_lancamento, $genero);
			$this->duracao = $duracao;
			$this->diretor = $diretor;
		}

		public function getDuracao(){
			return $this->duracao;
		}

		public function setDuracao($duracao){
			$this->duracao = $duracao;
		}

		public function getDiretor(){
			return $this->diretor;
		}

		public function setDiretor($diretor){
			$this->diretor = $diretor;
		}

		public function inserir(Filme $filme){

			$pdo = Conexao::conectar();
			
			$sql = 'INSERT INTO conteudos(titulo, data_lancamento, genero, assistido, duracao, diretor, temporadas, tipo)
					VALUES(?,?,?,?,?,?,?,?)';
			
			$q = $pdo->prepare($sql);

			$q->execute(array($filme->titulo, $filme->data_lancamento, $filme->genero, 0, $filme->duracao, $filme->diretor, 0, 'f'));
				
			Conexao::desconectar();

			header('Location: index.php');

		}
	}

?>