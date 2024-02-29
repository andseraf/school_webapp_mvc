<?php

$mysqli = new mysqli("127.0.0.1", "root", "", "db_school", 3306);
echo("Server Status: ");
echo $mysqli->host_info . "\n";

$result = $mysqli->query("SELECT studente.nome AS nome_studente, cognome , id_studente, ruolo.nome AS nome_ruolo 
FROM studente 
INNER JOIN ruolo 
ON studente.ruolo_id = ruolo.id_ruolo 
ORDER BY id_studente ASC;");

?>