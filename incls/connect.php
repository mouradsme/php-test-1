<?php  
    # Prepare Database Connection Using PHP PDO:
    try {
        $PDO = new PDO("mysql:host=$database_hostname;dbname=$database_name", $database_username, $database_password);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activate Exception mode to catch db errors
    } catch(PDOException $e) {
        die ("DATABASE Connection failed: " . $e->getMessage());
    }

    ?>