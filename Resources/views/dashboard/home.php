<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/top.php');
?>
<!-- section resume -->
<section class="resume">
    <div class="resume__left">
        <section class="contentSection">
            <h3 class="contentSection__title">Statistics</h3>
            <ul class="statBadges">
                <li class="statBadges__item statBadges__item--bgDark">
                    <span class="statBadges__item__num">245</span>
                    <span class="statBadges__item__descr">Invoices</span>
                </li>
                <li class="statBadges__item statBadges__item--bglight">
                    <span class="statBadges__item__num">245</span>
                    <span class="statBadges__item__descr">Contacts</span>
                </li>
                <li class="statBadges__item statBadges__item--bglightRed">
                    <span class="statBadges__item__num">245</span>
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
                    <tr>
                        <td>Henry Bailleux</td>
                        <td>0485 78 76 67</td>
                        <td>henry.bailleux@gr.be</td>
                    </tr>
                    <tr>
                        <td>Henry Bailleux</td>
                        <td>0485 78 76 67</td>
                        <td>henry.bailleux@gr.be</td>
                    </tr>
                    <tr>
                        <td>Henry Bailleux</td>
                        <td>0485 78 76 67</td>
                        <td>henry.bailleux@gr.be</td>
                    </tr>
                    <tr>
                        <td>Henry Bailleux</td>
                        <td>0485 78 76 67</td>
                        <td>henry.bailleux@gr.be</td>
                    </tr>
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
                    <tr>
                        <td>FF20220815-001</td>
                        <td>15/09/22</td>
                        <td>Jouet Jean-Michel</td>
                    </tr>
                    <tr>
                        <td>FF20220815-001</td>
                        <td>15/09/22</td>
                        <td>Jouet Jean-Michel</td>
                    </tr>
                    <tr>
                        <td>FF20220815-001</td>
                        <td>15/09/22</td>
                        <td>Jouet Jean-Michel</td>
                    </tr>
                    <tr>
                        <td>FF20220815-001</td>
                        <td>15/09/22</td>
                        <td>Jouet Jean-Michel</td>
                    </tr>
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
                    <tr>
                        <td>Jouet Jean-Michel</td>
                        <td>FR873 736 367</td>
                        <td>FRANCE</td>
                    </tr>
                    <tr>
                        <td>Jouet Jean-Michel</td>
                        <td>FR873 736 367</td>
                        <td>FRANCE</td>
                    </tr>
                    <tr>
                        <td>Jouet Jean-Michel</td>
                        <td>FR873 736 367</td>
                        <td>FRANCE</td>
                    </tr>
                    <tr>
                        <td>Jouet Jean-Michel</td>
                        <td>FR873 736 367</td>
                        <td>FRANCE</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</section>
<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/bottom.php');
?>