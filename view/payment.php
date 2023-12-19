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
        <link rel="stylesheet" href="../view/payment1.css">
        <title>Payment</title>
    </head>

    <body>
        <br><br><br>
        <div class="container">
            <center>

            <h1>Payment details</h1>

                <section class="payment-form">
                   
                    <table>
                        <thead>
                            <th>
                                <h1> Pay id </h1>
                            </th>
                            <th>
                                <h1> Name </h1>
                            </th>
                            <th>
                                <h1> Phone Number </h1>
                            </th>
                            <th>
                                <h1> Amount </h1>
                            </th>
                        </thead>

                        <tbody>
                            <?php
                            $select_payment = mysqli_query($conn, "SELECT * FROM `payments`");
                            if (mysqli_num_rows($select_payment) > 0) {
                                while ($row = mysqli_fetch_assoc($select_payment)) {
                            ?>
                                    <tr>
                                        <td>
                                            <h2> <?php echo $row['id']; ?> </h2>
                                        </td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['amount']; ?> </td>
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