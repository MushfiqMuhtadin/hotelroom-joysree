<?php
session_start();
@include '../model/db.php';
if (isset($_SESSION['flag'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../view/updateroom.css">
        <title>Update room</title>

        <script>
            function validateForm() {
                var name = document.forms["updateForm"]["update_p_name"].value;
                var roomNumber = document.forms["updateForm"]["update_p_number"].value;
                var description = document.forms["updateForm"]["update_p_description"].value;
                var roomPrice = document.forms["updateForm"]["update_p_price"].value;

                if (name === "" || roomNumber === "" || description === "" || roomPrice === "") {
                    alert("Please fill the details");
                    return false;
                }


                return true;
            }
        </script>

    </head>

    <body>
        <center>

            <section class="update-form">
                <?php
                if (isset($_GET['edit'])) {
                    $edit_id = $_GET['edit'];
                    $edit_query = mysqli_query($conn, "SELECT * FROM `rooms` WHERE id = $edit_id");
                    if (mysqli_num_rows($edit_query) > 0) {
                        while ($fetch_edit = mysqli_fetch_assoc($edit_query)) {
                ?>

                            <form name="updateForm" action="../controller/staffcontroller.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

                                <h1>update room </h1>
                                <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>"> <br>

                                <label for="name"> name</label>
                                <input type="text" class="box" name="update_p_name" value="  <?php echo $fetch_edit['name']; ?>"> <br> <br>

                                <label for="room number">room number</label>
                                <input type="number" min="0" class="box" name="update_p_number" value="<?php echo $fetch_edit['number']; ?>"> <br> <br>

                                <label for="description">description</label>
                                <input type="text" min="0" class="box" name="update_p_description" value="<?php echo $fetch_edit['description']; ?>"> <br> <br>

                                <label for="room price">room price</label>
                                <input type="text" min="0" class="box" name="update_p_price" value="<?php echo $fetch_edit['price']; ?>"> <br> <br>

                                <input type="submit" value="update " name="update_product" class="btn"><br>

                            </form>
                <?php
                        };
                    };
                };
                ?>
            </section>
        </center>
    </body>

    </html>
<?php } ?>