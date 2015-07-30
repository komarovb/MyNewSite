$(function(){
	var app={

		inizialization:function(){
			app.loading();
		},
		LoadProjects:function(){
				var foldfile = "info/projects.json",
				    names=[],
				    urls=[],
				    descriptions=[],
				    images=[],
				    size;

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
							app.newSite(names[i],urls[i],descriptions[i],images[i]);
						}
					});
				return true;
		},
		setUpListeners1:function(){
			$("#newSite").on('click',app.ModalShow);
			$("#close-but").on('click',app.ModalClose);
			$("#download").on('click',app.addNewSite);
		},
		setUpListeners2:function(){
			$("#clearbut").on('click',app.ClearForm);
			$("#sbut").on('click',app.ContactMe);
			$(".foot-img").on("mouseover",unlock);
			$(".foot-img").on("mouseout",lock);
		},
		setUpListeners:function(){
			$("#login").on('click',app.Login);
		},
		loading:function(){
			app.menuSeparator();
		},
		menuSeparator:function(){
			var str = document.URL;

			if(str==="http://komarovb.ru/projects.php"||str==="http://www.komarovb.ru/projects.php"||str==="http://192.168.0.17/projects.php")
			{
				$('#NewProj')[0].reset();
				var act = $(".active"),
					proj = $("#proj");

				act.removeClass("active");
				proj.addClass("active");
				proj.css({"border-top-radius":"0px"});

				$(".top-l").css({"display":"none"});
				$(".bot-l").css({"display":"none"});

				
				app.setUpListeners1();
				if(app.LoadProjects()){
				$.ajax({
				url:'php/isLog.php',
				type:'POST'
			})
			.done(function(msg){
				if(msg!="OK"){
					$("#newSite").css({"display":"none"});
					$(".foot-img").on("mouseover",unlock);
					$(".foot-img").on("mouseout",lock);

				}
				else{
					$(".foot-img").attr("src","img/lock3.png");
				}
			});
			}
			}
			if(str==="http://komarovb.ru/contact.php"||str==="http://www.komarovb.ru/contact.php"||str==="http://192.168.0.17/contact.php")
			{
				$('#cont-form')[0].reset();
				var act = $(".active"),
					cont = $("#cont");

				act.removeClass("active");
				cont.addClass("active");
				cont.css({"border-top-radius":"0px"});

				$(".top-l").css({"display":"block"});
				$(".bot-l").css({"display":"none"});

				app.setUpListeners2();
			}
			else{
				app.setUpListeners();
				$(".foot-img").on("mouseover",unlock);
				$(".foot-img").on("mouseout",lock);
			}
		},
		newSite:function(SiteName,siteURL,siteDesc,ImgName){

			var counter,
				idLastSingle,
				idLastCollection,
				single,
				collection;

			var newSingleCollection = $("<div class='single-site'></div>"),
				IMG = $("<div class='site-img'></div>"),
				HOVER = $("<div class='hover-bg'></div>"),
				siteNameContent = $("<div class='sitename-cont'></div>"),
				SN = $("<div class='sitename'>"+SiteName+"</div>"),
				URL = $("<span class='site-url'>"+siteURL+"</span><br>"),
				DESCRIPTION = $("<span class='site-desc'>"+siteDesc+"</span>"),
				newCollection = $("<div class='collection'></div>"),
				newSiteButt = $("<div class='site-img' id='newSite'></div>"),
				LINK = $("<a href=http://"+siteURL+"></a>");

			single=$(".single-site:last");
			collection=$(".collection:last");


			$("#newSite").remove();

			idLastSingle=parseInt(single.attr("id").substring(1,100),10);	
			idLastCollection=parseInt(collection.attr("id").substring(4,100),10);
			counter=idLastSingle;


			IMG.attr("id","simg"+counter);
			SN.attr("id","name"+counter);
			URL.attr("id","url"+counter);
			DESCRIPTION.attr("id","desc"+counter);

			newCollection.attr("id","col-"+(idLastCollection+1));

			var bgPath = "files/"+ImgName;
			IMG.css({"background":"url("+bgPath+")",
					 "background-repeat":"no-repeat",
					 "background-size":"cover"});


			counter++;
			newSingleCollection.attr("id","s"+counter);

			siteNameContent.append(SN);
			HOVER.append(siteNameContent);
			IMG.append(HOVER);
			LINK.append(URL);
			single.append(IMG);
			single.append(LINK);
			single.append(DESCRIPTION);

			newSingleCollection.append(newSiteButt);



			$("#col-"+idLastCollection).append(single);
	
			if((idLastSingle%3)===0){
				$(".block").append(newCollection);
				newCollection.append(newSingleCollection);
			}
			else{
				collection.append(newSingleCollection);
			}

			$('#NewProj')[0].reset();
			app.setUpListeners1();

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
		},
		ClearForm:function(){
			$('#cont-form')[0].reset();
		},
		addNewSite:function(){
			var form = $("#NewProj"),
				str;
 
			str=form.serialize();

			if(!app.formValidation(form)){
				return false;
			}
			var SiteName =$("#name").val(),
				siteURL = $("#url").val(),
				siteDesc = $("#desc").val(),
				ImgName=$("#img-name").val();

			app.newSite(SiteName,siteURL,siteDesc,ImgName);

			$.ajax({
				url:'php/newproj.php',
				type:'POST',
				data:str

			})
			.done(function(msg){
				});
		},
		ContactMe:function(){

			var form=$("#cont-form"),
				str = form.serialize();

			if(!app.formValidation(form)){
				return false;
			}
			app.captchaCheck(form);
            if($(".cont-success").text()==="Неправильно введен код!")
			{
				return false;
			}

			$("#sbut").attr("disabled","disabled");
			$.ajax({
				url:'php/maill.php',
				type:'POST',
				data:str

			})
			.done(function(msg){
				$("#sbut").removeAttr("disabled");
				alert("Success");
			});
		},
		formValidation:function(form){

			var inputs = form.find('input'),
				valid=true;

			$.each(inputs,function(index, val){
				var input = $(val),
					val = input.val();
				input.removeClass("valid-error");

				if(val.length===0){
					input.addClass("valid-error");
					valid=false;
				}
				});
			if(form.attr("id")==="cont-form"){
				app.captchaCheck(form);
              if($(".cont-success").text()==="Неправильно введен код!")
				{
					return false;
				}
			}

			return valid;	
		},
		captchaCheck:function(form){
			var str=form.serialize(),
				str2="WRONG";
			$(".cont-success").remove();
			$.ajax({
				url:'php/valid.php',
				type:'POST',
				data:str

			})
			.done(function(msg){
				if(msg==="OK"){
					str2=msg;
				}else{
					var result = $("<div class='cont-success'>Неправильно введен код!</div>");
					form.append(result);
				}
			});
			if(str2==="OK")
			{
				return true;
			}
			return false;
		},
		formSub:function(){
			$("#NewProj").submit();
		},
		Login:function(){
			var form=$("#AdminForm"),
				str;
			str=form.serialize();
			$(".cont-success").remove();
			app.formValidation(form);
			$.ajax({
				url:'php/login.php',
				type:'POST',
				data:str

			})
			.done(function(msg){
				if(msg==="OK"){
					location.href = 'projects.php'
				}else{
					var result = $("<div class='cont-success'>Неправильные данные!</div>");
					form.append(result);
				}
			});

		}
	}
	app.inizialization();
}); 

function unlock(){
	$(this).attr("src","img/lock3.png");
}
function lock(){
	$(this).attr("src","img/login.png");
}