$(function() {
	/*$('.datepicker').pickadate({
	    monthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ],
	    monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],
	    weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
	    today: 'Aujourd\'hui',
	    clear: 'Effacer',
	    format: 'dd-mm-yyyy',
	});*/
	// systeme box
	$("a.fancybox").fancybox();
	//système de clonage
  $('.addproduct').click(function()
  {
    $(this).clonage(options);
    $('.body-'+options.nbrincrem+' input').val('');
    $('.body-'+options.nbrincrem+' input.calcul').val('0');
  });
  // systeme de calcul TTC
  $(document).on('keyup','.calcul',function()
  {
      calculatrice_taxe($(this));
      
  });
  $('.calcul').each(function()
  {
      calculatrice_taxe($(this));
  });
  function calculatrice_taxe(nomdiv)
  {
    var selectdiv = nomdiv.parent().parent().attr('class');
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
  }
  $('.orderforms div.w100:last').each(function(){
    incremental=$(this).attr('class').split(' ')[0].replace('body-','');
  });
  var options = {
      init:0,
      nbrincrem:incremental,
      classclone:'body',
      delimiter:'-',
      controller:'Product',
    }
});