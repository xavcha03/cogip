<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/dashBoard.css">
    <title>Document</title>
</head>

<body>
    <!--Structure principale -->
    <div class="container">
        <!-- Menu latéral -->
        <aside class="lateralSection">
            <!-- Image de profil-->
            <section class="profil">
                <img class="profil__avatar" src="/assets/img/avatar.png" alt="">
                <p class="profil__name">Henry George</p>
            </section>
            <!-- Navigation du dashboard-->
            <nav class="nav">
                <ul class="nav__linksList">
                    <li class="nav__linksList__item"><a class="nav__link nav__link--dashBoard nav__link--selected" href="/dashboard">Dashboard</a></li>
                    <li class="nav__linksList__item"><a class="nav__link nav__link--invoices" href="#">Invoices</a></li>
                    <li class="nav__linksList__item"><a class="nav__link nav__link--companies" href="/dashboard/addcompany">Companies</a></li>
                    <li class="nav__linksList__item"><a class="nav__link nav__link--contact" href="#">Contact</a></li>
                </ul>
            </nav>
            <!-- section logout-->
            <section class="logout">
                <img class="logout__avatar" src="/assets/img/avatar.png" alt="">
                <a class="logout__link" href="#">Logout</a>
            </section>
        </aside>
        <!-- zone de contenu-->
        <main class="main">
            <!--Header du dashboard-->
            <header class="header">
                <section class="header__titles">
                    <h1>DashBoard</h1>
                    <h2>dashboard/new-invoice</h2>
                </section>
                <section class="header__welcomeMsg">
                    <p class="header__welcomeMsg__title">Welcome back Henry!</p>
                    <p class="header__welcomeMsg__pageDescription">You can here add an invoice, a company and some contacts</p>
                </section>
                <img class="header__img" src="/assets/img/develloper.svg" alt="">


            </header>
            <!-- sections contenant le contenu principal de la page-->