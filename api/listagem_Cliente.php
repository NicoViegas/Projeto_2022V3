<?php
    require_once '../CLASSES_Modelo/Cliente.php';
    require_once '../DAO/DAO_Cliente.php';
    require_once '../DAO/conexao.php';

    $dao = new DAO_Cliente();
    $lista = $dao->ListaCliente();

    echo json_encode($lista);

?>