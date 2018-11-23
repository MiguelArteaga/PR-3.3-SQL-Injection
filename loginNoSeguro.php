<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php

	echo "<h1>LOGIN </h1>";

	echo "<form action='loginNoSeguro.php' method='post' >";
	echo" USUARIO: <input type='text' name='usuario'><br>";
	echo"CONTRASEÑA: <input type='password' name='passwd'><br>";
	echo "<input value='COMPROBAR' type='submit' name='Submit'>";
	echo"</form>";


	$user=$_POST['usuario'];
	$pass=$_POST['passwd'];


	 $conn = mysqli_connect('localhost','miguel','miguel123');
 
       
        mysqli_select_db($conn, 'login');
 
        
        $consulta = "SELECT * FROM usuarios WHERE USUARIO='$user' AND PASSWD=SHA2('$pass',512  );";
 
        
        $resultat = mysqli_query($conn, $consulta);

        $registre = mysqli_fetch_assoc($resultat);

        if($registre!=null){
        	echo "El Usuario"." ".$registre["USUARIO"]." si existe";
        	echo "<br>";
        	echo $consulta;

        }
        else{
        	echo "Este usuario no esta registrado";
        }

        
        

	
	?>

</body>
</html>