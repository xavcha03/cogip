<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/top.php');
?>

<section class="contentSection">
    <h3 class="contentSection__title">Contact list</h3>
    <hr>
    <table class="resumeTable">
        <thead class="resumeTable__head">
            <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created at</th>
                <th>Update At</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="resumeTable__body">
            <?php
            foreach ($contacts as $contact) {
            ?>
                <tr>
                    <td><?= $contact["name"] ?></td>
                    <td><?= $contact["companyName"] ?></td>
                    <td><?= $contact["email"] ?></td>
                    <td><?= $contact["phone"] ?></td>
                    <td><?= $contact["created_at"] ?></td>
                    <td><?= $contact["updated_at"] ?></td>
                    <td><a href="/dashboard/contact/delete/<?= $contact["id"] ?>">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>

<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/bottom.php');
?>