<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header> <?php include './headerdashboard.php' ?> </header>
    <div class="aside"> <?php include './asidedashboard.php' ?> </div>


    <div class="dataform">
        <p>
            <title>New Invoices</title>
        </p>
        <hr>
        
        <p><input type="box" name="Reference" id="" value="Reference"></p>
        <p><input type="box" name="Price" id="" value="Price"></p>
        <p><input type="box" name="Companyname" id="" value="Companyname"></p>
        <p><input type="box" name="Adress" id="" value="Adress"></p>
        <p><input type="box" name="Postcode" id="" value="Postcode"></p>
        <p><input type="box" name="city" id="" value="city"></p>
        <p><input type="box" name="tva" id="" value="tva"></p>
        <p><input type="mail"></p>
        <p><input type="button" value="Save"></p>


    </div>

    <footer><?php include './footerdashboard.php' ?></footer>

</body>

</html>