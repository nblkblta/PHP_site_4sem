var request = new XMLHttpRequest();

	request.onreadystatechange = function(){
		if(request.readyState == 4) {
			document.querySelector('#lastposts').innerHTML = request.responseText;
		}
	}
	request.open('GET','get_lastposts.php?mod=1');
	request.send();
	setInterval(()=> {
	var request = new XMLHttpRequest();

	request.onreadystatechange = function(){
		if(request.readyState == 4) {
			document.querySelector('#lastposts').innerHTML = request.responseText;
		}
	}
	request.open('GET','get_lastposts.php?mod=1');
	request.send();}
	, 2000);
