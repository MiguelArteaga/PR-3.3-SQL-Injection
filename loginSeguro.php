<!DOCTYPE html>
<html>
<head>
	<title>Login Seguro</title>
</head>
<body>
	<?php

	echo "<h1>LOGIN SEGURO </h1>";

	echo "<form action='loginSeguro.php' method='post' >";
	echo" USUARIO: <input type='text' name='usuario'><br>";
	echo"CONTRASEÑA: <input type='password' name='passwd'><br>";
	echo "<input value='COMPROBAR' type='submit' name='Submit'>";
	echo"</form>";


	$user=$_POST['usuario'];
	$pass=$_POST['passwd'];



	$dbs= "mysql:host=localhost;dbname=login";
	$dbh = new PDO( $dbs, "miguel","miguel123");
 
	$stmt = $dbh->prepare("SELECT * FROM usuarios WHERE USUARIO=:user AND PASSWD=SHA2(:pass,512) ");

    $stmt->bindValue(':user', $user);
	$stmt->bindValue(':pass', $pass);
	$stmt->execute();
 	
	$result=$stmt->rowCount();
	
	if($result==1){
		echo "Hola $user";
	}

 	

	

	?>

</body>
</html>