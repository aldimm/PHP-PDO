<?php
    include "Connection.php";
    
    if(isset($_POST['Penambahan']))
    {
        if($_POST['Penambahan']=="Tambah")
        {
            $cNumber = $_POST['customerNumber'];
            $cName = $_POST['customerName'];
            $cLN = $_POST['contactLastName'];
            $cFN = $_POST['contactFirstName'];
            $phone = $_POST['phone'];
            $aL1 = $_POST['addressLine1'];
            $aL2 = $_POST['addressLine2'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $postalCode = $_POST['postalCode'];
            $country = $_POST['country'];
            $salesREN = $_POST['salesRepEmployeeNumber'];
            $creditLimit = $_POST['creditLimit'];

            $queryC = "INSERT INTO Customers VALUES('$cNumber', '$cName', '$cLN', '$cFN', '$phone', '$aL1', '$aL2', '$city', '$state', '$postalCode', '$country', '$salesREN', '$creditLimit')";
            $sql = mysqli_query($connec, $queryC);

            if($sql)
            {
                echo "Data Telah Tertambahkan <a href ='Database Customers.php'>[CHECK]</a>";
            }
            else
            {
                echo "Mengalami Kesalahan";
            }
        }
    }
?>