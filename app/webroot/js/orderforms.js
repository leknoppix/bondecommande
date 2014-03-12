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
    init:'0',
    nbrincrem:'0',
    classclone:'body',
    delimiter:'-',
    controller:'Product',
  }
  $('.addproduct').click(function()
  {
    $(this).clonage(options);
  });
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
});