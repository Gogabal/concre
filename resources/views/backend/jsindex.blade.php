<script type="text/javascript">

    $.ajax({
		url: window.location.href+"/search/ultimostrabajadores",
		type: 'GET',
		dataType: 'JSON',
		success: function(data, status, xhr){
			$(data).each(function(key,value){
			$('#ultimostrabajadores').append(
				"<tr>"+
					"<td>"+value.nombre+"</td>"+
					"<td>"+value.apellido_paterno+"</td>"+
					"<td>"+value.cargo+"</td>"+
				"</tr>"
				);
			});
		}
	})

    $.ajax({
		url: window.location.href+"/search/ultimasempresas",
		type: 'GET',
		dataType: 'JSON',
		success: function(data, status, xhr){
			$(data).each(function(key,value){
			$('#ultimasempresas').append(
				"<tr>"+
					"<td>"+value.nombre+"</td>"+
					"<td>"+value.rut+"-"+value.cod_rut+"</td>"+
					"<td>"+value.email+"</td>"+
				"</tr>"
				);
			});
		}
	})

	$.ajax({
		url: window.location.href+"/search/ultimasfaenas",
		type: 'GET',
		dataType: 'JSON',
		success: function(data, status, xhr){
			$(data).each(function(key,value){
			$('#ultimasfaenas').append(
				"<tr>"+
					"<td>"+value.nombre+"</td>"+
					"<td>"+value.empresa.nombre+"</td>"+
					"<td>"+value.direccion+"</td>"+
					"<td>"+value.ciudad.nombre+"</td>"+
				"</tr>"
				);
			});
		}
	})

	$.ajax({
		url: window.location.href+"/search/ultimosusuarios",
		type: 'GET',
		dataType: 'JSON',
		success: function(data, status, xhr){
			$(data).each(function(key,value){
			$('#ultimosusuarios').append(
				"<tr>"+
					"<td>"+value.name+"</td>"+
					"<td>"+value.email+"</td>"+
					"<td>"+value.type+"</td>"+
				"</tr>"
				);
			});
		}
	})
</script>