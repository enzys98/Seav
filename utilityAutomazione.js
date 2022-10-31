let ajax = new XMLHttpRequest();
let method = "GET";
let url = "../home.php";
ajax.open(method,url,true);
ajax.send();

ajax.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        alert(this.responseText);
    }
}