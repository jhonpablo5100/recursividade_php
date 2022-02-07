<?php

 function recursiva($usuario){

	 if($usuario=="usuario"){

		 print "usuario aceito\n";

	 }else{

		 print "usuario negado\n";

		 $novo_usuario = "usuario";

		 recursiva($novo_usuario); 
	 }

 }


 recursiva("usuario_chefe");
