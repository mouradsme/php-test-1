<?php 
require_once "../incls/config.php";
require_once "../incls/connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST)) {
    $Query = "SELECT * FROM USERS ORDER BY ID DESC;";
    $REQUEST = $PDO->prepare($Query);
    $REQUEST->execute();
    $Result = $REQUEST->fetchAll(PDO::FETCH_ASSOC); 
    
    $result = '';
    foreach ($Result as $R) {
$result .= "
<tr>
  <th scope='row'>".$R['ID']."</th>
  <td>".$R['Title']."</td>
  <td>".$R['Firstnames']."</td>
  <td>".$R['Surname']."</td>
  <td>".$R['Email']."</td>
  <td>".$R['Mobile']."</td>
  <td>".$R['HomeAddress1']."</td>
  <td>".$R['HomeAddress2']."</td>
  <td>".$R['HomeTown']."</td>
  <td>".$R['HomeCounty']."</td>
  <td>".$R['HomeZipCode']."</td>
  <td>".$R['BillingAddress1']."</td>
  <td>".$R['BillingAddress2']."</td>
  <td>".$R['BillingTown']."</td>
  <td>".$R['BillingCounty']."</td>
  <td>".$R['BillingZipCode']."</td>
</tr>";
} 
        
    echo $result;

}
?>