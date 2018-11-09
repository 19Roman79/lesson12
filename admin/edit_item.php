<?php
include "db.php";
include_once "index.php";
include_once "function.php";

if (isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
    $edit_sql = "SELECT * FROM `instruments` WHERE id = $item_id";
    $edit_query = mysqli_query($connection, $edit_sql);
    confirmQuery($edit_query);

    foreach ($edit_query as $item) {
        $title = $item['title'];
        $alias = $item['alias'];
        $price = $item['price'];
        $quantity = $item['quantity'];
    }

if (isset($_POST['edit_item'])) {
    $title_upd = $_POST['title'];
    $alias_upd = $_POST['alias'];
    $new_upd = $_POST['new'];
    $on_sale_upd = $_POST['sale'];
    $image_upd = $_POST['image'];
    $price_upd = $_POST['price'];
    $quantity_upd = $_POST['quantity'];

    $sql_edit_item = "UPDATE `instruments` SET `title`='$title_upd',`alias`='$alias_upd',`new`='$new_upd',`on sale`='$on_sale_upd',`image`='$image_upd',`price`='$price_upd',`quantity`='$quantity_upd' WHERE id = $item_id";

    $result_edit_item = mysqli_query($connection, $sql_edit_item);
    confirmQuery($result_edit_item);

}
}

?>

<div class="container">
    <form action="" method="POST">
        <div class="form-group">
            <label for="">
                Title
            </label>
            <input type="text" name="title" class="form-control" value="<?= $title ?>">
        </div>
        <div class="form-group">
            <label for="">
                Alias
            </label>
            <input type="text" name="alias" class="form-control" value="<?= $alias?>">
        </div>
        <div class="form-group">
            <label for="">
                New
            </label>
            <select name="new" id="" class="form-control">
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">
                On sale
            </label>
            <select name="sale" id="" class="form-control">
                <option value="1">1</option>
                <option value="0">0</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">
                File
            </label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="">
                Price
            </label>
            <input type="number" name="price" class="form-control" value="<?= $price ?>">
        </div>
        <div class="form-group">
            <label for="">
                Quantity
            </label>
            <input type="number" name="quantity" class="form-control" value="<?= $quantity ?>">
        </div>
        <input type="submit" class="btn btn-primary" name="edit_item" value="Edit item" >
    </form>
</div>