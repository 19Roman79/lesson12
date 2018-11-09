<?php

function allItems() {

    global $connection;

    $sql_instr = "SELECT * FROM instruments";

    $result_instr = mysqli_query($connection, $sql_instr);

    confirmQuery($result_instr);

    foreach ($result_instr as $item) { ?>
        <tr>
            <td><?php echo $item['id']?></td>
            <td><?php echo $item['title']?></td>
            <td><?php echo $item['alias']?></td>
            <td>
                <select name="" id="">
                    <option value=""><?php echo $item['new']?></option>
                </select>
            </td>
            <td>
                <select name="" id="">
                    <option value=""><?php echo $item['on sale']?></option>
                </select>
            </td>
            <td><img src="img/<?php echo $item['image']?>" alt="" width="100"></td>
            <td><?php echo $item['price']?></td>
            <td><?php echo $item['quantity']?></td>
            <td><a href="edit_item.php?item_id=<?= $item['id'] ?>" class="btn btn-success">Edit</a></td>
            <td><a href="instruments.php?delete=<?= $item['id'] ?>"  onclick = "return confirm('are u shure?')" class="btn btn-danger">Delete </a></td>
        </tr>

        <?php
    }
}

function deleteItems() {

    global $connection;

    if (isset($_GET['delete'])) {
            $the_item_delete_id = $_GET['delete'];
            $query_item_delete = "DELETE FROM instruments WHERE id = $the_item_delete_id";
            $item_delete = mysqli_query($connection, $query_item_delete);
            confirmQuery($item_delete);
        }
    }


function confirmQuery($result) {
    if (!$result) {
        die("Запрос не удался" . mysqli_error());
    }
}
?>


