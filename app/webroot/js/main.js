(function($)
{
	//système onglet
	$('#myTab a:first').tab('show');
	$('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
	//wysiwyg
	$('.cleditor').cleditor({
		width:        500, // width not including margins, borders or padding
        height:       250, // height not including margins, borders or padding
        controls:     // controls to add to the toolbar
          "bold italic underline strikethrough subscript superscript | " +
          " | alignleft center alignright justify | undo redo | ",  
	});
})(jQuery);