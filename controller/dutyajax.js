
document.getElementById("viewDutyInfo").addEventListener("click", function() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("dutyTable").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "../view/duty.php", true);
    xhr.send();
});
