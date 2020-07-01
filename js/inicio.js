$(document).ready(function(){
	$("#modalPres").hide();
	impresion();
	seleccion_img();
	cerrar();
});


var impresion = function(){

	$.ajax({
		url: './php/traerimg.php',
		type: 'POST',
		data: {"caso": 2},
		success: function(res){

			res= JSON.parse(res);
			console.log(res);
			let cont=0;
			
			let aux2="";
			for (c in res) {
				// statemen

				if(cont==0){
					aux2+= "<tr>";

				}

				aux2+= "<td>" + "<img src='"+ res[c]['url_img']+"' width='180' height='180'> </td>";

				if (cont==4) {
					cont=0;
					aux2+= "</tr>";

				}else{
					cont++;
				}				
			}

			$("#impresion").html(aux2);
		}
	});	
}


var seleccion_img = function(){
	$("#impresion ").on('click', 'tr img', function(event) {
		event.preventDefault();
		console.log($(this).attr('src'));
		/* Act on the event */
		$("#modalTexto").html("<img src='"+$(this).attr('src')+"' width='470' height='500'>");

		$("#modalPres").modal("show");

	});
}
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