<?php
require_once(__ROOT__ . '/Resources/views/dashboard/parts/top.php');
?>

<section class="contentSection">
    <h3 class="contentSection__title">User list</h3>
    <hr>
    <table class="resumeTable">
        <thead class="resumeTable__head">
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Created at</th>
                <th>Update At</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="resumeTable__body">
            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?= $user["first_name"] ?></td>
                    <td><?= $user["last_name"] ?></td>
                    <td><?= $user["email"] ?></td>
                    <td><?= $user["password"] ?></td>
                    <td><?= $user["created_at"] ?></td>
                    <td><?= $user["updated_at"] ?></td>
                    <td><a href="/dashboard/admin/delete/<?= $user["id"] ?>">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>

<?php
require_once(__ROOT__ . '/Resources/views/dashboard/parts/bottom.php');
?>