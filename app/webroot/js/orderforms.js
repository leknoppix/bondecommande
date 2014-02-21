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
});