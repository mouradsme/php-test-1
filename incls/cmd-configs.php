<?php 
# Prepare the CRUD create operation  for the commandline:
    
        // These are the creation part options
        // These are the allowed options, each represented as an array (option, optional/required, Database Field Name)
        // : means required
        // :: means optional
        $createOptions = array(
            array("t", "::", "Title"),
            array("f", ":", "Firstnames"),
            array("s", ":", "Surname"),
            array("m", ":", "Mobile"),
            array("e", ":", "Email"),
            array("h", ":", "HomeAddr1"),
            array("H", "::", "HomeAddr2"),
            array("w", ":", "HomeTown"),
            array("c", ":", "HomeCounty"),
            array("z", "::", "HomeZipCode"),
            array("b", ":", "BillingAddr1"),
            array("B", "::", "BillingAddr2"),
            array("T", ":", "BillingTown"),
            array("C", ":", "BillingCounty"),
            array("Z", "::", "BillingZipCode")
        );     
        
        // These are the fetching part options
        $readOptions = array(
            array("i", "::", "ID") // to get a specific record
        );
        // These are the deletion part options
        $deleteOptions = array(
            array("i", ":", "ID") // to delete a specific record
        );
        // These are the updating part options
        
        $updateOptions = array(
            array("i", ":", "ID"),
            array("t", "::", "Title"),
            array("f", "::", "Firstnames"),
            array("s", "::", "Surname"),
            array("m", "::", "Mobile"),
            array("e", "::", "Email"),
            array("h", "::", "HomeAddr1"),
            array("H", "::", "HomeAddr2"),
            array("w", "::", "HomeTown"),
            array("c", "::", "HomeCounty"),
            array("z", "::", "HomeZipCode"),
            array("b", "::", "BillingAddr1"),
            array("B", "::", "BillingAddr2"),
            array("T", "::", "BillingTown"),
            array("C", "::", "BillingCounty"),
            array("Z", "::", "BillingZipCode")
        );    
?>