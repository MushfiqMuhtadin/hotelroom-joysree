<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "hotel");
if (isset($_POST['submit'])) {
    $edit_id = $_POST['edit'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    $query = "UPDATE users SET username=?, phone=?, dob=?, address=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "ssssi", $username, $phone, $dob, $address, $edit_id);

    $query_run = mysqli_stmt_execute($stmt);

    if ($query_run) {
        http_response_code(200); 
    } else {
        http_response_code(500); 
    }

    mysqli_stmt_close($stmt);
}
?>
