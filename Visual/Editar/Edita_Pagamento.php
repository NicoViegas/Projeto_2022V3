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

        <form class = "form">
            <div class = "broco" style = "margin-left: 550px">
            <?php
                require_once '../../CLASSES_Modelo/Pagamento.php';
                require_once '../../DAO/DAO_Pagamento.php';
                require_once '../../DAO/conexao.php';

                //Pegando Com Filtragem
                $Id_Pagamento = filter_input(INPUT_POST, 'Input_Id_Pagamento');
                $Id_Cpf= filter_input(INPUT_POST, 'Input_Id_Cpf');
                $Id_Alimentos= filter_input(INPUT_POST, 'Input_Id_Alimentos');
                $Quantidade_ALi= filter_input(INPUT_POST, 'Input_Quantidade_Ali');
                $Met_Pagamento= filter_input(INPUT_POST, 'Input_Met_Pagamento');
                $ValTotPagamento= filter_input(INPUT_POST, 'Input_valTotPagamento');
                $Pagamento = new Pagamento($Id_Pagamento, $Id_Cpf, $Id_Alimentos,$Quantidade_ALi, $Met_Pagamento, $ValTotPagamento);

                $DAO_Pagamento = new DAO_Pagamento();
                if($DAO_Pagamento -> altera($Pagamento))
                {
                    echo 'Pagamento Cadastrado';
                }else{
                    echo 'deu ruim';
                };
            ?>
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