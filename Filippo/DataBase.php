<?php

$hostname_db = "localhost";
$database_db = "filippo";
$username_db = "root";
$password_db = "root";
$db = mysql_connect($hostname_db, $username_db, $password_db) or trigger_error(mysql_error(),E_USER_ERROR);




mysql_select_db($database_db, $db);

$query = "CREATE TABLE IF NOT EXISTS amici (ID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
                                nome VARCHAR(15),
                                cognome VARCHAR(20),
                                email VARCHAR(20),
                                PRIMARY KEY (ID))";

mysql_query($query, $db) or die (mysql_error($link));

/*$pippo = 'INSERT INTO amici (nome, cognome, email) VALUES ("pippo", "franco", "pippo@franco.it"),
                      ("ciccio", "franco", "ciccio@franco.it")';

//$paperino = mysql_query($pippo, $db) or die (mysql_error($link));*/

/*$query = "DELETE FROM amici WHERE ID > 2";
$paperino = mysql_query($query, $db) or die (mysql_error($link));*/

$query = 'SELECT email FROM amici Where nome = "pippo"';

$result = mysql_query($query, $db) or die (mysql_error($link));
$row = mysql_fetch_assoc($result);
$email = $row['email'];
echo $email;








/**
 * Created by PhpStorm.
 * User: gremus
 * Date: 07/12/13
 * Time: 18:06
 */
?>