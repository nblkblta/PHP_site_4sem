window.onload = function(){
	var request = new XMLHttpRequest();

	request.onreadystatechange = function(){
		if(request.readyState == 4) {
			document.querySelector('#lastposts').innerHTML = request.responseText;
			
		}
	}
	request.open('GET','get_unmod_posts.php');
	request.send();
setInterval(()=> {
	var request = new XMLHttpRequest();

	request.onreadystatechange = function(){
		if(request.readyState == 4) {
			document.querySelector('#lastposts').innerHTML = request.responseText;
			
		}
	}
	request.open('GET','get_unmod_posts.php');
	request.send();}
	, 2000);
	
}
