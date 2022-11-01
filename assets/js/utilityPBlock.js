let ajax = new XMLHttpRequest();
let method = "GET";
let url = "/assets/UtilityPHP/utilityPBlock.php";
ajax.open(method,url,true);
ajax.send();

ajax.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {

        let data = JSON.parse(this.responseText);
        //console.log(data);
        data.forEach(element => {
            if(element.includes('.jpg') || element.includes('.jpeg') || element.includes('.png') || element.includes('.JPG')) {
                let divImage = document.querySelector('#gallery');
                let divCol = document.createElement('div');
                divCol.classList.add("col-sm-6");
                divCol.classList.add("col-md-3");
                divCol.classList.add("mb-3");
                let a = document.createElement('a');
                a.classList.add("fancybox");
                a.href = "/assets/img/pblock/" +element;
                a.setAttribute("data-fancybox","gallery1");
                let img = document.createElement('img');
                img.setAttribute("width","100%");
                img.setAttribute("height","100%");
                img.src = "../assets/img/pblock/" +element;
                a.appendChild(img);
                divCol.appendChild(a);
                divImage.appendChild(divCol);


            }


        });


    }
}