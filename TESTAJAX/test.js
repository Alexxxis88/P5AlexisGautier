//function générique de ajax
 function ajaxGet(url, callback)
 {  
   var req = new XMLHttpRequest();
   req.open("GET", url);
   req.addEventListener("load", function () {
       if (req.status >= 200 && req.status < 400) {  
           callback(req.responseText);
       } else {
           console.error(req.status + " " + req.statusText + " " + url);
       }
   });
   req.addEventListener("error", function () {
       console.error("Erreur réseau avec l'URL " + url);
   });
   req.send(null);
}

ajaxGet('my-json.php', (data) => {
    JSON.parse(data).forEach( ({idPack,packNameServices,packPriceServices}) => {
       content.innerHTML += `<p>${idPack},${packNameServices},${packPriceServices}</p>`
    });
})