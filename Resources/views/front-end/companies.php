<?php
require_once(__ROOT__ . '/Resources/views/front-end/header.php');
?>
<main>
    <div class="container">


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