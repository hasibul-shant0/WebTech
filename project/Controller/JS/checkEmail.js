function findExistingEmail() {
    var Email = document.getElementById("email").value;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("erroremail").innerHTML = this.responseText;

            if (this.responseText === "Use another email") {
                document.getElementById("emailStatus").value = "invalid";
            } else {
                document.getElementById("emailStatus").value = "valid";
            }
        }
    };

    xhttp.open("POST", "../Controller/checkEmail.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("Email=" + Email);
}
