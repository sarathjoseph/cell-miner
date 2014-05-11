$('#register-carrier').click(function(e) {
	e.preventDefault();

	$.ajax({
		type: 'POST',
	  	url: "store.php",
	  	data: "action=register_carrier&" + $("#register-carrier-form").serialize()
	}).success(function(data){
		window.location.href = data;
	});
});