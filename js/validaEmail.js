/*Esta fun��o faz a valida��o de endere�o de e-mail, verificando se o mesmo � um endere�o correto**********************/

function validaEmail(email)
	{	//Funcionalidade:	Valida o e-mail retornando True se for
		//					um email v�lido e False caso contr�rio
		// PAR�METROS:
		//		email: E-mail a ser validado

		teste_arroba = "false";         //VAR P/ VERIFICAR SE FOI DIGITADO PELO MENOS
							            //UM ARROBA NO E-MAIL
		teste_ponto = "false";         //VAR P/ VERIFICAR SE FOI DIGITADO PELO MENOS
							          //UM PONTO NO E-MAIL
		tamanho_email = email.length;

		if (tamanho_email > 4)
		{
			for (i=0; i < tamanho_email; i++)
			{
				if (((email.charAt(i) == "@") || (email.charAt(i) == ".")) && ((i == 0) || (i == parseInt(tamanho_email) - 1)))
				{   //DIGITOU'@' OU '.' NA PRIMEIRA OU �LTIMA POSI\u00C7\u00C1O
					return (false);
				}
				else
				{
					if (email.charAt(i) == "@") //ACHOU ARROBA
					{
						if (teste_arroba == "true") //ENCONTROU 2 ARROBAS
						{
							return (false);
						}
						else
						{
							teste_arroba = "true";
							if ((email.charAt(i + 1) == ".") || (email.charAt(i - 1) == ".") || (email.charAt(i + 1) == "@"))
							{	//ACHOU "@.", ".@" OU "@@"
								return (false);
							}
						}
					}
					else
					{
						if (email.charAt(i) == ".") //ACHOU PONTO
						{
							teste_ponto = "true";
							if ((email.charAt(i + 1) == ".") || (email.charAt(i - 1) == "."))
							{	//ACHOU ".."
								return (false);
							}

						}


					}

				}
			}

			if (teste_arroba == "false" || teste_ponto == "false") //N\u00C3O ENCONTROU ARROBA OU PONTO NO EMAIL
			{
				return (false);
			}
		}
		else //email com menos de 5 caracteres
		{
			return (false);
		}

		return (true);

	}