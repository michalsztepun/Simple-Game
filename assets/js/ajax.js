jQuery(document).ready(function($){

	$('#login').click(x){

		$form = $('#form_login').serialize();


		console.log($form);

		$.ajax({
			  type: "POST",
			  url: url, // url 
			  data: $form,
			  success: function(response) {

			  	if(response == 'success') {
			  		window.location.href = url+'view/game.php';
			  	}else{
			  		window.location.href = url+'view/login.php';
			  	}

			  },
			  dataType: dataType
		});

	}



})