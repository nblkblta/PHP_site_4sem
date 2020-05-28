
$(document).ready(function()
	{
	var $that = $('#new_post');
    
    $('#send').click(function(){
    	formData = new FormData($that.get(0)); 
    	$.ajax({
    		url:'check_new_post.php',
    		type: "POST",
	    	contentType: false, // важно - убираем форматирование данных по умолчанию
	     	processData: false, // важно - убираем преобразование строк по умолчанию
	      	data: formData,
	      	success: function(text){
	        	if(text){
	          		document.querySelector('#message').innerHTML=text;
	       			}
	        	}
     	 	
    		});
   		})
    })


