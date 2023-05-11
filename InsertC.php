<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="STYLE.CSS">
</head>
<body>
    <table>
    <h3 style="color: red;" class="underline" >Pengisian Data Customers</h3>  
    <form method="POST" action="SaveDataC.php">
    
        <tr>
            <td>customerNumber</td>
            <td><input type="text" name="customerNumber" size="30"></td>
        </tr>

        <tr>
            <td>customerName</td>
            <td><input type="text" name="customerName"  size="30"></td>
        </tr>  

        <tr>
            <td>contactLastName</td>
            <td><input type="text" name="contactLastName"  size="30"></td>
        </tr>

        <tr>
            <td>contactFirstName</td>
            <td><input type="text" name="contactFirstName"  size="30"></td>
        </tr>

         <tr>
            <td>phone</td>
            <td><input type="text" name="phone" size="30"></td>
         </tr>   

        <tr>
            <td>addressLine1</td>
            <td><input type="text" name="addressLine1" size="30"></td>
        </tr>

        <tr>
            <td>addressLine2</td>
            <td><input type="text" name="addressLine2"  size="30"></td>
        </tr>   

        <tr>
            <td>city</td>
            <td><input type="text" name="city"  size="30"></td>
        </tr>   

        <tr>
            <td>state</td>
            <td><input type="text" name="state"  size="30"></td>
        </tr>   

        <tr>
            <td>postalCode</td>
            <td><input type="text" name="postalCode"  size="30"></td>
        </tr> 

        <tr>
            <td>country</td>
            <td><input type="text" name="country"  size="30"></td>
        </tr>  

        <tr>
            <td>salesRepEmployeeNumber</td>
            <td><input type="text" name="salesRepEmployeeNumber"  size="30"></td>
        </tr> 

        <tr>
            <td>creditLimit</td>
            <td><input type="text" name="creditLimit"  size="30"></td>
        </tr> 
            <td><input class="inputSubmitC" type="submit" name="Penambahan" value="Tambah"></td>
    </table>
    </form>
    </div>
</body>
</html>