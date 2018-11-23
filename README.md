Usuario: miguel 
Password: miguel123


Usuario: lucas
Password: lucas123

loginNoSeguro.php :
Login no seguro, Prueba con usuario' -- comentario

loginSeguro.php :
Implementamos PDO para la seguridad del login.

Cargar el archivo login.sql para hacer pruebas.


+----------+-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------+
| Table    | Create Table                                                                                                                                                                |
+----------+-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------+
| usuarios | CREATE TABLE `usuarios` (
  `ID` varchar(4) DEFAULT NULL,
  `USUARIO` varchar(30) DEFAULT NULL,
  `PASSWD` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 |
+----------+-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------+
1 row in set (0.01 sec)



