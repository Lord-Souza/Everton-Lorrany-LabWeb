<?php
	$serve = "127.0.0.1:3306";
	$user = "root";
	$pass = "";
	$bd = "LabWeb"

	if ($conn = mysqli_connect($serve, $user, $pass, $bd)){
		echo "Conectado";
	}else {

		echo "Erro";
	}
		

			}
		}
?>