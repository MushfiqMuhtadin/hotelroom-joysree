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
    <link rel="stylesheet" href="../view/duty.css">
    <title>Customer details</title>

</head>

<body>
    <br>
    <div class="container">
        <center>
        
         <h1> Duty time Schedule</h1> <br>

            <section class="duty-form">
                <table>
                    <thead>
                        <th> <h1> worker Name </h1> </th>
                        <th> <h1> time </h1> </th>
                       
                    </thead>
                    <tbody>
                        <?php
                        $select_duty = mysqli_query($conn, "SELECT * FROM `times`");
                        if (mysqli_num_rows($select_duty) > 0) {
                            while ($row = mysqli_fetch_assoc($select_duty)) {
                        ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['time']; ?></td>
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