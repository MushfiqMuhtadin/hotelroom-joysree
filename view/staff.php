<?php
session_start();
require_once('../model/usermodel.php');


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

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../view/staff2.css">
        <script src="../controller/customerajax.js"></script>
        <title>Staff</title>
    </head>

    <body>

        <div class="profile-bar">
            <button> <a href="../view/profile.php">My Profile</a> </button>
            <button> <a href="../controller/logout.php">Logout</a> </button>
        </div>


        <section class="staff">



            <div class="card">
                <h1>Duty time</h1>
                <button id="viewDutyInfo">GO</button>
            </div>

            <div class="card">
                <h1>Customer payment details</h1>
                <button> <a href="../view/payment.php">GO</a> </button>
            </div>

            <div class="card">
                <h1>Manage Feedback</h1>
                <button> <a href="../view/feedback.php">GO</a> </button>
            </div>

            <div class="card">
                <h1>Room Info</h1>
                <button> <a href="../view/room.php">GO</a> </button>
            </div>

            <div class="card">
                <h1>Customer Info</h1>
                <button id="viewCustomerInfo">GO</button>
            </div>



        </section><br><br><br><br>

        <div class="container" id="customerTable">
            <!-- Customer details ajax -->
        </div>
        <div class="container" id="dutyTable">
            <!-- duty details ajax -->
        </div>

        <script src="../controller/customerajax.js"></script>
        <script src="../controller/dutyajax.js"></script>

    </body>

    </html>
<?php
}
?>