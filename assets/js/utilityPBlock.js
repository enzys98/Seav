let ajax = new XMLHttpRequest();
let method = "GET";
let url = "/assets/UtilityPHP/utilityPBlock.php";
ajax.open(method,url,true);
ajax.send();

ajax.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        console.log(JSON.parse(this.responseText));
    }
}