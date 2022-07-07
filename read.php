<?php
    require_once "includes.php";
    $short_opts = cmdOpts($readOptions); // Get Usable Short options,
    $options = getopt($short_opts);  // Get options from the command line argument list (from $short_opts)
    extract(getVars($readOptions, $options)); // Import variables into the current symbol table from an the resulting vars (in other words, these are the arguments' values)  
    
    $Query = "SELECT * FROM USERS ";   
    $Query .= isset($ID) ? " WHERE ID = ?;" : ""; // In case an ID is set in the arguments (to get a specific record), add this to the query
    $DATA = isset($ID) ? [$ID] : []; // In case an ID is set in the arguments (to get a specific record), add the ID value to the data to be sent to mysql

    try {
        $REQUEST = $PDO->prepare($Query);
        $REQUEST->execute($DATA);
        $Result = $REQUEST->fetchAll(PDO::FETCH_NUM); 
        $Count  = count($Result);
        $display =  "Here are the result ($Count records): \n\n";
        foreach ($Result as $R)
            $display .= implode(" | ", $R) . "\n\n";
        echo $display;
    } catch (Exception $err) {
        die("Database Error: " . $err->getMessage());
    }
        
?>