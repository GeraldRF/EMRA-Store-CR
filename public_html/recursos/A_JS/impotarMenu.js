 // https://grfixurdivice.000webhostapp.com
 var server = "http://localhost:3000/public_html"

 var xhr = new XMLHttpRequest();
        xhr.open('POST', server+'/recursos/A_HTML/menu.php');
        xhr.setRequestHeader('Content-Type', 'text/plain');
        xhr.send();
        xhr.onload = function (data) {
            document.querySelector("nav").innerHTML = data.currentTarget.response;
            //para más de una barra de navegación
            /*var navs = document.querySelectorAll("nav");
            for(var i=0; i<navs.length; i++) {
                navs[i].innerHTML = data.currentTarget.response;
            }*/
            
        };