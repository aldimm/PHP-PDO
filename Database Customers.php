<?php
    include 'Connection.php';

    $data1 = "SELECT * FROM customers;";
    $sql = mysqli_query($connec, $data1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Customers</title>
    <link rel="stylesheet" href="STYLE.css">
</head>
<body>
    <h1 class="elipsC">CUSTOMERS TABLE</h1>
    <br>
    <a href="InsertC.php" class="button">Tambah Data</a>
    <table border='1'>
        <thead>
            <tr>
                <th>customerNumber</th>
                <th>customerName</th>
                <th>contactLastName</th>
                <th>contactFirstName</th>
                <th>phone</th>
                <th>addressLine1</th>
                <th>addressLine2</th>
                <th>city</th>
                <th>state</th>
                <th>postalCode</th>
                <th>country</th>
                <th>salesRepEmployeeNumber</th>
                <th>creditLimit</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($result = mysqli_fetch_assoc($sql)){
            ?>
            <tr>
                <td><?php echo $result['customerNumber'];?></td>
                <td><?php echo $result['customerName'];?></td>
                <td><?php echo $result['contactLastName'];?></td>
                <td><?php echo $result['contactFirstName'];?></td>
                <td><?php echo $result['phone'];?></td>
                <td><?php echo $result['addressLine1'];?></td>
                <td><?php echo $result['addressLine2'];?></td>
                <td><?php echo $result['city'];?></td>
                <td><?php echo $result['state'];?></td>
                <td><?php echo $result['postalCode'];?></td>
                <td><?php echo $result['country'];?></td>
                <td><?php echo $result['salesRepEmployeeNumber'];?></td>
                <td><?php echo $result['creditLimit'];?></td>
                
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>