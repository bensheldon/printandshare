$(document).ready(function() {
	$("#ProposalPulltabDescription").keyup(function() {
		var title = $(this).val();
		$('.preview').contents().find('.pulltabDescription').html(title);
		return false;
	});
	
	$("#ProposalPulltabShort").keyup(function() {
		var title = $(this).val();
		$('.preview').contents().find('.printTitle').html(title);
		return false;
	});


	$("#ProposalFourupDescription").keyup(function() {
		var title = $(this).val();
		$('.preview').contents().find('.fourupDescription').html(title);
		return false;
	});

	$("#choose-pulltab").click(function(event) {
		event.preventDefault();
		$('#edit-pulltab').show();
		$('#edit-fourup').hide();
	});


	$("#choose-fourup").click(function(event) {
		event.preventDefault();
		$('#edit-fourup').show();
		$('#edit-pulltab').hide();
	});

});