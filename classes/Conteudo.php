<?php 

	class Conteudo{

		private $id;
		protected $titulo;
		protected $data_lancamento;
		protected $genero;
		protected $assistido;

		public function __construct($titulo, $data_lancamento, $genero, bool $assistido = false){
			$this->titulo = $titulo;
			$this->data_lancamento = $data_lancamento;
			$this->genero = $genero;
			$this->assistido = $assistido;
		}

		public function getId(){
			return $this->id;
		}

		public function getTitulo(){
			return $this->titulo;
		}

		public function getDataLancamento(){
			return $this->data_lancamento;
		}

		public function getGenero(){
			return $this->genero;
		}

		public function getAssistido(){
			return $this->assistido;
		}

		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		public function setDataLancamento($data_lancamento){
			$this->data_lancamento = $data_lancamento;
		}

		public function setGenero($genero){
			$this->genero = $genero;
		}

		public function setAssistido($assistido){
			$this->assistido = $assistido;
		}



		public function assistir(){}

		public function apagarConteudo(){}

		public function listarconteudos(){}

	}

?>