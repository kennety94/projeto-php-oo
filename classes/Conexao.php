<?php 
	class Conexao{
		private static $conn;

		public function __construct(){
			$this->abreConexao();
		}

		public static function conectar()
		{
			if(null == self::$conn)	{
				try
				{
					self::$conn =  new PDO('mysql:host=localhost;dbname=netflix', 'root', '');
				}
				catch(PDOException $exception)
				{
					die($exception->getMessage());
				}
			}
			return self::$conn;
		}

		public static function desconectar(){
			self::$conn = null;
		}
	}
?>