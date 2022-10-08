<?php
require_once('parts/top.php');
?>
<!-- section resume -->
<section class="resume">
    <div class="resume__left">
        <section class="contentSection">
            <h3 class="contentSection__title">Statistics</h3>
            <ul class="statBadges">
                <li class="statBadges__item statBadges__item--bgDark">
                    <span class="statBadges__item__num"><?= $datas['invoiceCount'] ?></span>
                    <span class="statBadges__item__descr">Invoices</span>
                </li>
                <li class="statBadges__item statBadges__item--bglight">
                    <span class="statBadges__item__num"><?= $datas['contactCount'] ?></span>
                    <span class="statBadges__item__descr">Contacts</span>
                </li>
                <li class="statBadges__item statBadges__item--bglightRed">
                    <span class="statBadges__item__num"><?= $datas['companiesCount'] ?></span>
                    <span class="statBadges__item__descr">Companies</span>
                </li>
            </ul>
        </section>

        <section class="contentSection">
            <h3 class="contentSection__title">Last Contacts</h3>
            <hr>
            <table class="resumeTable">
                <thead class="resumeTable__head">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody class="resumeTable__body">
                    <?php
                    foreach ($datas['lastContacts'] as $contact) {
                    ?>
                        <tr>
                            <td><?= $contact['name'] ?></td>
                            <td><?= $contact['phone'] ?></td>
                            <td><?= $contact['email'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </section>

    </div>
    <div class="resume__right">
        <section class="contentSection">
            <h3 class="contentSection__title">Last invoices</h3>
            <hr>
            <table class="resumeTable">
                <thead class="resumeTable__head">
                    <tr>
                        <th>Invoice Number</th>
                        <th>Dates</th>
                        <th>Company</th>
                    </tr>
                </thead>
                <tbody class="resumeTable__body">
                    <?php
                    foreach ($datas['lastInvoices'] as $invoice) {
                    ?>
                        <tr>
                            <td><?= $invoice['ref'] ?></td>
                            <td><?= $invoice['created_at'] ?></td>
                            <td><?= $invoice['companyName'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </section>
        <section class="contentSection">
            <h3 class="contentSection__title">Last Companies</h3>
            <hr>
            <table class="resumeTable">
                <thead class="resumeTable__head">
                    <tr>
                        <th>Name</th>
                        <th>TVA</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody class="resumeTable__body">
                    <?php
                    foreach ($datas['lastCompanies'] as $company) {
                    ?>
                        <tr>
                            <td><?= $company['name'] ?></td>
                            <td><?= $company['tva'] ?></td>
                            <td><?= $company['country'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </section>
    </div>
</section>
<?php
require_once('parts/bottom.php');
?>