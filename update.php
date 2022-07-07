<?php
    require_once "includes.php";
    $short_opts = cmdOpts($updateOptions); // Get Usable Short options,
    $options = getopt($short_opts);  // Get options from the command line argument list (from $short_opts)
    $vars    = getVars($updateOptions, $options);
    extract($vars); // Import variables into the current symbol table from an the resulting vars (in other words, these are the arguments' values)  
    


    $QueryUpdates = [];
    $DATA = [];
    foreach ($vars as $key => $val) {
        $QueryUpdates[]= "`$key` = ?";
        $DATA[] = $val;
    }
    $DATA[] = $ID;
    $QueryExtra = implode(",", $QueryUpdates);
    $Query = "UPDATE USERS SET $QueryExtra WHERE ID = ?";
    try {    
        $REQUEST = $PDO->prepare($Query);
        if ($REQUEST->execute($DATA)) 
            echo "User updated successfully";
    } catch (Exception $err) {
        die("Database Error: " . $err->getMessage());
    }
        
?>