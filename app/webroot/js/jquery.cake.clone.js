(function($){

	$.fn.clonage = function(options)
	{
		return this.each(function()
		{
			options.nb_copy_initial++;

			$(this).before( 
				$('.'+options.classclone+options.valeur_initiale)
				.clone(true)
        		.removeClass(options.classclone+options.valeur_initiale)
        		.attr('class', options.classclone+options.nb_copy_initial)
        	);
	        
	        $('.'+options.classclone+options.nb_copy_initial+" input").each(function()
	        {
	        	$(this).attr("name", $(this)
	        		.attr("name")
<<<<<<< Updated upstream
	        		.replace('['+options.controller+'][0]', '['+options.controller+']['+options.nb_copy_initial+']')
	        	);
	        	$(this).attr("id", $(this)
	        		.attr("id")
	        		.replace(options.controller+0, options.controller+options.nb_copy_initial)
=======
	        		.replace('['+options.controller+']['+options.init+']', '['+options.controller+']['+options.nbrincrem+']')
	        	);
	        	$(this).attr("id", $(this)
	        		.attr("id")
	        		.replace(options.controller+options.init, options.controller+options.nbrincrem)
>>>>>>> Stashed changes
	        	);
	        });
		});
	}

})(jQuery);