<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/top.php');
?>

<section class="contentSection">
            <h3 class="contentSection__title">All Companies</h3>
            <hr>
            <table class="resumeTable">
                <thead class="resumeTable__head">
                    <tr>
                        <th>Name</th>
                        <th>type</th>
                        <th>Country</th>
                        <th>TVA</th>
                        <th>Create At</th>
                        <th>Update At</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="resumeTable__body">
                    <?php 
                        foreach($companies as $company){
                    ?>
                        <tr>
                            <td><?=$company["name"]?></td>
                            <td><?=$company["companiesType"]?></td>
                            <td><?=$company["country"]?></td>
                            <td><?=$company["tva"]?></td>
                            <td><?=$company["created_at"]?></td>
                            <td><?=$company["updated_at"]?></td>
                            <td><a href="/dashboard/companies/delete/<?=$company["id"]?>">Delete</a></td>
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
