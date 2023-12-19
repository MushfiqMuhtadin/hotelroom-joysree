<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup1.css">
    <script src="../controller/signupvalidation.js"></script>
</head>

<body>
   

    <center>
   

        <section class="signup-form">

        <h2>Signup</h2>

           
            <form name="signupform" onsubmit="return form()" action="../controller/signupvalidation.php" method="post" novalidate>

                <?php
                if (isset($error)) {
                    echo $error;
                }
                ?>

                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="enter username"> <br><br>
                <center> <center><span class="validate" id="usernameerror"></span></center></center>




                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="enter email"> <br><br>
                <center><span class="validate" id="emailerror"></span></center>





                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" placeholder="enter phone number"> <br><br>
                <center><span class="validate" id="phoneerror"></span></center>





                <label for="dob">Date of birth</label>
                <input type="date" name="dob" id="dob" placeholder="enter date of birth"> <br><br>
                <center><span class="validate" id="doberror"></span></center>




                <label for="usertype"> Usertype:</label>
                <select name="usertype" id="usertype">
                    <option value="NULL">Select user</option>
                    <option value="staff">staff</option>
                    <option value="customer">customer</option>
                    
                </select> <br> <br>
                <center><span class="validate" id="usertypeerror"></span></center>

                <label for="address">Address</label>
                <input type="text" name="address" id="address" placeholder="enter address"> <br><br>
                <center><span class="validate" id="addresserror"></span></center>



                <label for="userpassword">Password</label>
                <input type="password" name="userpassword" id="userpassword" placeholder="enter password"> <br><br>
                <center><span class="validate" id="userpassworderror"></span></center>




                <label for="confirmpassword">Confirm password</label>
                <input type="password" name="confirmpassword" id="confirmpassword"
                placeholder="confirm password"> <br>
                <center><span class="validate" id="confirmpassworderror"></span></center> <br>




                <input id="signup-button" type="submit" value="signup" name="signup">



            </form>


        </section>


    </center>

</body>

</html>