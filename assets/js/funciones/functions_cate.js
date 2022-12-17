$(function(){

	// Lista de docente
	$.post( '../vista/funciones/cate.php' ).done( function(respuesta)
	{
		$( '#cate' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#cate' ).change( function()
	{
		var el_continente = $(this).val();

		// Lista de clase
		$.post( '../vista/funciones/cate.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#cla' ).html( respuesta );
		});
	});



})
