/*Função que verifica se um número de CNPJ está correto, se não ela retorna false*************************************/

function validaCNPJ(strCNPJ)
{

	if (strCNPJ == ""){
		return true;
	}

	
	x = strCNPJ;
	var temp = "";
	for(i=0;i<19;i++)
	{
		if(x.substr(i,1) != "." && x.substr(i,1) != "/" && x.substr(i,1) != "-"){
			temp = temp + x.substr(i,1);
		}
	}

	strCNPJ = temp;

	
	
	if (parseFloat(strCNPJ) > 0)
	{
		var
			strDV = strCNPJ.substr(12, 2),
			intSoma,
			intDigito = 0,
			strControle = "",
			strMultiplicador = "543298765432";
		strCNPJ = strCNPJ.substr(0, 12);
		for(var j = 1; j <= 2; j++)
		{
			intSoma = 0;
			for(var i = 0; i <= 11; i++)
			{
				intSoma += (parseInt(strCNPJ.substr(i, 1), 10) * parseInt(strMultiplicador.substr(i, 1), 10))
			}
			if(j == 2){intSoma += (2 * intDigito)}
			intDigito = (intSoma * 10) % 11;
			if(intDigito == 10){intDigito = 0}
			strControle += intDigito.toString();
			strMultiplicador = "654329876543";
		}
		return(strControle == strDV);
	}
	else
		return false;

}
