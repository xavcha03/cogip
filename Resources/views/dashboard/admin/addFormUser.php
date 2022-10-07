<?php
require_once(__ROOT__ . '/Resources/views/dashboard/parts/top.php');
?>


<section class="contentSection">
    <h3 class="contentSection__title">Add user form</h3>
    <hr>
    <!-- <a href="/dashboard/companies/type">Company Type</a> -->
    <a href="/dashboard/admin/listUsers">All Users</a>
    <form class="form" method="post" action="/dashboard/admin/user">
        <input class="form__input" type="text" name="first_name" placeholder="first name">
        <input class="form__input" type="text" name="last_name" placeholder="last name">
        <input class="form__input" type="text" name="email" placeholder="email">
        <input class="form__input" type="text" name="password" placeholder="password">
        <input class="form__select" name="role_id" id="role_id" value="1">
            
        </select>
        <button class="form__button" class="button">Save</button>
    </form>
</section>




<?php
require_once(__ROOT__ . '/Resources/views/dashboard/parts/bottom.php');
?>