$(document).ready(function() {
	var app = {
		initialize:function(){
			app.setUpListeners();
		},
		setUpListeners:function(){
			$(".new-proj").on('click',app.ModalShow);
			$("#close-but").on('click',app.ModalClose);
		},
		ModalShow:function(){
			var popID = $("#popup_name"); 
		
			popID.fadeIn();		
			var popMargTop = (popID.height() + 80) / 2;
			var popMargLeft = (popID.width() + 80) / 2;
 
		
			popID.css({ 
				'margin-top' : -popMargTop,
				'margin-left' : -popMargLeft
			});
		
			$('body').append('<div id="fade"></div>');
			$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

			$('#fade').on('click',app.ModalClose);
		},
		ModalClose:function(){
			var bg = $('#fade');

			$("#popup_name").fadeOut(1000);
			bg.fadeOut('fast');

			bg.remove();
			app.setUpListeners1();
		}
	};
	app.initialize();
});