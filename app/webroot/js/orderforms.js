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
  $('.addproduct').on('click',function()
  {
    $(this).clonage(options);
    $('.ui-helper-hidden-accessible').remove();
    $('.body-'+options.nb_copy_initial+' input').val('');
    $('.body-'+options.nb_copy_initial+' input.calcul').val('0');
  });
  $( "#products" ).find('input.autocomplete').bind("keyup", function(event){
      $(this).autocomplete({
        source: availableTags
      });
  });
});