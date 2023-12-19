
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}


function form() {
    var username = document.signupform.username.value;
    var email = document.signupform.email.value;
    var phone = document.signupform.phone.value;
    var dob = document.signupform.dob.value;
    var address = document.signupform.address.value;
    var usertype = document.signupform.usertype.value;
    var userpassword = document.signupform.userpassword.value;
    var confirmpassword = document.signupform.confirmpassword.value;

    var usernameError = emailError = phoneError = dobError = addressError = usertypeError = userpasswordError = confirmpasswordError = false;

    if (username === "") {
        printError("usernameerror", "Enter your Username");
        usernameError = true;
    } else {
        printError("usernameerror", "");
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
        printError("emailerror", "Enter your Email");
        emailError = true;
    } else if (!emailRegex.test(email)) {
        printError("emailerror", "Enter a valid Email");
        emailError = true;
    } else {
        printError("emailerror", "");
    }

    if (phone === "") {
        printError("phoneerror", "Enter your phone");
        phoneError = true;
    } else {
        printError("phoneerror", "");
    }

    if (dob === "") {
        printError("doberror", "Enter your Dob");
        dobError = true;
    } else {
        printError("doberror", "");
    }

    if (address === "") {
        printError("addresserror", "Enter your address");
        addressError = true;
    } else {
        printError("addresserror", "");
    }

    if (usertype === "NULL") {
        printError("usertypeerror", "Enter your usertype");
        usertypeError = true;
    } else {
        printError("usertypeerror", "");
    }

    if (userpassword === "") {
        printError("userpassworderror", "Enter your Password");
        userpasswordError = true;
    } else {
        printError("userpassworderror", "");
    }

    if (confirmpassword === "") {
        printError("confirmpassworderror", "Confirm Your Password");
        confirmpasswordError = true;
    } else {
        printError("confirmpassworderror", "");
    }

    if (
        usernameError ||
        emailError ||
        phoneError ||
        dobError ||
        addressError ||
        usertypeError ||
        userpasswordError ||
        confirmpasswordError
    ) {
        return false;
    } else {
        return true;
    }
}
