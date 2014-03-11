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
  var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
  var options = {
    valeur_initiale:'0',
    nb_copy_initial:'0',
    classclone:'body-',
    controller:'Openform',
  }
  //ajout de champs cloné
  $('.addproduct').on('click',function()
  {
    $(this).clonage(options);
    $('.body-'+options.nb_copy_initial+' input').val('').end();
    $('.body-'+options.nb_copy_initial+' input.calcul').val('0').end();
    //$('.body-'+options.nb_copy_initial+' input.autocomplete').css('border','1px solid red'); //ok, it run
    $('.body-'+options.nb_copy_initial+' input.autocomplete').autocomplete({
        source: availableTags
    }); //it don't run
  });
  //initialisation du premier champs input autocomplete
  $(document).find('input.autocomplete').autocomplete({
        source: availableTags
  });
});