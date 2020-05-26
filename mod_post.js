function ajaxPost(params){
	var request = new XMLHttpRequest();
		
	request.open('POST','change_post_stat.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);

}	

window.onload = function(){


		document.querySelector('#send').onclick = function(){
			var inp_id_post = document.querySelector('input[name=id_post]');
			var params = 'id_post='+inp_id_post.value;
			ajaxPost(params);
		}
	}