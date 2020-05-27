
window.onload = function(){
	var inp_email=document.querySelector('input[name=email]');
	var inp_login = document.querySelector('input[name=login]');
	var inp_name = document.querySelector('input[name=name]');
	var inp_password = document.querySelector('input[name=password]');
	var inp_password_ch = document.querySelector('input[name=password_ch]');

		document.querySelector('#send').onclick = function(){
			var params = 'email='+inp_email.value+'&'+'login='+inp_login.value+'&'+'name='+inp_name.value+'&'+'password='+inp_password.value+'&'+'password_ch='+inp_password_ch.value;
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
	request.open('POST','check_reg.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);

}