<?php
require_once(__ROOT__ . '/Resources/views/dashBoard/parts/top.php');
?>

<section class="contentSection">
            <h3 class="contentSection__title">All type</h3>
            <hr>
            <table class="resumeTable">
                <thead class="resumeTable__head">
                    <tr>
                        <th>Type</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="resumeTable__body">
                    <?php 
                        foreach($types as $type){
                    ?>
                        <tr>
                            <td><?=$type["name"]?></td>
                            <td><a href="/dashboard/companies/deleteType/<?=$type["id"]?>">Delete</a></td>
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
