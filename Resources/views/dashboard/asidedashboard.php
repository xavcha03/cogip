<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asidedashboard.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="profil">
            <img src="../../../public/assets/img/malepicture.jpg" alt="photohenry" class="PhotoHenry">
            <p class="namehenry"> Henry George</p>
            <div class="separationBar">
                <hr>
            </div>
        </div>
    </header>
    <div class="buttonAside">
        <p><input type="button" value="backhome"
                onclick="location.href='http://localhost/travailgithub/travailgroupe/cogipp/cogip/Resources/views/dashboard/homedashboad.php'">
        <p>
        <p>
        <p><input type="button" value="back" onclick="history.back()"></p>
        <p><a href="../../homedashboad.php">Dashboard</a></p>
        <a href="./invoicesdashboard.php">Invoices
        </a>
        </p>
        <p><a href="./companiesdashboard.php">Companies</a></p>
        <p><a href="./contactdashboard.php">Contacts</a></p>
        <!-- <div class="footerAsideDasboard">
            <p class="separationFooterAside">
                <hr>
            </p>
            <!-- <p class="imagefooterdashboard"><img src="../../../public/assets/img/malepicture.jpg" alt="photohenry"></p>
            <p class="logoutDashboard"><input type="button" value="Logout"></p> -->


</body>
<footer>
    <p class="separationFooterAside">
        <hr>
    </p>
    <p class="imagefooterdashboard"><img src="../../../public/assets/img/malepicture.jpg" alt="photohenry"></p>
    <p class="logoutDashboard"><input type="button" value="Logout"></p>
    <p><?php include './footerdashboard.php' ?></p>
</footer>

</html>