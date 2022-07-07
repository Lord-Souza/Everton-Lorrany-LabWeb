<?php
	$serve = "localhost";
	$user = "root";
	$pass = "";
	$bd = "LabWeb"

	if ($conn = mysqli_connect($serve, $user, $pass, $bd)){
		echo "Conectado";
	}else
		echo "Erro";

			}
		}
?>