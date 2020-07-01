

$("#imagen").submit(function(event) {
	

	event.preventDefault();
	let formulario= $(this)

	
	let datos= new FormData(formulario[0]);

	$.ajax({
		url: './php/imagenes.php',
		type: 'POST',
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(res){
			console.log(res);

		}
	});

});

$("#cerrarsesion").click(function(e) {
	/* Act on the event */
	event.preventDefault();
	$.ajax({
		url: './php/imagenes.php',
		type: 'POST',
		data: {"caso":1},
		success: function(res){
			console.log(res);

			if(res=="true"){
				location.href="./index.html";
			}
		}

	});

});
