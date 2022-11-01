let ajax = new XMLHttpRequest();
let method = "GET";
let url = "/assets/UtilityPHP/utilityPBlock.php";
ajax.open(method,url,true);
ajax.send();

ajax.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        console.log(this.responseText.length);
        //let data = JSON.parse(this.responseText);
        //console.log(data);
        /*
        this.responseText.forEach(element => {
            console.log('element --> ' , element);
            /*
            if(element.includes('.jpg') || element.includes('.jpeg') || element.includes('.png') || element.includes('.JPG')) {
                let divImage = document.querySelector('#gallery');
                let divCol = document.createElement('div');
                divCol.classList.add("col-sm-6");
                divCol.classList.add("col-md-3");
                divCol.classList.add("mb-3");
                let img = document.createElement('img');
                img.src = "../assets/img/distribuzione/" +element;
                divCol.appendChild(img);
                divImage.appendChild(divCol);
            }


        });

         */
    }
}