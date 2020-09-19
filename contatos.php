<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			CONTATOS
		</div>
		<center>
			<form action="enviar_email.php" method="post" autocomplete="on">
				<table border="0" align="center" cellpadding="0" cellspacing="0" class="table_cont">
				  <tr>
					<td align="left" valign="top">
						<input type="text" name="nome" class="contato" required onFocus="(this.value == 'Nome Completo:') ? this.value = '' : ''" onBlur="if (this.value == '')this.value='Nome Completo:';" value="Nome Completo:">
					</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
					<input type="text" name="fone" class="contato" required onFocus="(this.value == 'Telefone: (xx) xxxxx-xxxx') ? this.value = '' : ''" onBlur="if (this.value == '')this.value='Telefone: (xx) xxxxx-xxxx';" value="Telefone: (xx) xxxxx-xxxx" maxlength="15" onkeypress="mascara(this)">
					</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
					<input type="email" name="email" autocomplete="off" class="contato" required onFocus="(this.value == 'E-mail:') ? this.value = '' : ''" onBlur="if (this.value == '')this.value='E-mail:';" value="E-mail:">
					</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
					<select name="contato_por" class="contato select" style="height:45px;">
					  <option disabled selected>Deseja que entremos em contato por:</option>
					  <option>E-mail</option>
					  <option>Telefone</option>
					  <option>SMS</option>
					  <option>Whatsapp</option>
				   </select>
					</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
					<select name="assunto" class="contato select" style=" height:45px;">
					  <option disabled selected>Assunto:</option>
					  <option>Orçamento</option>
					  <option>Trabalhe Conosco</option>
					  <option>Elogios</option>
					  <option>Reclama&ccedil;&otilde;es</option>
					  <option>Sugest&otilde;es</option>
					  <option>Outros...</option>
				   </select>
					</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
					<textarea name="msg" class="msg" style="margin-bottom: 5px;" required onFocus="(this.value == 'Mensagem:') ? this.value = '' : ''" onBlur="if (this.value == '')this.value='Mensagem:';" value="Mensagem:">Mensagem:</textarea>
					</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
					<select name="indicacao" class="contato select" style="height:45px;">
					  <option disabled selected>Por onde conheceu o Trio Bagunça?</option>
					  <option>Facebook</option>
					  <option>Instagram</option>
					  <option>Indicação</option>
					  <option>Google</option>
					  <option>Panfletos</option>
					  <option>Site</option>
					  <option>Outros...</option>
				   </select>
					</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
					<input type="checkbox" name="aceito" value="Gostaria de receber informações sobre serviços e promoções do Trio Bagunça por e-mail, SMS, Facebook e WhatsApp.">
					<span style="font-size:14px; font-size: 14px \9; padding-bottom: 10px;">Gostaria de receber informações sobre serviços e promoções do Trio Bagunça por e-mail, SMS, Facebook e WhatsApp.<br /><br /></span>
					</td>
				  </tr>
				  <tr>
					  <td width="206" align="left" valign="middle"> 
					  <img src="captcha/captcha.php" id="captcha" width="150" height="57" /> 
					  <a href="#" onclick="document.getElementById('captcha').src='captcha/captcha.php?'+Math.random();
					document.getElementById('captcha-form').focus();"
					id="change-image"><img src="img/refresh.png" width="27" height="27"  alt="Atualizar" border="0"/></a>
						  <input type="text" name="captcha" class="contato captcha" id="captcha-form" autocomplete="off"/> 
					</td>
				  </tr>
				  <tr>
					<td align="right" valign="middle">
					<span style="font-size:12px; font-size: 14px \9; color:#F00; text-align: left; float: left;">*Itens nome, telefone e E-mail são obrigatorios!</span>
					<input type="submit" name="button" class="button" value="Enviar">
					</td>
				  </tr>
				</table>
			</form>
			
			<div class="texto_rodape" style="width:100%;">
				<p style="font-size:20px; margin-bottom: 20px;"> 
				<b>Telefones: </b>
				<br /> (61) 3797-8080 / 99181-5767 <img src="img/logo_whatsapp.png" style="width: 22px; margin-left: 5px;"> <br />
				Orçamento pelo whatsapp
				<p class="titulo" style="margin-top:24px; font-size: 22px; font-weight: bold;">Atendimento por e-mail </p>
				<p>triobaguncafesta@gmail.com</p>
			</div>
		</center>
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>