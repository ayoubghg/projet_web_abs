function valid() {
    var id = document.getElementById("id").value;
    var code = document.getElementById("code").value;
    var seance = document.getElementById("seance").value;

    if (id === "" || code === "" || seance === "") {
        alert("tout champs doivent etre remplis");
        return false; 
    }
    
    
    
    return true; 
}