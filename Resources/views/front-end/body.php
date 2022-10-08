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
        <!-- <img class="project" src="assets/img/Project Manager (16) 1.png" alt="icone project"> -->
        <section class="table">
            <h2>Last Contacts</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Mail</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody class="row">
                    <?php
                    foreach ($datas['contacts'] as $contact) {
                    ?>
                        <tr>
                            <td><?= $contact['name'] ?></td>
                            <td><?= $contact['phone'] ?></td>
                            <td><?= $contact['email'] ?></td>
                            <td><?= $contact['companyName'] ?></td>
                            <td><?= $contact['created_at'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </section>
        <!-- <img class="lamp" src="assets/img/lamp.png" alt="icone lamp"> -->

        <section class="table">
            <h2>Last companies</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>TVA</th>
                        <th>Country</th>
                        <th>Type</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody class="row">
                    <?php
                    foreach ($datas['companies'] as $company) {
                    ?>
                        <tr>
                            <td><?= $company['name'] ?></td>
                            <td><?= $company['tva'] ?></td>
                            <td><?= $company['country'] ?></td>
                            <td><?= $company['companiesType'] ?></td>
                            <td><?= $company['created_at'] ?></td>
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