(function($){

	$.fn.clonage = function(options)
	{
		return this.each(function()
		{
			options.nb_copy_initial++;

			$(this).before( 
				$('.'+options.classclone+options.valeur_initiale)
				.clone(true,true)
        		.removeClass(options.classclone+options.valeur_initiale)
        		.attr('class', options.classclone+options.nb_copy_initial)
        	);
	        
	        $('.'+options.classclone+options.nb_copy_initial+" input").each(function()
	        {
	        	$(this).attr("name", $(this)
	        		.attr("name")
	        		.replace('['+options.controller+'][0]', '['+options.controller+']['+options.nb_copy_initial+']')
	        	);
	        	$(this).attr("id", $(this)
	        		.attr("id")
	        		.replace(options.controller+0, options.controller+options.nb_copy_initial)
	        	);
	        });
		});
	}

})(jQuery);