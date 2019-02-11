<?php 

	require_once('classes/Conteudo.php');
	require_once('classes/Filme.php');
	require_once('classes/Serie.php');

	$titulo = $_POST['titulo'];
	$data_lancamento = $_POST['data_lancamento'];
	$genero = $_POST['genero'];
	$duracao = $_POST['duracao'];
	$diretor = $_POST['diretor'];
	$temporadas = $_POST['temporadas'];
	$tipo = $_POST['tipo'];


	if($tipo == 'f'){
		$conteudo = new Filme($titulo, $data_lancamento, $genero, $duracao, $diretor);
	}else{
		$conteudo = new Serie($titulo, $data_lancamento, $genero, $temporadas);
	}

	$conteudo->inserir($conteudo);

?>