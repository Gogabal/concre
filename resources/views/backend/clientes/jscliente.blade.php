<script>
		// Llamada al modal para crear dato
		$(function(){

			 $("#myBtn").click(function(){
		        $("#myModal").modal();
		    });
		});
		// termino

		// Al abrir el modal editar toma las variables de index y se las pasa a los DOM del modal
		$(document).on("click", ".open-vista", function () {
		var cliente = $(this).data('cliente');
	    var ciudad = $(this).data("ciudad");
	    var comuna = $(this).data('comuna');
	    var region = $(this).data('region');
	     //alert(ciudad);
	    $("#vista #nombre").text(cliente.nombre);
	    $("#vista #razon").text(cliente.razon_social);
	    $("#vista #rut").text(cliente.rut);
	    $("#vista #codrut").text(cliente.cod_rut);
	    $("#vista #telefono").text(cliente.telefono);
	    $("#vista #direccion").text(cliente.direccion);
	    $("#vista #email").text(cliente.email);
	    $("#vista #ciudad").text(ciudad);
	    $("#vista #comuna").text(comuna);
	    $("#vista #region").text(region);
		});

</script>