<?php
require_once(__ROOT__ . '/Resources/views/front-end/header.php');
?>
<main>
    <div class="container">


        <section class="table">
            <h2>Last invoices</h2>
            <table class="invoices">
                <thead>
                    <tr>
                        <th>Invoice Number</th>
                        <th>Dates due</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                </thead class="head">
                <tbody class="row">
                    <?php
                    foreach ($datas['invoices'] as $invoice) {
                    ?>
                        <tr>
                            <td><?= $invoice['ref'] ?></td>
                            <td><?= $invoice['created_at'] ?></td>
                            <td><a href="/company/<?= $invoice['companyId'] ?>"><?= $invoice['companyName'] ?></a></td>
                            <td><?= $invoice['created_at'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>

    </div>
</main>

<?php
require_once(__ROOT__ . '/Resources/views/front-end/footer.php');
?>