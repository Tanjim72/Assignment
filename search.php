<!DOCTYPE html>
<html>
<head>
<script>
function searchProduct() {
    var key = document.getElementById("key").value;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("result").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "search_action.php?key=" + key, true);
    xhttp.send();
}
</script>
</head>

<body>
<h3>SEARCH</h3>

<input type="text" id="key" onkeyup="searchProduct()">
<button>Search By Name</button>

<div id="result"></div>
</body>
</html>
