<script>
		// Llamada al modal para crear dato
		$(function(){

			 $("#myBtn").click(function(){
		        $("#myModal").modal();
		    });
		});
		// termino

		// Al abrir el modal editar toma las variables de index y se las pasa a los DOM del modal
		$(document).on("click", ".open-edit", function () {
	     var url = $(this).data('link');
	     var nombre = $(this).data('nombre');
	     var idregion = $(this).data('idregion');
	     $("#edit #nombre").val( nombre );
	     $("#edit #updateForm").attr('action', url);
		});
/*
		function orderByNombre(){
			console.log("hola");
			console.log(window.location);
		}

*/
</script>