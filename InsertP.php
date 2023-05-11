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
    <h3 style="color: red;" class="underline" >Pengisian Data Products</h3>
    <form method="POST" action="SaveDataP.php">
        <tr>
            <td>productCode</td>
            <td><input type="text" name="productCode" size="30"></td>
        </tr>

        <tr>
            <td>productName</td>
            <td><input type="text" name="productName"  size="30"></td>
        </tr>  

        <tr>
            <td>productLine</td>
            <td><input type="text" name="productLine"  size="30"></td>
        </tr>

        <tr>
            <td>productScale</td>
            <td><input type="text" name="productScale"  size="30"></td>
        </tr>

         <tr>
            <td>productVendor</td>
            <td><input type="text" name="productVendor" size="30"></td>
         </tr>   

        <tr>
            <td>productDescription</td>
            <td><textarea name="productDescription" ></textarea></td>
        </tr>

        <tr>
            <td>quantityInStock</td>
            <td><input type="text" name="quantityInStock"  size="30"></td>
        </tr>   

        <tr>
            <td>buyPrice</td>
            <td><input type="text" name="buyPrice"  size="30"></td>
        </tr>   

        <tr>
            <td>MSRP</td>
            <td><input type="text" name="MSRP" size="30"></td>
        </tr>  
            <td><input class="inputSubmitP" type="submit" name="Penambahan" value="Tambah"></td>
    </table>
    </form>
    </div>
</body>
</html>