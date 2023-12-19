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
        <link rel="stylesheet" href="../view/customerinfo1.css">
        <title>Customer details</title>
    </head>

    <body>
        <br><br><br>
        <div class="container">
            <center>

            <h1> Customer details</h1>
                <section class="customer-form">
                    
                        
                        <table>
                            <thead>
                                <th>
                                    <h1> C-id </h1>
                                </th>
                                <th>
                                    <h1> Name </h1>
                                </th>
                                <th>
                                    <h1> email </h1>
                                </th>
                                <th>
                                    <h1> phone </h1>
                                </th>
                                <th>
                                    <h1> dob </h1>
                                </th>
                                <th>
                                    <h1> address </h1>
                                </th>
                                <th>
                                    <h1> usertype </h1>
                                </th>
                            </thead>
                            <tbody>
                                <?php
                                $select_customer = mysqli_query($conn, "SELECT * FROM `users` WHERE usertype = 'customer'");
                                if (mysqli_num_rows($select_customer) > 0) {
                                    while ($row = mysqli_fetch_assoc($select_customer)) {
                                ?>
                                        <tr>
                                            <td>
                                                <h2> <?php echo $row['id']; ?> </h2>
                                            </td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['phone']; ?> </td>
                                            <td><?php echo $row['dob']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['usertype']; ?></td>
                                        </tr>
                                <?php
                                    };
                                }
                                ?>
                            </tbody>
                        </table>
                </section>

            </center>
    </body>

    </html>
<?php } ?>