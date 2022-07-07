<?php 
require_once "../incls/config.php";
require_once "../incls/connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST)) {
    $Required = ["Firstnames", "Surname", "Mobile", "Email", "HomeAddress1", "HomeTown", "HomeCounty", "BillingAddress1", "BillingTown", "BillingCounty"];
    foreach($_POST as $k => $v) {
        $v = trim($v);
        $v = htmlspecialchars($v);
        if (in_array($k, $Required) && strlen($v) == 0) {
            echo json_encode(array("message" => "Some required fields' values aren't valid! Please, retry"));
            die;
        }
    }
    extract($_POST);

    $result = array('message' => 'Unhandled Error Detected');
    $Query = "INSERT INTO `users` 
    (`Title`, `Firstnames`, `Surname`, `Mobile`, `Email`, `HomeAddress1`, `HomeAddress2`, `HomeTown`, `HomeCounty`, `HomeZipCode`, `BillingAddress1`, `BillingAddress2`, `BillingTown`, `BillingCounty`, `BillingZipCode`) 
        VALUES 
    (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?); ";
    $DATA =  [$Title, $Firstnames, $Surname, $Mobile, $Email, $HomeAddress1, $HomeAddress2, $HomeTown, $HomeCounty, $HomeZipCode, $BillingAddress1, $BillingAddress2, $BillingTown, $BillingCounty, $BillingZipCode];
    try {    
        $REQUEST = $PDO->prepare($Query);
        if ($REQUEST->execute($DATA)) 
            $result = array('message' => 'User Added Successfully', 'reload' => true);
    } catch (Exception $err) {
        $result = array('message' => 'Database Error!' );

    }
        
    echo json_encode($result);

}
?>