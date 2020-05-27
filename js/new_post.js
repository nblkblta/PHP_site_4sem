
window.onload = function(){
	var inp_title=document.querySelector('input[name=title]');
	var inp_text = document.querySelector('input[name=text]');
	var inp_image = document.querySelector('input[name=image]');
		document.querySelector('#send').onclick = function(){
			var params = 'title='+inp_title.value+'&'+'text='+inp_text.value+'&'+'image='+inp_image.value;
			ajaxPost(params);
		}

}

function ajaxPost(params){
	var request = new XMLHttpRequest();

		request.onreadystatechange = function(){
		if(request.readyState == 4) {
			document.querySelector('#message').innerHTML = request.responseText;
		}
	}
	request.open('POST','check_new_post.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);

}