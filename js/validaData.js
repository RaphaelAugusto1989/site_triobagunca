//Faz a validacao de data, retorna false se a data estiver incorreta e true se estiver correta*************************


function examinaData(dia,mes,ano)
	{
		
		var Data = new Date();			//Data atual
		var anoHoje = Data.getYear();	//Ano atual

		//O if abaixo conserta um problema que dá em alguns compiladores da Netscape
		//onde o ano 2000 retorna como 100 e não 2000 (Bug do ano 2000!)
		if (parseFloat(anoHoje) < 2000)
		{
			anoHoje = parseFloat(anoHoje) + 1900;
		}
		var v_dia;
		var v_mes;
		var v_ano;
		v_dia = dia;
		v_mes = mes;
		v_ano = ano;


		tamanho_v_dia = v_dia.length;
		teste_ponto = "false";

		if (tamanho_v_dia != 2) return false;


		if (isNaN(v_dia)) //valor digitado não é numérico
		{
			return false;
		}
		else //valor digitado é um numérico válido
		{

			for (k = 0; k < tamanho_v_dia; k++)
			{if ((v_dia.charAt(k) == '.') || (v_dia.charAt(k) == '-') || (v_dia.charAt(k) == '+'))
				{
					teste_ponto = "true"; /*existe caracter ponto*/
				}
			}

			if (teste_ponto == "true") //encontrou caracter ponto(numero real)
			{
				return false;
			}

		}



		tamanho_v_mes = v_mes.length;
		teste_ponto = "false";

		if (tamanho_v_mes != 2) return false;


		if (isNaN(v_mes)) //valor digitado não é numérico
		{
			return false;
		}
		else //valor digitado é um numérico válido
		{

			for (k = 0; k < tamanho_v_mes; k++)
			{if ((v_mes.charAt(k) == '.') || (v_mes.charAt(k) == '-') || (v_mes.charAt(k) == '+'))
				{
					teste_ponto = "true"; /*existe caracter ponto*/
				}
			}

			if (teste_ponto == "true") //encontrou caracter ponto(numero real)
			{
				return false;
			}

		}



		tamanho_v_ano = v_ano.length;
		teste_ponto = "false";

		if (tamanho_v_ano != 4) return false;


		if (isNaN(v_ano)) //valor digitado não é numérico
		{
			return false;
		}
		else //valor digitado é um numérico válido
		{

			for (k = 0; k < tamanho_v_ano; k++)
			{if ((v_ano.charAt(k) == '.') || (v_ano.charAt(k) == '-') || (v_ano.charAt(k) == '+'))
				{
					teste_ponto = "true"; /*existe caracter ponto*/
				}
			}

			if (teste_ponto == "true") //encontrou caracter ponto(numero real)
			{
				return false;
			}

		}


/*Alterado para permitir qualquer ano
		if (((parseFloat(v_ano) < 1964) || (parseFloat(v_ano) > parseFloat(anoHoje))) && (v_ano.length != 0))
		{
			return(false);
		}
*/
		if (parseFloat(v_ano) < 1900)
		{
			return(false);
		}

		if (v_dia > 31 || v_dia < 1)
		{
			return(false);
		}

		if (v_mes > 12 || v_mes < 1)
		{
			return(false);
		}

		if (v_dia == "31")
		{
			if ((v_mes == "04") || (v_mes == "06") || (v_mes == "09") || (v_mes == "11"))
			{
				return(false);
			}
		}


		if (v_mes == "02")
		{
			if (!(v_ano%4))
			{
				if (v_dia > 29)
				{
					return(false);
				}
			}
			else if (v_dia > 28)
			{
				return(false);
			}
		}

		//o -if- abaixo testa se algum campo foi preenchido e outro deixado em branco deixando a data incompleta

		if (((v_dia != "") || (v_mes != "") || (v_ano != "")) && ((v_dia == "") || (v_mes == "") || (v_ano == "")))
		{
			return(false);
		}

		return(true);
	}

	function validaData(data)
	{
		if (data == ""){
		   return true;
		}
		
		var dia = "";
		var mes = "";
		var ano = "";
		if(data.indexOf("/") > 0)
		{
			dia = data.substring(0,data.indexOf("/"));
			data = data.substring(data.indexOf("/")+1);
		}
		else
			return false;
		if(data.indexOf("/") > 0)
		{
			mes = data.substring(0,data.indexOf("/"));
			ano = data.substring(data.indexOf("/")+1);
		}
		else
			return false;
		return examinaData(dia,mes,ano);

	}
