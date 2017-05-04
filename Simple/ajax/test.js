function start(){
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(xhttp.readyState == 4 && xhttp.status == 200)
			document.getElementById('ajax').innerHTML = xhttp.responseT
	}
	xhttp.open('GET', 'testfile.txt', true);
	xhttp.send();
}