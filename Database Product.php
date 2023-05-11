<?php
    include 'Connection.php';

    $data2 = "SELECT * FROM Products;";
    $sql = mysqli_query($connec, $data2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Products</title>
    <link rel="stylesheet" href="STYLE.css">   
</head>
<body>
    <h1 class="elipsP">PRODUCT TABLE</h1>
    <br>
    <a href="InsertP.php" class="button">Tambah Data</a>
    <table border='1'>
        <thead>
            <tr>
                <th>productCode</th>
                <th>productName</th>
                <th>productLine</th>
                <th>productScale</th>
                <th>productVendor</th>
                <th>productDescription</th>
                <th>quantityInStock</th>
                <th>buyPrice</th>
                <th>MSRP</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($result = mysqli_fetch_assoc($sql)){
            ?>
            <tr>
                <td><?php echo $result['productCode'];?></td>
                <td><?php echo $result['productName'];?></td>
                <td><?php echo $result['productLine'];?></td>
                <td><?php echo $result['productScale'];?></td>
                <td><?php echo $result['productVendor'];?></td>
                <td><?php echo $result['productDescription'];?></td>
                <td><?php echo $result['quantityInStock'];?></td>
                <td><?php echo $result['buyPrice'];?></td>
                <td><?php echo $result['MSRP'];?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>