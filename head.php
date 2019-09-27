<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>.::Trio Bagunça - Animando sua festa::.</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/responsive.css" type="text/css" rel="stylesheet">
<link href="css/destaque.css" type="text/css" rel="stylesheet" />
<link href="css/lightbox.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="js/jquery.destaques.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>
<script type="text/javascript" src="js/lightbox-2.6.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/textzoom.js"></script>
<script type="text/javascript" src="js/slick.js" charset="utf-8"></script>
<script type="text/javascript" src="js/mask.js" charset="utf-8"></script>
<script type="text/javascript" src="js/busca_cep.js" charset="utf-8"></script>
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

<body>
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
		<img src="img/logo-trio.png" class="logotrio">
	</div><!--FIM CABEÇALHO-->
	<div id="menu"><!--INICIO MENU-->
			<input type="checkbox" id="bt_menu">
				<label for="bt_menu">&#9776; <span style="font-size: 20px;">Menu</span></label>
			<nav class="menu">
				<ul class="ul_menu">
					<li><a href="index">Página Inicial</a></li>
					<li><a href="quem_somos">Quem Somos</a></li>
					<li><a href="#">Serviços</a>
						<ul>
							<li><a href="animacao_infantil">Animação Infantil</a></li>
							<li><a href="camarim_fashion">Camarim Fashion</a></li>
							<li><a href="contacao_de_historias">Contação de Histórias/Teatro</a></li>
							<li><a href="oficina_de_slime">Oficina de Slime</a></li>
							<li><a href="personagens_vivos">Personagens Vivos</a></li>
							<li><a href="pintura_de_rosto">Pintura de Rosto</a></li>
						</ul>
					</li>
					<li><a href="espaco_bagunca">Espaço Bagunça</a></li>
					<li><a href="trio_bagunca">Equipe</a></li>
					<li><a href="eventos">Eventos</a></li>
					<li><a href="galeria">Galeria</a></li>
					<li><a href="contatos">Contatos</a></li>
				</ul>
			</nav>
	</div><!--FIM MENU-->
</div><!--FIM TOPO-->