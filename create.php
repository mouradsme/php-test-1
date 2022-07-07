<?php
    require_once "includes.php";
    $short_opts = cmdOpts($createOptions); // Get Usable Short options,
    $options = getopt($short_opts);  // Get options from the command line argument list (from $short_opts)
    extract(getVars($createOptions, $options)); // Import variables into the current symbol table from an the resulting vars (in other words, these are the arguments' values)  
    
    $Query = "INSERT INTO `users` 
    (`Title`, `Firstnames`, `Surname`, `Mobile`, `Email`, `HomeAddress1`, `HomeAddress2`, `HomeTown`, `HomeCounty`, `HomeZipCode`, `BillingAddress1`, `BillingAddress2`, `BillingTown`, `BillingCounty`, `BillingZipCode`) 
        VALUES 
    (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?); ";
    @ $DATA =  [$Title, $Firstnames, $Surname, $Mobile, $Email, $HomeAddress1, $HomeAddress2, $HomeTown, $HomeCounty, $HomeZipCode, $BillingAddress1, $BillingAddress2, $BillingTown, $BillingCounty, $BillingZipCode];
    try {    
        $REQUEST = $PDO->prepare($Query);
        if ($REQUEST->execute($DATA)) 
            echo "User added successfully";
    } catch (Exception $err) {
        die("Database Error: " . $err->getMessage());
    }
        
?>