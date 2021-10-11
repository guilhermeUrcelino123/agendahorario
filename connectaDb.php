<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agendabarber";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `agendamento`";

$result_query = $conn->query($sql);

if ($result_query->num_rows > 0) {          
            
    while($row = $result_query->fetch_assoc()) {             
      //echo $row["nome"]; 
      //echo '<br/>';                         
    }
            
}

$sql2 = "SELECT * FROM `agendamento` where data = '2021-10-05'";

$result_query2 = $conn->query($sql2);

if ($result_query2->num_rows > 0) {          
            
    while($row2 = $result_query2->fetch_assoc()) {             
      //echo $row2["nome"],' ', $row2["horario"]; 
      //echo '<br/>';                         
    }
            
}



?>