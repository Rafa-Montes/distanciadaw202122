<?php
/**
*Tarea 5 de Despliegue de aplicaciones web
*@author Rafael Emilio Montes Jiménez <rafamontes88@gmail.com>
*@version Versión 1.0.0
*/
	class Aritmetica{
		/**
		*
		*Función sumar
		*@param int $a
		*@param int $b
		*@return int $suma
		*/	
		 function sumar($a,$b){
			$suma = $a + $b;
			return $suma;
		}
		/**
		*@internal
		*Función restar
		*@param int $c
		*@param int $d
		*@return int $resta
		*/
		 function restar($c,$d){
			$resta;
			if($c > $d){
				$resta = $c - $d;
			}else{
				$resta = $d - $c;
			}
			return $resta;
		}
	}
	
		
	
	echo "La resta es ".Aritmetica::restar(3,1),PHP_EOL;
        echo "La suma es ".Aritmetica::sumar(7,2),PHP_EOL;
?>
