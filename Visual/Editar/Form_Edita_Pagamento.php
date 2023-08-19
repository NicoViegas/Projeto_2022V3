<!DOCTYPE html>
<link rel="stylesheet" href="../Estilo/Reset.css">
<link rel="stylesheet" href="../Estilo/Estilo.css">

<html>
    <head>
        <meta charset="utf-8">
        <title>PANIFICADORA ALPHA</title>
    </head>

    <Body>
        <header>

            <nav> <!-- Navigation  -->
                <a id = "Logo" href  = "../../index.html">PANIFICADORA ALPHA</a>
                <a class = "Button" style="position: relative; left: 500px; background-color: aquamarine;" href="../../Cadastro.html">CADASTRO</a>
                <a class = "Button" style="position: relative; left: 500px; " href="../..//Listagem.html">LISTAGEM</a>
            </nav>


        </header>

        <?php
            require_once '../../DAO/conexao.php';
            require_once '../../DAO/DAO_Pagamento.php';

            $Id_pagamento = filter_input(INPUT_POST, 'Id_pagamento');
            $dao = new DAO_Pagamento();
            $lista = $dao->ListaPagamentoDois($Id_pagamento);

            $veiculo = $lista[0];
        ?>
        <form action="Edita_Pagamento.php" method = "POST" class = "form">
            <div>
                <h1 class = "broco" style = "margin-left: 500px">
                    <a>
                        <label class = "SlSus" name="Input_Id_Pagamento" id="Input_Id_Pagamento" >
                        <input type = "hidden" name = "Input_valTotPagamento" id = "Input_valTotPagamento" value="<?php echo  $pagamento['Id_Pagamento']?>">

                        <label for = "Input_Id_Cpf">Cpf:</label>
                        <label name="Input_Id_Cpf" id="Input_Id_Cpf" value="<?php echo  $pagamento['Quantidade_Ali']?>">  
                        <input type = "text" name = "Input_valTotPagamento" id = "Input_valTotPagamento" value="<?php echo  $pagamento['ValTotPagamento']?>">
                        <br>
                        <label for = "Input_Id_Alimentos">Nome Alimento:</label>
                        <label class = "SlSus" name="Input_Id_Alimentos" id="Input_Id_Alimentos" value="<?php echo  $pagamento['Id_Alimentos']?>">
                        </select>
                        <br>
                        <label for = "Input_Quantidade_Ali">Quantidade:</label>
                        <input type = "text" name = "Input_Quantidade_Ali" id = "Input_Quantidade_Ali" value="<?php echo  $pagamento['Quantidade_Ali']?>">
                        <br>
                        <label for = "Input_Met_Pagamento">Metodo Pagamento:</label>
                        <input type = "text" name = "Input_Met_Pagamento" id = "Input_Met_Pagamento" value="<?php echo  $pagamento['Met_Pagamento']?>">
                        <br>
                        <label for = "Input_valTotPagamento">Valor Total Pagamento:</label>
                        <input type = "text" name = "Input_valTotPagamento" id = "Input_valTotPagamento" value="<?php echo  $pagamento['ValTotPagamento']?>">
                        <br>
                        <br>
                        <button> Salvar </button>
                    </a>
                </h1>
            </div>
        </form>
        <footer>
            <h2>REDES SOCIAIS:</h2><h2 style="padding-left: 890px; text-align: right"> TELEFONE: 4002-8922 </h2>
            <div class="div_socials">
                <img class="img_social" src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpixelartmaker.com%2Fart%2F2a810f7dca91c29.png&f=1&nofb=1" href = "https://www.youtube.com/watch?v=BFfaG_V99I8" alt="" srcset="">
                <img class="img_social" src="https://i.ytimg.com/vi/CCp6YoMYZy4/hqdefault.jpg" alt="" srcset="">
                <img class="img_social" src="https://imageproxy.ifunny.co/crop:x-20,resize:320x,crop:x800,quality:90x75/images/68f28012619a48f9816be52b4ae7771e8d10263a47ef2b92c1dbff5987ae08f5_1.jpg" alt="" srcset="">
            </div>
        </footer>
    </Body>
</html>
<!--
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../Estilo/Estilo.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cadastro Pagamento</title>
</head>
<body>
    <h1>Cadastro de Pagamentos</h1>
    <form action="Cadastro_Pagamento.php" method = "POST">



        listar Opções de Cpf
        <label for = "Input_Id_Cpf">Cpf:</label>

        <select name="Input_Id_Cpf" id="Input_Id_Cpf" >
            <?php
            require_once '../../CLASSES_Modelo/Cliente.php';
            require_once '../../DAO/DAO_Cliente.php';
            require_once '../../DAO/conexao.php';

            $dao = new DAO_Cliente();
            $lista = $dao->ListaCliente();
            foreach ($lista as $linha) {
                $val = $linha['Id_Cpf'];
                $name = $linha['Nom_Cliente'];
                echo "<option value='$val' > $name </option>";
            };
            ?>
        </select>




        <!-- Listar opções de alimentos -->
        <br>
        <label for = "Input_Id_Alimentos">Nome Alimento:</label>
        <select class = "SlSus" name="Input_Id_Alimentos" id="Input_Id_Alimentos">
        <?php
        require_once '../../CLASSES_Modelo/Alimentos.php';
        require_once '../../DAO/DAO_Alimentos.php';
        require_once '../../DAO/conexao.php';

        $dao = new DAO_Alimentos();
        $lista = $dao->ListaAlimentos();
        foreach ($lista as $linha) {
            $val = $linha['Id_Alimento'];
            $name = $linha['Nome_Ali'];
            echo "<option value=' $val' > $name </option>";
        }
        ?>
        </select>
        <br>
        <label for = "Input_Quantidade_Ali">Quantidade:</label>
        <input type = "text" name = "Input_Quantidade_Ali" id = "Input_Quantidade_Ali">
        <br>
        <label for = "Input_Met_Pagamento">Metodo Pagamento:</label>
        <input type = "text" name = "Input_Met_Pagamento" id = "Input_Met_Pagamento">
        <br>
        <label for = "Input_valTotPagamento">Valor Total Pagamento:</label>
        <input type = "text" name = "Input_valTotPagamento" id = "Input_valTotPagamento">
        <br>
        <br>
        <button> Salvar </button>
        <br>
        <br>
        <br>
        <br>
        <a href="../Lista/ListarPagamento.php">Listar Pagamentos</a>
        <br>
        <a href="../../index.php">Voltar ao inicio</a>
    </form>

    
</body>
</html>
-->