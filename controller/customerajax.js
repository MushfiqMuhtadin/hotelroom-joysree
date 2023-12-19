
document.getElementById("viewCustomerInfo").addEventListener("click", function() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("customerTable").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "../view/customerinfo.php", true);
    xhr.send();
});
