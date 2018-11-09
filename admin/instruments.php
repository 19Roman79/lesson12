<?php
include_once "index.php";
include_once "function.php";
?>

<div class="col-sm-12">
    <table class="table table-bordered table-striped">
        <tr>
            <td>id</td>
            <td>title</td>
            <td>alias</td>
            <td>new</td>
            <td>on sale</td>
            <td>image</td>
            <td>price</td>
            <td>quantity</td>
            <td>edit</td>
            <td>delete</td>
        </tr>
        <?php
        allItems();
        deleteItems();
        ?>

    </table>
</div>

