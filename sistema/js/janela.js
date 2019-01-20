$(document).ready(function(){
				$("a[rel=modal]").click( function(ev){
					ev.preventDefault();

					//alterado
					var id = '.window';

					var alturaTela = $(document).height();
					var larguraTela = $(window).width();
	
					//colocando o fundo preto
					$('#mascara').css({'width':larguraTela,'height':alturaTela});
					$('#mascara').fadeIn(1000);	
					$('#mascara').fadeTo("slow",0.8);

					var left = ($(window).width() /2) - ( $(id).width() / 2 );
					var top = ($(window).height() / 50) - ( $(id).height() / 50 );
					
					$(id).css({'top':top,'left':left});
					
					//inserido 
					href = $(this).attr("href");
					$('.window').load(href);

					
					$(id).show();	
 				});

 				$("#mascara").click( function(){
 					$(this).hide();
 					$(".window").hide();
 				});

 				$('.fechar').click(function(ev){
 					ev.preventDefault();
 					$("#mascara").hide();
 					$(".window").hide();
 				});
			});