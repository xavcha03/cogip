<?php
require_once(__ROOT__ . '/Resources/views/dashboard/parts/top.php');
?>

<section class="contentSection">
            <h3 class="contentSection__title">All roles</h3>
            <hr>
            <table class="resumeTable">
                <thead class="resumeTable__head">
                    <tr>
                        <th>Role</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="resumeTable__body">
                    <?php 
                        foreach($roles as $role){
                    ?>
                        <tr>
                            <td><?=$role["name"]?></td>
                            <td><a href="/dashboard/companies/deleteRole/<?=$role["id"]?>">Delete</a></td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </section>

<?php
require_once(__ROOT__ . '/Resources/views/dashboard/parts/bottom.php');
?>
