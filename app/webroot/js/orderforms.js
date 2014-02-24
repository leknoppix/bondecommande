$(function() {
	$('.datepicker').pickadate({
	    monthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ],
	    monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],
	    weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
	    today: 'Aujourd\'hui',
	    clear: 'Effacer',
	    formatSubmit: 'dd/mm/yyyy',
	    format: 'dd/mm/yyyy',
	});
	// systeme box
	$("a.fancybox").fancybox();
	// systeme de calcul TTC
	$('.calcul').keyup(function()
	{
  		var selectdiv = $(this).parent().parent().attr('class');
  		var select = selectdiv.split(' ');
  		var parentdiv = select[0];
  		var quantite = $('.'+parentdiv+' .qtt').val();
  		var prixht = $('.'+parentdiv+' .prixht').val();
  		var tva = $('.'+parentdiv+' .tva').val();
  		if(quantite!='0' && prixht!='0')
  		{
  			var total=(quantite*prixht)*(tva/100+1);
  			total=total.toFixed(2);
  			$('.'+parentdiv+' .total').val(total);
  		}
	});

	//système de clonage
	var nb_copy_initial=0;
    $('.addproduct').on('click',function()
    {
        nb_copy_initial++;
        $(this).before( $(".body-0").clone(true,true)
        							.removeClass('body-0')
        							.attr('class', 'body-'+nb_copy_initial) );
        //on modifie les names des champs ajoutés
        $(".body-"+nb_copy_initial+" input").each(function()
        {
        	$(this).attr("name", $(this).attr("name").replace(/\[0\]/g, '['+nb_copy_initial+']'));
        	$(this).attr("id", $(this).attr("id").replace(/m0/g, 'm'+nb_copy_initial));
        });
        //on vide les inputs
        $('.body-'+nb_copy_initial+' input').val('');
        $('.body-'+nb_copy_initial+' input.calcul').val('0');
    });
});