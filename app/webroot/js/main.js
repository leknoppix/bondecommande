$(function() {
	//systeme de tabulation
	$( "#tabs" ).tabs();
	//système de notification
	$('.alert .close').click(function(e)
	{
		$(".alert").remove();
	});
	$('.submitdisable').hide();
	//generation du pdf
	$('.addpdf').click(function(e){
		e.preventDefault();
		var test= $(this).attr('id');
		test = test.replace('bdc','')
		$.ajax({
					url: "../pdfviamail/"+test,
					success: function (data)
					{
						if(data == 'true')
						{
							$('.addpdf').hide();
							$('.submitdisable').show();
						}
					}
				});
	});
});