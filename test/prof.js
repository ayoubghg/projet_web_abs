function valid() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var code = document.getElementById("code").value;
    var seance = document.getElementById("seance").value;

    if (username === "" || password === "" || code === "" || seance === "") {
        alert("tout champs doient etre remplis");
        return false; 
    }
    return true; 
}