<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homedashboard.css">
    <title>Document</title>
</head>

<body>
    <header> <?php include './headerdashboard.php' ?> </header>
    <div class="aside"> <?php include './asidedashboard.php' ?> </div>

    <div class="tableboard">
        <div class="statitics">
            <p>
            <h3>statitics</h3>
            <div>
                <p></p>
            </div>
            </p>
            <div class="statitics">
                <p>
                <h3>Last Invoices</h3>
                <table></table>
                </p>
                <div class="statitics">
                    <p>
                    <h3>Last Contacts</h3>
                    <table></table>
                    </p>
                    <div class="statitics">
                        <p>
                        <h3>Last Companies</h3>
                        <table></table>
                        </p>



                    </div>
                </div>
                <footer> <?php include './footerdashboard.php' ?></footer>

</body>

</html>