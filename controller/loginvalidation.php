

<?php
session_start();
require_once('../model/usermodel.php');

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $userpassword = $_POST['userpassword'];
   
}
?>

<script>
    if ((
            emailerror ||userpassworderror ) == false) 
            {
</script>
<?php


$conn = getConnection();

$sql = "SELECT * FROM users WHERE email=? AND userpassword=?";
$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "ss", $email, $userpassword);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$count = mysqli_num_rows($result);

if ($count == 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row["usertype"] == "staff") {
        
        $_SESSION['flag'] = true;
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['dob'] = $row['dob'];
        $_SESSION['usertype'] = $row['usertype'];
        setcookie('email', $email, time() + 30000, '/');
        setcookie('password', $userpassword, time() + 30000, '/');

        header("location: ../view/staff.php");
        exit();
    }
    
    else {
       
        header("location: ../view/login.php");
        exit();
    }
} else {
    // Invalid credentials
    header("Location: ../view/login.php?error=Incorrect username or password");
    exit();
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);



?>

<script>
    }
</script>

