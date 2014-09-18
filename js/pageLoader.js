function loadInMain(page) { // loads the actual page
	var xmlhttp;
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("mainPage").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET",page,true);
	xmlhttp.send();
}
function load(page){
	window.location.href=page;
}