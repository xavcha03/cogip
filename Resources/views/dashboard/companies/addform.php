<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/top.php');
?>


<section class="contentSection">
    <h3 class="contentSection__title">Add company form</h3>
    <hr>
    <form class="form" method="post" action="#">
        <input class="form__input" type="text" name="name">
        <input class="form__input" type="text" name="tva">
        <input class="form__input" type="text" name="country">
        <select class="form__select" name="type_id" id="type_id">
            <option value="3">s.p.r.l.</option>
            <option value="3">s.a.</option>
            <option value="3">s.c.s</option>
        </select>
        <button class="form__button" class="button">Save</button>
    </form>
</section>




<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/bottom.php');
?>