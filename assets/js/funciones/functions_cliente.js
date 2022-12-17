$(function(){

	// Lista de docente
	$.post( '../vista/funciones/cliente.php' ).done( function(respuesta)
	{
		$( '#cliente' ).html( respuesta );
	});
	
	
	



})
