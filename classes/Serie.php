<?php 
	class Serie extends Conteudo{
		protected $temporadas;

		public function __construct($titulo, $data_lancamento, $genero, $temporadas = 1){
			parent::__construct($titulo, $data_lancamento, $genero);
			$this->temporadas = $temporadas;
		}

		public function getTemporadas(){
			return $this->temporadas;
		}

		public function setTemporadas($temporadas){
			$this->temporadas = $temporadas;
		}

		public function inserir(Serie $serie){

			$pdo = Conexao::conectar();
			
			$sql = 'INSERT INTO conteudos(titulo, data_lancamento, genero, assistido, duracao, diretor, temporadas, tipo)
					VALUES(?,?,?,?,?,?,?,?)';
			
			$q = $pdo->prepare($sql);

			$q->execute(array($serie->titulo, $serie->data_lancamento, $serie->genero, 0, 0, '', $serie->temporadas, 's'));
				
			Conexao::desconectar();

			header('Location: index.php');

		}

	}

?>