<?php
session_start();
@include '../model/db.php';
if (isset($_SESSION['flag'])) {
    
    if (isset($_POST['delete_feedback'])) {
        $feedback_id = $_POST['delete_feedback'];

        $delete_query = "DELETE FROM `feedbacks` WHERE id = $feedback_id";
        mysqli_query($conn, $delete_query);
        
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../view/room1.css">
            <title>Feedback</title>
        </head>
        
        <body>
            <br><br><br>
            <div class="container">

                <center>
                  
                <h1>Manage feedback</h1>
                        <section class="room-form">
                            <table>
                                <thead>
                                    <th> <h1> id </h1> </th>
                                    <th> <h1> Name </h1> </th>
                                    <th> <h1> Feedback </h1> </th>
                                    <th> <h1> Action </h1> </th>
                                </thead>
                                <tbody>
                                    <?php
                                    $select_rooms = mysqli_query($conn, "SELECT * FROM `feedbacks`");
                                    if (mysqli_num_rows($select_rooms) > 0) {
                                        while ($row = mysqli_fetch_assoc($select_rooms)) {
                                            ?>
                                            <tr>
                                                <td> <h2> <?php echo $row['id']; ?> </h2></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['feedback']; ?></td>
                                                <td>
                                                 <form method="post" action="">
                                                <input type="hidden" name="delete_feedback" value="<?php echo $row['id']; ?>">
                                                <button type="submit" class="update-btn" onclick="return confirm('Are you sure you want to delete this feedback?')">Delete</button>
                                            </form> 
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