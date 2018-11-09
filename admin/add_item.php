<?php
include "db.php";
include_once "index.php";
include_once "function.php";


if (isset($_POST['add_item'])) {
    $title_add = $_POST['title'];
    $alias_add = $_POST['alias'];
    $new_add = $_POST['new'];
    $on_sale_add = $_POST['sale'];
    $image_add = $_POST['image'];
    $price_add = $_POST['price'];
    $quantity_add = $_POST['quantity'];
    $sql_add_item = "INSERT INTO `instruments`(`title`, `alias`, `new`, `on sale`, `image`, `price`, `quantity`) VALUES ('$title_add', '$alias_add', '$new_add', '$on_sale_add', '$image_add', '$price_add', '$quantity_add')";
    $result_add_item = mysqli_query($connection, $sql_add_item);
    confirmQuery($result_add_item);

}

?>

<div class="container">
<form action="" method="POST">
    <div class="form-group">
        <label for="">
            Title
        </label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="">
            Alias
        </label>
        <input type="text" name="alias" class="form-control">
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
        <input type="number" name="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="">
            Quantity
        </label>
        <input type="number" name="quantity" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" name="add_item" value="Add item" >
</form>
</div>