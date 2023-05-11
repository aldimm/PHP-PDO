<?php
        $dbServer = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $db = 'classicmodels';

        try
        {
                $connec = new PDO("mysql:host=$dbServer;dbname=$db", $dbUser, $dbPass);
                $connec->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        catch(PDOException $err)
        {
                echo "failed connect to database : " . $err->getmessage();
        }
?>