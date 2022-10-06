<?php
require_once(__ROOT__ . '/Resources/views/dashboard/parts/top.php');
?>

<section class="contentSection">
    <h3 class="contentSection__title">Add contact form</h3>
    <hr>
    <a href="/dashboard/contact/list">All Contact</a>
    <form class="form" method="post" action="/dashboard/contact">
        <input class="form__input" type="text" name="name" placeholder="Name">
        <input class="form__input" type="text" name="email" placeholder="Email">
        <input class="form__input" type="text" name="phone" placeholder="Phone">
        <select class="form__select" name="company_id" id="company_id">
            <?php

            foreach ($companies as $company) {
            ?>
                <option value=<?= $company["id"] ?>><?= $company["name"] ?></option>
            <?php
            }
            ?>
        </select>
        <button class="form__button" class="button">Save</button>
    </form>
</section>




<?php
require_once(__ROOT__ . '/Resources/views/dashboard/parts/bottom.php');
?>