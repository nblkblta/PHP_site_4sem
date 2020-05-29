
window.onload = function(){
	var inp_id_post=document.querySelector('input[name=id_post]');
	var request = new XMLHttpRequest();
	request.onreadystatechange = function(){
		if(request.readyState == 4) {
			document.querySelector('#comments').innerHTML = request.responseText;
		}
	}

	request.open('GET','get_comments.php?id_post='+inp_id_post.value);
	request.send();
	var inp_text = document.querySelector('input[name=text]');
	document.querySelector('#send').onclick = function(){
		var params = 'id_post='+inp_id_post.value+'&'+'text='+inp_text.value;
		ajaxPost(params);
		}
	setInterval(()=> {
	var request = new XMLHttpRequest();
		request.onreadystatechange = function(){
			if(request.readyState == 4) {
			document.querySelector('#comments').innerHTML = request.responseText;
		}
	}
	request.open('GET','get_comments.php?id_post='+inp_id_post.value);
	request.send();}
	, 2000);
	
}

function ajaxPost(params){
	var request = new XMLHttpRequest();
	request.onreadystatechange = function(){
		if(request.readyState == 4) {
			document.querySelector('#message').innerHTML = request.responseText;
			var form = document.querySelector('#reg');
			form.reset();
		}
	}
	request.open('POST','add_comm.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);
	
}

function ajaxDel(params){
	console.log(params);
	var request = new XMLHttpRequest();
	request.open('POST','delete_comment.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);
}
