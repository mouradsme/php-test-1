<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php" ; ?>
</head>
<body>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add User
</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Firstnames</th>
      <th scope="col">Surname</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Home Addr.</th>
      <th scope="col">Home Addr. 2</th>
      <th scope="col">Home Town</th>
      <th scope="col">Home County</th>
      <th scope="col">Home Zipcode</th>
      <th scope="col">Billing Addr.</th>
      <th scope="col">Billing Addr. 2</th>
      <th scope="col">Billing Town</th>
      <th scope="col">Billing County</th>
      <th scope="col">Billing Zipcode</th>
    </tr>
  </thead>
  <tbody id="results">
    <?php 
        require_once "../incls/config.php";
        require_once "../incls/connect.php";
        $Query = "SELECT * FROM USERS;";
        $REQUEST = $PDO->prepare($Query);
        $REQUEST->execute();
        $Result = $REQUEST->fetchAll(PDO::FETCH_ASSOC); 
        foreach ($Result as $R) {
    ?>
    <tr>
      <th scope="row"><?=$R['ID'];?></th>
      <td><?=$R['Title'];?></td>
      <td><?=$R['Firstnames'];?></td>
      <td><?=$R['Surname'];?></td>
      <td><?=$R['Email'];?></td>
      <td><?=$R['Mobile'];?></td>
      <td><?=$R['HomeAddress1'];?></td>
      <td><?=$R['HomeAddress2'];?></td>
      <td><?=$R['HomeTown'];?></td>
      <td><?=$R['HomeCounty'];?></td>
      <td><?=$R['HomeZipCode'];?></td>
      <td><?=$R['BillingAddress1'];?></td>
      <td><?=$R['BillingAddress2'];?></td>
      <td><?=$R['BillingTown'];?></td>
      <td><?=$R['BillingCounty'];?></td>
      <td><?=$R['BillingZipCode'];?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php include "form.php"; ?>
<?php include "js.php"; ?>

</body>
</html>