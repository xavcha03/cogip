<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/top.php');
?>


<section class="contentSection">
    <h3 class="contentSection__title">Type Company</h3>
    <hr>
    <a class="dashboardBtn" href="/dashboard/companies/allType">All type</a>
    <form class="form" method="post" action="/dashboard/companies/type">
        <input class="form__input" type="text" name="typeCompany">
        <button class="form__button" class="button">Save</button>
    </form>
</section>




<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/bottom.php');
?>