<?php

	/**
	/* Código inseguro de exemplo para palestra sobre Segurança
	/* Baseado no código existente na recomendação de segurança OWASP
	/* Existente em https://www.owasp.org/index.php/PHP_Security_Cheat_Sheet#Input_handling
	/* Acesso em 20/09/2016
	*/
  
   $correct_nonce = md5("Sou o cara!!!!");
   
   if (isSet($_GET['nonce']) && strcmp($_GET['nonce'], $correct_nonce) == 0) {
       // Go ahead and reset the password
   		echo "Password sucess reseted";
   } else {
       echo 'Sorry, incorrect link';
   }

?>