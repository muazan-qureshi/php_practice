<?php

    $servername = "mysql:host=localhost;dbname=amazon";
    $username = "root";
    $password = "";

    try {
    
        $pdo = new PDO($servername,$username,$password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        echo "Connected successfully";
      } catch(PDOException) {
        echo "Connection failed: " . $e->getMessage();
      }

      echo "<br>";
      echo "<br>";
      echo "<br>";

    //   Start HERE

      $query = $pdo->query('select * from products');

      $result = $query->fetchAll(PDO::FETCH_ASSOC);

    //   var_dump($result);

    foreach($result as $product)
    {
        echo $product['product_name']."<hr>";
    }
?>