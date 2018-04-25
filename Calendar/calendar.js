var req;

function navigate(month, year, evt) {
    var url = "xml.php?month="+month+"&year="+year+"&event="+evt;
    if (window.XMLHttpRequest){
        req = new XMLHttpRequest();
    }else if (window.ActiveXObject("Microsoft.XMLHTTP")){
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }

    req.open("GET", url, true);
    req.onreadystatechange = callback;
    req.send(null);
}

function callback() {
    if (req.readyState == 4){
        var response = req.responseXML;

        var resp = response.getElementsByTagName("response");
        document.getElementById("calendar").innerHTML = resp[0].getElementsByTagName("content")[0].textContent;
    }
}

function getObject(obj) {
    var o;
    if(document.getElementById) o = document.getElementById(obj);
    else if(document.all) o = document.all.obj;
    return o;
}