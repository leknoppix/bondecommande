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
	//système de clonage
  var options = {
    valeur_initiale:'0',
    nb_copy_initial:'0',
    classclone:'body',
    delimiter:'-',
    controller:'Openform',
  }
  $('.addproduct').on('click',function()
  {
<<<<<<< Updated upstream
    add();
=======
    $(this).clonage(options);
    $('.body-'+nb_copy_initial+' input').val('');
    $('.body-'+nb_copy_initial+' input.calcul').val('0');
>>>>>>> Stashed changes
  });
  function init()
  {
    options.clone = $('<div>')
            .append( $("."+options.classclone+options.delimiter+options.valeur_initiale).clone() )
            .html();
  }
  function add()
  {
    initial=options.nb_copy_initial
    options.nb_copy_initial++;
    var clone=options.clone;
    clone= clone.replace(new RegExp(options.delimiter+options.valeur_initiale,'g'),options.delimiter+options.nb_copy_initial);
    clone=clone.replace(new RegExp('\\['+options.valeur_initiale+'\\]','g'),'['+options.nb_copy_initial+']');
    clone=clone.replace(new RegExp(options.controller+options.valeur_initiale,'g'),options.controller+options.nb_copy_initial);
    $("."+options.classclone+options.delimiter+initial).after(clone);
  }
  // systeme de calcul TTC
  $(document).on('keydown','.calcul',function()
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
  //systeme autocomplete
  $(document).on('keydown','.autocomplete',function()
  {
    $(this).focus().autocomplete({
      source: "../../backoffice/produits/ajaxview",
      minLength: 1,
      select: function( event, ui ) {
        $(this).val(ui.item.label);
      }
    });
  });
  //fonction lancer dès l'initialisation
  init();
});