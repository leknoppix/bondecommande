$(function() {
	//systeme de tabulation
	$( "#tabs" ).tabs();
	//système de notification
	$('.alert .close').click(function(e)
	{
		$(".alert").remove();
	})
});