<?php
    require_once "includes.php";
    $short_opts = cmdOpts($deleteOptions); // Get Usable Short options,
    $options = getopt($short_opts);  // Get options from the command line argument list (from $short_opts)
    extract(getVars($deleteOptions, $options)); // Import variables into the current symbol table from an the resulting vars (in other words, these are the arguments' values)  
    
    $Query = "DELETE FROM USERS WHERE ID = ?";   
    $DATA = [$ID] ;
    try {
        $REQUEST = $PDO->prepare($Query);
        if ($REQUEST->execute($DATA))
            echo "Record Deleted!";
    } catch (Exception $err) {
        die("Database Error: " . $err->getMessage());
    }
        
?>