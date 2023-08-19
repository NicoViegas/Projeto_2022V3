<?php
    require_once '../CLASSES_Modelo/Padeiro.php';
    require_once '../DAO/DAO_Padeiro.php';
    require_once '../DAO/conexao.php';

    $dao = new Dao_Padeiro();
    $lista = $dao->ListaPadeiro();
    foreach ($lista as $linha) {
    $val = $linha['Id_Pade'];
    $name = $linha['Nom_Pade'];
    echo "<option value= '$val' > $name </option>";
    };
?>