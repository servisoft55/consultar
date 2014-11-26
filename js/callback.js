jQuery("document").ready(function(){
	var options = { opacity: 0.75 };
								  
	$("#botonimagen").click(function(){
//	$('#mensaje').html('<img src="imagen/ajax-loader.gif">');
//	$('#mensaje').delay(8000).fadeOut(2000);
		$.ajax({
			type: "GET",
			url: "envio.php",
//			datatype: "application/pdf", 
			contentType: "application/pdf", 
			data: 'codigo=' + $('#codigo').val()+'&captcha='+$('#captcha').val(),
			beforeSend: function() {
				$('#mensaje').html('<img src="imagen/ajax-loader.gif" style="background: #6699CC">');
			},
			success: function(data){
				if(data==0) {
					$("#mensaje").html("El código no es válido.").css({ color: "#FFFFFF", background: "#911D1D" });
					$.ajax({
						type: "GET",
						url: "grabar_log.php",
						data: 'codigo=' + $('#codigo').val()+'&estado=ERROR',
 				    });
					$("span.captcha img").attr("src", "captcha.php"+ '?' + (new Date()).getTime());
					$("#captcha").attr("value", "")
				}else{
					$('#mensaje').html('Documento descargado.').css({ color: "#FFFFFF", background: "#398B47" });
					$.ajax({
						type: "GET",
						url: "grabar_log.php",
						data: 'codigo=' + $('#codigo').val()+'&estado=CORRECTO',
 				    });
					$("span.captcha img").attr("src", "captcha.php"+ '?' + (new Date()).getTime());
					$("#captcha").attr("value", "")
					$("#secretIFrame").attr("src","descarga.php?codigo="+ $('#codigo').val());
				}
			},
		});
	});
});