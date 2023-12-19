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
            <link rel="stylesheet" href="../view/room1.css">
            <title>Room</title>
        </head>
        
        <body>
            <br><br><br>
            <div class="container">
                <center>
                  
                <h1>Room details</h1>
                        <section class="room-form">
                            <table>
                                <thead>
                                    <th> <h1> Room id </h1> </th>
                                    <th> <h1> Name </h1> </th>
                                    <th> <h1> Number </h1> </th>
                                    <th> <h1> Description </h1> </th>
                                    <th> <h1> Price </h1> </th>
                                    <th> <h1> Action </h1> </th>
                                </thead>
                                <tbody>
                                    <?php
                                    $select_rooms = mysqli_query($conn, "SELECT * FROM `rooms`");
                                    if (mysqli_num_rows($select_rooms) > 0) {
                                        while ($row = mysqli_fetch_assoc($select_rooms)) {
                                            ?>
                                            <tr>
                                                <td> <h2> <?php echo $row['id']; ?> </h2></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['number']; ?></td>
                                                <td><?php echo $row['description']; ?> </td>
                                                <td><?php echo $row['price']; ?>Tk</td>
                                                <td>
                                                  <button class="update-btn">
                                                  <a  href="../view/updateroom.php?edit=<?php echo $row['id']; ?>" >  update </a>
                                                  </button>  
                                                </td>
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