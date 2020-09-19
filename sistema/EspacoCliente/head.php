<?php
	if (!isset($_SESSION)) {
		session_start();

		echo $id_cli = $_SESSION["id_cli"];
		echo $idEvent = $_SESSION["evento"];

		$link = DBConnect();
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>.::Trio Bagunça - Animando sua festa::.</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="../css/style.css" type="text/css" rel="stylesheet" />
<link href="../css/responsive.css" type="text/css" rel="stylesheet">
<link href="../css/destaque.css" type="text/css" rel="stylesheet" />
<link href="../css/lightbox.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="../js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="../js/jquery.destaques.js"></script>
<script type="text/javascript" src="../js/jquery.mask.min.js"></script>
<script type="text/javascript" src="../js/lightbox-2.6.min.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/textzoom.js"></script>
<script type="text/javascript" src="../js/slick.js" charset="utf-8"></script>
<script type="text/javascript" src="../js/mask.js" charset="utf-8"></script>
<script type="text/javascript" src="../js/busca_cep.js" charset="utf-8"></script>
<script type="text/javascript">
	function mascara(telefone) { 
	   	if(telefone.value.length == 0)
		 	telefone.value = '(' + telefone.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
	   	if(telefone.value.length == 3)
		  	telefone.value = telefone.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
	 	if(telefone.value.length == 10)
		 	telefone.value = telefone.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
	}

	function valida_form () {
		var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		if (!filter.test(document.getElementById("email").value)) {
			alert('Por favor, digite o email corretamente');
			document.getElementById("email").focus();
			return false
		}
	}

	 $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
		
	  $('.autoplay').slick({
  		slidesToShow: 3,
  		slidesToScroll: 1,
  		autoplay: true,
  		autoplaySpeed: 2000,
	  });
    });
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
		
	  $('.autoplay').slick({
  		slidesToShow: 3,
  		slidesToScroll: 1,
  		autoplay: true,
  		autoplaySpeed: 2000,
	  });
    });

</script>
</head>

<body onload="startTime()">
<div id="fb-root"></div>
	<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
<div id="topo"><!--INICIO TOPO-->
	<div id="cabecalho"><!--INICIO CABEÇALHO-->
		<img src="../img/logo-trio.png" class="logotrio">
	</div><!--FIM CABEÇALHO-->
	<div id="menu"><!--INICIO MENU-->
			<input type="checkbox" id="bt_menu">
				<label for="bt_menu">&#9776; <span style="font-size: 20px;">Menu</span></label>
			<nav class="menu">
				<ul class="ul_menu">
					<li><a href="MeusEventos">Meus Eventos</a></li>
					<li><a href="NovosEventos">Novos Eventos</a></li>
					<li><a href="MeusDados">Meus Dados</a></li>
					<li><a href="logout.php">Sair</a></li>
					<li style="padding: 5px; float: right;"><b><?php require "valida_login.php"; ?></b></li>
				</ul>
			</nav>
	</div><!--FIM MENU-->
</div><!--FIM TOPO-->