<script>
	$(".select-region").chosen({
		no_results_text: "No se encuentra la region",
		placeholder_text_single: "Seleccione una region"
	});
	
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
     var idregion = $(this).data('idregion');
     $("#edit #nombre").val( nombre );
	 $(".select-region option[value='" + idregion + "']").attr("selected","selected");
     $("#edit #updateForm").attr('action', url);
     $(".select-region").select2();
	});
</script>