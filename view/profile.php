<?php
session_start();
require_once('../model/usermodel.php');
require_once('../model/db.php');
if (isset($_SESSION['flag'])) {
    $conn = getConnection();
    $email = $_SESSION['email'];
    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../view/profile.css">
        <title>profile</title>
    </head>

    <body>

        <center>
            <br> <br>
            <h1>Profile</h1>
            <div class="profile-form">
                <h2> Username : <span> <?= $row['username'] ?> </span> </h2>
                <h2>Email : <span> <?= $row['email'] ?> </span> </h2>
                <h2>Phone :<span> <?= $row['phone'] ?> </span> </h2>
                <h2>Date of birth:<span> <?= $row['dob'] ?> </span> </h2>
                <h2>Address:<span> <?= $row['address'] ?> </span> </h2>
                <h2>Usertype :<span> <?= $row['usertype'] ?> </span> </h2>
                <br><br>
                <center><button class="update-btn"><a href="../view/updateprofile.php?edit=<?php echo $row['id']; ?>">Update</a></button>
            </center>
            </div>
        </center>

    </body>

    </html>
<?php } ?>