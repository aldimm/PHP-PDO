<?php
    include "Connection.php";
    
    if(isset($_POST['Penambahan']))
    {
        if($_POST['Penambahan']=="Tambah")
        {
            $pCode = $_POST['productCode'];
            $pName = $_POST['productName'];
            $pLine = $_POST['productLine'];
            $pScale = $_POST['productScale'];
            $pVendor = $_POST['productVendor'];
            $pDescription = $_POST['productDescription'];
            $qIStock = $_POST['quantityInStock'];
            $bPrice = $_POST['buyPrice'];
            $MSRP = $_POST['MSRP'];

            $queryP = "INSERT INTO Products VALUES('$pCode', '$pName', '$pLine', '$pScale', '$pVendor', '$pDescription', '$qIStock', '$bPrice', '$MSRP')";
            $sql = mysqli_query($connec, $queryP);

            if($sql)
            {
                echo "Data Telah Tertambahkan <a href ='Database Product.php'>[CHECK]</a>";
            }
            else
            {
                echo "Mengalami Kesalahan";
            }
        }
    }
?>