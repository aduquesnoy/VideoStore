<?php

try {
  // Connect and create the PDO object
  $conn = new PDO("mysql:host=localhost; dbname=VideoStore", 'root', 'root');
  $conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

  // Define and perform the SQL SELECT query
  $sql = "SELECT * FROM `items` ";
  $result = $conn->query($sql);

  // If the SQL query is succesfully performed ($result not false)
  if($result !== false) {
    $cols = $result->columnCount();           // Number of returned columns

    // Parse the result set
    while($ligne = $result->fetch(PDO::FETCH_ASSOC))
    {
        $data []= $ligne;
    }
    $encode_donnees = json_encode($data);
  }
    
    echo $encode_donnees;
    
  $conn = null;        // Disconnect
}
catch(PDOException $e) {
  echo $e->getMessage();
}

?>
