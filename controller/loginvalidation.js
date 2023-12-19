
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}


function form() {
    var email = document.loginform.email.value;
    var userpassword = document.loginform.userpassword.value;

    var emailError = userpasswordError = false;
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

    if (userpassword === "") {
        printError("userpassworderror", "Enter your Password");
        userpasswordError = true;
    } else {
        printError("userpassworderror", "");
    }

    if (emailError || userpasswordError) {
        return false; 
    }
    return true; 
}
