<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/top.php');
?>

<section class="contentSection">
    <h3 class="contentSection__title">Contact list</h3>
    <hr>
    <table class="resumeTable">
        <thead class="resumeTable__head">
            <tr>
                <th>Reference</th>
                <th>Company</th>
                <th>Created at</th>
                <th>Update At</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="resumeTable__body">
            <?php
            foreach ($invoices as $invoice) {
            ?>
                <tr>
                    <td><?= $invoice["ref"] ?></td>
                    <td><?= $invoice["companyName"] ?></td>
                    <td><?= $invoice["created_at"] ?></td>
                    <td><?= $invoice["updated_at"] ?></td>
                    <td><a href="/dashboard/invoice/delete/<?= $invoice["id"] ?>">Delete</a></td>
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