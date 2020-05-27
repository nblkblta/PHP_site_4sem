window.onload = function(){
	var inp_id=document.querySelector('input[name=id]');
	document.querySelector('#del').onclick = function(){
		var params = 'id='+inp_id.value;
		ajaxDel(params);
		}
}

function ajaxDel(params){
	var request = new XMLHttpRequest();
	request.open('POST','delete_comment.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);
}