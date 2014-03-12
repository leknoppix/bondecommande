(function($){

	$.fn.clonage = function(options)
	{
		return this.each(function()
		{
			options.nbrincrem++;
			$(this).before( 
				$('.'+options.classclone+options.delimiter+options.init)
					.clone(true,true)
	        		.removeClass(options.classclone+options.delimiter+options.init)
	        		.attr('class', options.classclone+options.delimiter+options.nbrincrem)
        	);
	        $('.'+options.classclone+options.delimiter+options.nbrincrem+" input").each(function()
	        {
	        	$(this).attr("name", $(this)
	        		.attr("name")
	        		.replace('['+options.controller+'][0]', '['+options.controller+']['+options.nbrincrem+']')
	        	);
	        	$(this).attr("id", $(this)
	        		.attr("id")
	        		.replace(options.controller+0, options.controller+options.nbrincrem)
	        	);
	        });
		});
	}

})(jQuery);