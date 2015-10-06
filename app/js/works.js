$(document).ready(function() {
	var works = {
		loadProjects:function(){
	  	var foldfile = "projects.json",
				    names=[],
				    urls=[],
				    descriptions=[],
				    images=[],
				    size,
				    f_row=0,
				    counter=1;

		$.getJSON(foldfile)
			.done(function(data){
				size = data.projects.length;
				for(var i=0;i<size;i++){
					names[i]=data.projects[i].name;
					urls[i]=data.projects[i].url;
					descriptions[i]=data.projects[i].description;
					images[i]=data.projects[i].image;
				}
				for(var i=0;i<names.length;i++){
					if((i===0)||(counter===3))
					{
						f_row=1;
						counter=0;
					}
					works.newSite(names[i],urls[i],descriptions[i],images[i],f_row,i+1);
					counter++;
				}
				});
			works.IsAdmin();
			return true;
	  },
	  newSite:function(name,url,desc,img,f_row,i){
		var newSingleCollection = $("<div class='single-proj'></div>"),
			image = $("<div class='proj-img'></div>"),
			link = $("<a href=http://"+url+" target='_blank' class='site-url'>http://"+url+"</a>"),
			description = $("<p class='site-desc'>"+desc+"</p>")

		image.addClass('p'+i);	
		image.css({"background" : "url('img/"+img+"')",
			"background-size" : "cover"
		});
		if(f_row===1)
			newSingleCollection.addClass('f-in-row');

		newSingleCollection.append(image);
		newSingleCollection.append(link);
		newSingleCollection.append(description);
		$(".block-body").append(newSingleCollection);
	  },
	  IsAdmin:function(){
	  	$.ajax({
	  		url: 'php/loginCheck.php',
	  		type: 'POST',
	  	})
	  	.success(function(data) {
	  		if(data==="OK")
	  		{
	  			works.addEmpty();
	  			$(".new-proj").on('click',works.ModalShow);
	  		}

	  	});
	  },
	  addEmpty:function()
	  {
	  	var wrap = $("<div class='single-proj'></div>"),
	  		inside = $("<div class='proj-img new-proj'></div>");
	  	wrap.append(inside);
	  	$(".block-body").append(wrap);
	  },ModalShow:function(){
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
			$('#fade').on('click',works.ModalClose);
		},
		ModalClose:function(){
			var bg = $('#fade');
			$("#NewProj").trigger('reset');
			$("#popup_name").fadeOut(1000);
			bg.fadeOut('fast');
			bg.remove();
			//app.setUpListeners();
		}
	};
	works.loadProjects();
});