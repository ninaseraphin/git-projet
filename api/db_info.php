<?php
// Mettre les informations de connection mysql et renommer db_info.php.

define('HOST', 'localhost');

//var_dump($_SERVER);
if($_SERVER["HTTP_HOST"] == "127.0.0.1:8000" || $_SERVER["HTTP_HOST"] == "localhost")
{
	define('USER', 'root');
	define('PASSWORD', '');	
	define('DATABASE', 'artpublicmontreal');
}
else 	// Sur Webdev ou sur un hébergeur.
{
	define('USER', 'exxxxxxx');
	define('PASSWORD', 'votre_mot_de_passe');	
	define('DATABASE', 'NOM_DE_LA_DB');
}





?>