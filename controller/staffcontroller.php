<?php

@include '../model/db.php';

if (isset($_POST['update_product'])) {
    $update_p_id = $_POST['update_p_id'];
    $update_p_name = $_POST['update_p_name'];
    $update_p_price = $_POST['update_p_price'];
    $update_p_description = $_POST['update_p_description'];
    $update_p_number = $_POST['update_p_number'];

    $stmt = mysqli_prepare($conn, "UPDATE `rooms` SET name = ?, price = ?, description = ?, number = ? WHERE id = ?");

    mysqli_stmt_bind_param($stmt, "ssssi", $update_p_name, $update_p_price, $update_p_description, $update_p_number, $update_p_id);


    $success = mysqli_stmt_execute($stmt);

 
    if ($success) {
        header('Location: ../view/staff.php');
    } else {
        header('Location: ../view/staff.php');
    }


    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>