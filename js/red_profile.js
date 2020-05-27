
window.onload = function(){
	var inp_name=document.querySelector('input[name=name]');
	var inp_lastname = document.querySelector('input[name=lastname]');
	var inp_birthday = document.querySelector('input[name=birthday]');
	var inp_image = document.querySelector('input[name=image]');
		document.querySelector('#send').onclick = function(){
			var params = 'name='+inp_name.value+'&'+'lastname='+inp_lastname.value+'&'+'birthday='+inp_birthday.value+'&'+'image='+inp_image.value;
			ajaxPost(params);
		}

}

function ajaxPost(params){
	var request = new XMLHttpRequest();
	console.log(params);
		request.onreadystatechange = function(){
		if(request.readyState == 4) {
			document.querySelector('#message').innerHTML = request.responseText;
		}
	}
	request.open('POST','check_red_profile.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);
}