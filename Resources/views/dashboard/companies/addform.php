<?php
require_once(__ROOT__ . '/Resources/views/dashboard/parts/top.php');
?>


<section class="contentSection">
    <h3 class="contentSection__title">Add company form</h3>
    <hr>
    <a href="/dashboard/companies/type">Company Type</a>
    <a href="/dashboard/companies/list">All Companies</a>
    <form class="form" method="post" action="/dashboard/companies/postCompanies">
        <input class="form__input" type="text" name="name" placeholder="Company Name">
        <input class="form__input" type="text" name="tva" placeholder="TVA">
        <input class="form__input" type="text" name="country" placeholder="Country">
        <select class="form__select" name="type_id" id="type_id">
            <?php
                foreach($types as $type){
                    ?>
                        <option value=<?=$type["id"]?>><?=$type["name"]?></option>
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