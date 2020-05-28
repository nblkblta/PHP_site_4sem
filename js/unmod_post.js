var url = 'get_lastposts.php?mod=0';
window.onload = function(){
	var request = new XMLHttpRequest();

	request.onreadystatechange = function(){
		if(request.readyState == 4) {
			document.querySelector('#lastposts').innerHTML = request.responseText;
			
		}
	}
	request.open('GET',url);
	request.send();
	setInterval(()=> {
	var request = new XMLHttpRequest();

	request.onreadystatechange = function(){
		if(request.readyState == 4) {
			document.querySelector('#lastposts').innerHTML = request.responseText;
			
		}
	}
	request.open('GET',url);
	request.send();}
	, 2000);
	
}

function ajaxPubl(params){
	var request = new XMLHttpRequest();
	request.open('POST','change_post_stat.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);
}

function ajaxDePubl(params){
	var request = new XMLHttpRequest();
	request.open('POST','delete_post.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);
}
