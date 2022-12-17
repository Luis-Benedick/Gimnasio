$(function(){

	// Lista de docente
	$.post( '../vista/funciones/salon.php' ).done( function(respuesta)
	{
		$( '#salon' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#salon' ).change( function()
	{
		var el_continente = $(this).val();

		// Lista de clase
		$.post( '../vista/funciones/salon.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#cla' ).html( respuesta );
		});
	});



})
