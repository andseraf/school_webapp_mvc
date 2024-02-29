<?php

echo ("<table style = \"border: 1px solid black;\">
<tr>
  <th>Nome</th>
  <th>Cognome</th>
  <th>Id</th>
  <th>Ruolo</th>
  
</tr>");
foreach ($result as $row) {
    echo "<tr><td style = \"border: 1px solid black;\">" . $row['nome_studente'] ."</td>". "<td style = \"border: 1px solid black;\">" . $row['cognome'] ."</td>"."<td style = \"border: 1px solid black;\">" . $row['id_studente'] . "</td>"."<td style = \"border: 1px solid black;\">" . $row['nome_ruolo'] . "</td></tr>";
}

?>