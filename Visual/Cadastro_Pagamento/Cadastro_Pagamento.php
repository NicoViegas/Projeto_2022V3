<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Panico de Ficadora Alpha</title>
  <link rel="icon" href="https://pbs.twimg.com/profile_images/1215734764323377152/-hmYx6ee_400x400.jpg">

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body style="background-image: url(https://i.pinimg.com/236x/19/d9/51/19d95128926c03fbfab2dd1bb647b971.jpg); background-repeat: no-repeat; background-size: cover; background-clip: content-box;">

  <!--Bara de navegação-->
  <nav class="purple lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <!--Logo a empresa-->
      <a id="logo-container" href="../../index.html" class="brand-logo  hide-on-med-and-down" style= "white-space: nowrap;">CADASTRAR PAGAMENTOS</a>
      <a id="logo-container" href="../../index.html" class="brand-logo  hide-on-large-only" style= "white-space: nowrap;">C: PAGAMENTOS</a>

      <ul class="right hide-on-med-and-down">
        <li><a href="../../cadastro.html">Cadastro</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="../../listagem.html">Listagem</a></li>
      </ul>

      <!--Barra de links quando está no mobile-->
        <ul id="nav-mobile" class="sidenav purple lighten-4">
            <li>
                <div class="user-view">
                <div class="background">
                    <img src="../../Assets/lapide.png">
                </div>
                    <a href="https://www.youtube.com/channel/UC238ckK-h99HMxXMhfuWtUw"><img class="circle" src="../../Assets/Panter_sprite.png"></a>
                    <a href="#name"><span class="white-text name">Tales Viegas</span></a>
                    <a href="#email"><span class="white-text email">talesviegas355@gmail.com</span></a>
                </div>
            </li>
        
        <li><a href="../../index.html">Home</a></li>
        <li><div class="divider"></div></li>
        <li><a href="../../cadastro.html"><i class="material-icons">add_to_photos</i>Cadastro</a></li>
        <li><a href="../../listagem.html"><i class="material-icons">format_list_bulleted</i>Listagem</a></li>

      </ul>      
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!--Apresentação principal-->
  <div class="section no-pad-bot" id="index-banner">
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container centered purple lighten-3">
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
                $Pagamento = new Pagamento(null, $Id_Cpf, $Id_Alimentos,$Quantidade_ALi, $Met_Pagamento, $ValTotPagamento);

                $DAO_Pagamento = new DAO_Pagamento();
                if($DAO_Pagamento -> incluiPagamento($Pagamento))
                {
                    echo 'Pagamento Cadastrado';
                }else{
                    echo 'deu ruim';
                };
            ?>
            </div>
        </div>
  </div>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>

  <!--Footer-->
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Sobre:</h5>
          <p class="grey-text text-lighten-4">SLA men, padaria mermão, esperava o que?</p>
        </div>

        <div class="col l3 s12 right">
          <h5 class="white-text">Redes Sociais:</h5>
          <ul>
            <li style="justify-content: space-between;" >
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img style="max-width: 50px; max-height: 50px;" class="circle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/2048px-Instagram_icon.png" alt=""></a>
              <a href="https://www.youtube.com/c/Manikomioloko"><img style="max-width: 50px; max-height: 50px;" class="circle" src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-512.png" alt=""></a>
              <a href="https://delegaciavirtual.sids.mg.gov.br/sxgn/"><img style="max-width: 50px; max-height: 50px;" class="circle" src="https://steamuserimages-a.akamaihd.net/ugc/1681498640431526343/C7281061AF178BD214655B0C1CD60ECCF0352DB5/?imw=512&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" alt=""></a>
            </li>
          </ul>
        </div>
        

      </div>
    </div>

    <div class="footer-copyright">
      <div class="container">
          Made by <a class="orange-text text-lighten-3" href="https://www.youtube.com/channel/UC238ckK-h99HMxXMhfuWtUw">Tales Viegas with Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../../js/materialize.js"></script>
  <script src="../../js/init.js"></script>

  <script>
        $(document).ready(function(){
          $('.btn').sidenav();
        });
  </script>
