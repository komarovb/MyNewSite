$(document).ready(function() {
	var app = {
		initialize:function(){
			app.setUpListeners();
		},
		setUpListeners:function(){
			$(".new-proj").on('click',app.ModalShow);
			$("#close-but").on('click',app.ModalClose);
			$("#sbut").on('click',function(){
				$("#sbut").attr('disabled','disabled');
				$("#clearbut").attr('disabled','disabled');
				app.proceed("#cont-form");
			});
			$("#download").on('click',function(){
				app.proceed("#NewProj");
			});
			$("#enter").on('click',function(e){
				app.proceed("#adf");
			});
		},
		setUpListeners2:function(){
			$('form').on('keydown', '.has-error', app.removeError);
	      	$('form').on('reset', app.clearForm);
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
			$("#NewProj").trigger('reset');
			$("#popup_name").fadeOut(1000);
			bg.fadeOut('fast');
			bg.remove();
			//app.setUpListeners();
		},
		Validation:function(formID)
		{
			var form = $(formID);
	      	var elements = form.find('input, textarea').not('input[type="file"], input[type="hidden"]'),
	          valid = true;

	      $.each(elements, function(index, val) {
	        var element = $(val),
	            val = element.val(),
	            pos = element.attr('qtip-position');

	        if(val.length === 0){
	          element.addClass('has-error');
	          app.createQtip(element, pos);
	          valid = false;
	        }
	      }); 
	      app.setUpListeners2();
	      return valid;
	  },
	  	createQtip:function(element,position){
	      if (position === 'right') {
	        position = {
	          my: 'left center',
	          at: 'right center'
	        }
	      }else{
	        position = {
	          my: 'right center',
	          at: 'left center',
	          adjust: {
	            method: 'shift none'
	          }
	        }
	      }
	      element.qtip({
	        content: {
	          text: function() {
	            return $(this).attr('qtip-content');
	          }
	        },
	        show: {
	          event: 'show'
	        },
	        hide: {
	          event: 'keydown hideTooltip'
	        },
	        position: position,
	        style: {
	          classes: 'qtip-mystyle qtip-rounded',
	          tip: {
	            height: 10,
	            width: 16
	          }
	        }
	      }).trigger('show');
	  },
	  clearForm:function(){
	  	var form = $(this);
	  	//form.find('.input, .textarea').trigger('hideTooltip');
	  	var elements = form.find('input, textarea').not('input[type="file"], input[type="hidden"]');
	  	$.each(elements, function(index, val) {
	        var element = $(val);
	        element.trigger('hideTooltip')
	      }); 
	    form.find('.has-error').removeClass('has-error'); 
	    form.find('.error-mes, success-mes').text('').hide(); 
	  },
	  removeError:function(){
	  	$(this).removeClass('has-error');
	  },
	  createProject:function(formID){
	  	var form = $(formID);
	  	if(formID==="#cont-form")
	  	{
	  		app.sendMSG(formID);
	  	}
	  	else{
	  		form.submit();
	  	}
	  },
	  proceed:function(formName){
			if(app.Validation(formName)){
				app.createProject(formName);
			}
			else{
				$("#sbut").removeAttr('disabled');
	  			$("#clearbut").removeAttr('disabled');
			}
	  },
	  sendMSG:function(formID)
	  {
	  	var form = $(formID),
	  		str = form.serialize();
	  	$.ajax({
	  		url: 'php/sendMSG.php',
	  		type: 'POST',
	  		data: str,
	  	})
	  	.success(function(data) {
	  		if(data==="OK"){
	  			alert("Your message will be delivered as soon as possible!");
	  			$("#clearbut").click();
	  		}
	  		else{
	  			alert("There was some error, please try again later!");
	  			console.log(data);
	  		}
	  		$("#sbut").removeAttr('disabled');
	  		$("#clearbut").removeAttr('disabled');
	  	});
	  	
	  }
	};
	app.initialize();
});