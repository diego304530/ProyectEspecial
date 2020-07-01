$(document).ready(function(){

	$("#caso").hide();
	inicio();

});

var inicio= function(){
	$("#formulario").submit(function(event) {
		/* Act on the event */

		event.preventDefault();
		let formulario= $(this);


		let datos= new FormData(formulario[0]);

		$.ajax({
			url: './php/crear.php',
			type: 'POST',
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			success: function(res){
				console.log(res);
				if(res==="error"){
					$("#caso").modal("show");
				}else if (res==="admin") {
					location.href="./SubirImagenes.php";
				}else{
					location.href="./inicio.php";

				}
				
			}
		});

	});
}



