<?php
require_once(__ROOT__.'/Resources/views/front-end/header.php');
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
                <tr>
                    <td>F20220915-501</td>
                    <td>15/09/2022</td>
                    <td><a href="/">Jouet Jean-Michel</a></td>
                    <td>25/09/2020</td>
                <tr>
                    <td>F20220915-502</td>
                    <td>15/09/2022</td>
                    <td><a href="/">Dunder Miffin</a></td>
                    <td>25/09/2020</td>
                </tr>
                <tr>
                    <td>F20220915-503</td>
                    <td>15/09/2022</td>
                    <td><a href="/">Pierre Cailloux</a></td>
                    <td>25/09/2020</td>
                </tr>
                <tr>
                    <td>F20220915-504</td>
                    <td>15/09/2022</td>
                    <td><a href="/">Pier Pipper</a></td>
                    <td>25/09/2020</td>
                </tr>
                <tr>
                    <td>F20220915-505</td>
                    <td>15/09/2022</td>
                    <td><a href="/">Raviga</a></td>
                    <td>25/09/2020</td>
                </tr>
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
                    <tr>
                        <td>Peter Gregory</td>
                        <td>555-4567</td>
                        <td>peter.gregory@raviga.com</td>
                        <td>Raviga</td>
                        <td>25/09/2020</td>
                    </tr>
                    <tr>
                        <td>Cameron How</td>
                        <td>555-5897</td>
                        <td>cam.how@mutiny.com</td>
                        <td>Mutiny</td>
                        <td>25/09/2020</td>
                    </tr>
                    <tr>
                        <td>Gavin Belson</td>
                        <td>555-3678</td>
                        <td>gavin@hooli.com</td>
                        <td>Hooli</td>
                        <td>25/09/2020</td>
                    </tr>
                    <tr>
                        <td>Jian Yang</td>
                        <td>555-7589</td>
                        <td>jian.yang@phoque.com</td>
                        <td>Phoque Off</td>
                        <td>25/09/2020</td>
                    </tr>
                    <tr>
                        <td>Bertan Gilfoyle</td>
                        <td>555-8520</td>
                        <td>gilfoy@piedpiper.com</td>
                        <td>Pied Pipper</td>
                        <td>25/09/2020</td>
                    </tr>
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
                        <tr>
                            <td>Raviga</td>
                            <td>US456 654 321</td>
                            <td>United States</td>
                            <td>Supplier</td>
                            <td>25/09/2020</td>
                        </tr>
                        <tr>
                            <td>Dunder Miffin</td>
                            <td>US676 787 767</td>
                            <td>United States</td>
                            <td>Client</td>
                            <td>25/09/2020</td>
                        </tr>
                        <tr>
                            <td>Pierre Cailloux</td>
                            <td>FR676 676 676</td>
                            <td>France</td>
                            <td>Supplier</td>
                            <td>25/09/2020</td>
                        </tr>
                        <tr>
                            <td>Belgalol</td>
                            <td>BE987 876 787</td>
                            <td>Belgium</td>
                            <td>Supplier</td>
                            <td>25/09/2020</td>
                        </tr>
                        <tr>
                            <td>Jouet Jean-Michel</td>
                            <td>FR0987 876 787</td>
                            <td>France</td>
                            <td>Client</td>
                            <td>25/09/2020</td>
                        </tr>
                    </tbody>
                    </table>
            </section>
    </div>
</main>

<?php
require_once(__ROOT__.'/Resources/views/front-end/footer.php');
?>
