$(document).ready(function() {
	cerrar();
});


var cerrar= function(){
	$("#cerrarsesion").click(function(e) {
		/* Act on the event */
		event.preventDefault();
		$.ajax({
			url: './php/traerimg.php',
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

}