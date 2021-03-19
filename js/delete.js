//Eliminar usuario
$(document).ready(function(){  
$('.delete').click(function(e){   
e.preventDefault();   
var id = $(this).attr('data-id');
var parent = $(this).parent("td").parent("tr");   
bootbox.dialog({
message: "Estas seguro que quieres eliminar este usuario ?",
title: "<i class='glyphicon glyphicon-trash'></i> Eliminar Usuario",
buttons: {
success: {
	  label: "Cancelar",
	  className: "btn-success",
	  callback: function() {
	  $('.bootbox').modal('hide');
  }
},
danger: {
  label: "Aceptar",
  className: "btn-danger",
  callback: function() {       
   $.ajax({        
		type: 'POST',
		url: 'eliminar.php',
		data: 'id='+id        
   })
   .done(function(response){        
		bootbox.alert(response);
		parent.fadeOut('slow');        
   })
   .fail(function(){        
		bootbox.alert('Error....');               
   })              
  }
}
}
});   
});  
});


