<div id="restrito"><!--INICIO RODAPÉ RESTRITO-->
	<div id="restrito2">
     	<span style="position: absolute; right: 500px; margin-top: 10px;">Copyright &copy; 2016 - <?php date_default_timezone_set('America/Sao_Paulo'); echo date(Y);?>. Todos os direitos reservados.</span>
     </div>
     <div id="artspeck">
  			Desenvolvidor por: 
            <a href="http://www.artspeck.com.br" target="_blank">
            	<img src="../img/artspeck.png" width="90" height="22" border="0" style="margin-left: 5px;" />
            </a>
     </div>
</div><!--FIM RODAPÉ RESTRITO-->
<script type="text/javascript" charset="utf-8" async defer>
	function startTime() {
		var today=new Date();
		var h=today.getHours();
		var m=today.getMinutes();
		var s=today.getSeconds();
		// add a zero in front of numbers<10
		m=checkTime(m);
		s=checkTime(s);
		document.getElementById('txt').innerHTML=h+":"+m+":"+s;
		t=setTimeout('startTime()',500);
	}

	function checkTime(i) {
		if (i<10) {
			i="0" + i;
		}
		return i;
	}
</script> 
</body>
</html>