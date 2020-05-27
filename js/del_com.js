function ajaxDel(params){
	console.log(params);
	var request = new XMLHttpRequest();
	request.open('POST','delete_comment.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);
}