<?php
session_start();
require_once('../model/usermodel.php');
require_once('../model/db.php');

if (isset($_SESSION['flag'])) {
    $conn = getConnection();
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
?>



    <html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../view/updateprofile.css" />
        <title>Edit profile</title>

        <script>
        function validateAndSubmit() {
            var username = document.getElementById("username").value;
            var phone = document.getElementById("phone").value;
            var dob = document.getElementById("dob").value;
            var address = document.getElementById("address").value;
            var editId = "<?php echo isset($_GET['edit']) ? $_GET['edit'] : 'null'; ?>";

            if (username === '' || phone === '' || dob === '' || address === '') {
                alert("All fields must be filled out");
                return;
            }

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../controller/profilecontroller.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log("Profile updated successfully!");
                        window.location.href = "../view/profile.php"; 
                    } else {
                        console.error("Error updating profile!");
                    }
                }
            };

            var data = "submit=submit&username=" + username + "&phone=" + phone + "&dob=" + dob + "&address=" + address + "&edit=" + editId;
            xhr.send(data);
        }
    </script>

    </head>

    <body>
        <br><br><br>
        <center>

            <h1>Update Profile</h1>

            <div class="update-form">


                <?php

                if (isset($_GET['edit'])) {
                    $edit_id = $_GET['edit'];
                    $edit_query = mysqli_query($conn, "SELECT * FROM `users` WHERE id = $edit_id");
                    if (mysqli_num_rows($edit_query) > 0) {
                        while ($fetch_edit = mysqli_fetch_assoc($edit_query)) {
                ?>

                            <form id="profileForm" >
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" value="<?php echo $fetch_edit['username']; ?>"> <br> <br>

                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" id="phone" value="<?php echo $fetch_edit['phone']; ?>">
                                <br> <br>

                                <label for="dob">Date of Birth:</label>
                                <input type="text" name="dob" id="dob" value="<?php echo $fetch_edit['dob']; ?>">
                                <br> <br>

                                <label for="address">Address:</label>
                                <input type="text" name="address" id="address" value="<?php echo $fetch_edit['address']; ?>">
                                <br> <br>

                                <input type="button" value="Update Profile" onclick="validateAndSubmit()">
                            </form>
                <?php
                        };
                    };
                };
                ?>

            </div>
        </center>

    </body>

<?php } ?>