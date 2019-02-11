<?php 

    require_once 'classes/Conexao.php';

    if(!empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

    echo $id;

    $pdo = Conexao::conectar();

    $sql = 'DELETE FROM conteudos WHERE id = ?';
    
    $q = $pdo->prepare($sql);

    $q->execute(array($id));
        
    Conexao::desconectar();

    header('Location: index.php');


?>