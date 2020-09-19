function validaCPF(cpf)  
{
	cpf = cpf.replace(".","");
	cpf = cpf.replace(".","");
	cpf = cpf.replace(".","");
	cpf = cpf.replace("-","");
	rcpf1 = cpf.substr(0,9)
	rcpf2 = cpf.substr(9,2)

        // if(rcpf1.substring(1,9)/rcpf1.substring(0,1)==11111111)
	//	return false;
 
        d1 = 0;
        for (i=0;i<9;i++)
	    d1 += rcpf1.charAt(i)*(10-i);
        d1 = 11 - (d1 % 11);
        if (d1>9) d1 = 0;

        if (rcpf2.charAt(0) != d1)
	    return false;

        d1 *= 2;
        for (i=0;i<9;i++)
            d1 += rcpf1.charAt(i)*(11-i);
        d1 = 11 - (d1 % 11);
        if (d1>9) d1 = 0;

        if (rcpf2.charAt(1) != d1)
	   return false;

        return true;

}
