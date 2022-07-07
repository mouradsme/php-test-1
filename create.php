<?php
    require_once "incls/config.php"; 
    require_once "incls/connect.php"; 
    # Prepare the CRUD create operation  for the commandline:
        // These are the allowed options, each represented as an array (option, optional/required, Database Field Name)
    $Options = array(
        array("t", "::", "Title"),
        array("f", ":", "Firstnames"),
        array("s", ":", "Surname"),
        array("m", ":", "Mobile"),
        array("e", ":", "Email"),
        array("ha1", ":", "HomeAddr1"),
        array("ha2", "::", "HomeAddr2"),
        array("ht", ":", "HomeTown"),
        array("hc", ":", "HomeCounty"),
        array("hz", "::", "HomeZipCode"),
        array("ba1", ":", "BillingAddr1"),
        array("ba2", "::", "BillingAddr2"),
        array("bt", ":", "BillingTown"),
        array("bc", ":", "BillingCounty"),
        array("bz", "::", "BillingZipCode")
    );

    // Now, I reconstrcut the above so that I can use them inside the Command line options function in php
    $short_opts = "";
    foreach ($Options as $option) 
        $short_opts .= $option[0] . $option[1];
    
    $options = getopt( $short_opts); // these are the usable cmd options

    // Now, from the user input, let's do some checks and normalizations:
    foreach ($Options as $option) 
        if (isset($options[$option[0]])) {
            
            ${$option[2]} = $options[$option[0]];
        }
        
    $Query = "INSERT INTO `users` 
    (`ID`, `Title`, `Firstnames`, `Surname`, `Mobile`, `Email`, `HomeAddress1`, `HomeAddress2`, `HomeTown`, `HomeCounty`, `HomeZipCode`, `BillingAddress1`, `BillingAddress2`, `BillingTown`, `BillingCounty`, `BillingZipCode`) 
        VALUES 
    (NULL, '$Title', '$Firstnames', '$Surname', '$Mobile', '$Email', '$HomeAddress1', '$HomeAddress2', '$HomeTown', '$HomeCounty', '$HomeZipCode', '$BillingAddress1', '$BillingAddress2', '$BillingTown', '$BillingCounty', '$BillingZipCode'); ";
    
    if ($PDO->query($Query, [])) {
        echo "User added successfully";
    } else {
        die ("DB Error!");
    }
    
?>