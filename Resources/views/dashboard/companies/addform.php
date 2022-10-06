<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/top.php');
?>


<section class="contentSection">
    <h3 class="contentSection__title">Add company form</h3>
    <hr>
    <a href="/dashboard/companies/type" class="dashboardLienButton">Company Type</a>
    <form class="form" method="post" action="#">
        <input class="form__input" type="text" name="name">
        <input class="form__input" type="text" name="tva">
        <input class="form__input" type="text" name="country">
        <select class="form__select" name="type_id" id="type_id">
            <?php
            foreach ($types as $type) {
            ?>
            <option value=<?= $type["id"] ?>><?= $type["name"] ?></option>
            <?php
            }
            ?>
        </select>
        <button class="form__button" class="button">Save</button>
    </form>
</section>




<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/bottom.php');
?>