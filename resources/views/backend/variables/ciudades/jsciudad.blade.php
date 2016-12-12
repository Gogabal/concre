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
		//$.fn.select2.defaults.reset();
	     var url = $(this).data('link');
	     var nombre = $(this).data('nombre');
	     var idcomuna = $(this).data('idcomuna');
	     $("#edit #nombre").val( nombre );
		 $(".select-comuna option[value='" + idcomuna + "']").attr("selected","selected");
	     $("#edit #updateForm").attr('action', url);
	     $(".select-comuna").select2();
		});
</script>