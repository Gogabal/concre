<script>
		$(function(){

			 $("#myBtn").click(function(){
		        $("#myModal").modal();
		    });
		});

		$(document).on("click", ".open-edit", function () {
		//$.fn.select2.defaults.reset();
	     var url = $(this).data('link');
	     var nombre = $(this).data('nombre');
	     var idregion = $(this).data('idregion');
	     $("#edit #nombre").val( nombre );
		 $(".select-region option[value='" + idregion + "']").attr("selected","selected");
		 //alert(idregion);
	     $("#edit #updateForm").attr('action', url);
	     $(".select-region").select2();
		});
</script>