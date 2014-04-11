

// ***** CUFON REPLACEMENTS *******
Cufon.replace('h1',{fontFamily: "ModenoLX"});
Cufon.replace('h3',{fontFamily: "ModenoLX"});
Cufon.replace('h1.resume',{fontFamily: "Delicious"});
Cufon.replace('h3.resume',{fontFamily: "Delicious"});
Cufon.replace('.nav',{fontFamily: "ModenoLX"});
Cufon.replace('.logspan',{fontFamily: "ModenoLX"});

// ***** JQUERY SEGMENT STARTED *****
$(function(){
	
	// Variables Needed in Javascript
	pathArray =  window.location.pathname.split( '/' );
	matchTo = pathArray[2];
	if(pathArray[2] == "index.php")
	{
		matchTo = pathArray[3];
	}
	
	// **************************************************
	// Sets the Active LOGO ( This is for the LOGO Type )
	$(".logo_box li").each(function(){
		if($(this).attr('class') == matchTo)
		{		
			$(this).fadeIn(1500);
		}
	});
	
	// **************************************************
	// Sets the Active Page ( This is for the Navigation )
	$(".nav_box li").each(function(){
		
		$('a', this).removeClass('active');
		if($(this).attr('class') == matchTo)
		{
			$('a', this).addClass('active');
		}
		
	});
	
	if(matchTo == null || matchTo == "")
	{
		$(".logo_box li:first").show();
		$(".nav_box a:first").addClass('active');
	}
        
        // **************************************************
        // Animate Text in Photography
        $("#photoWrap img").hover(function(){
            var title = $(this).parent().attr('title');
            var caption = $(this).parent().find('.caption').text();
            
            $("#photoData h3").text(title);
            $("#photoData p").text(caption);
        }, function(){
            
        });
        
        $("#photoWrap").hover(function(){}, function(){
            $("#photoData h3").text('');
            $("#photoData p").text('Hover over an image to the right to find out more information about it. Click on the image to view a larger sized image.');
        });
	
	// **************************************************
	// Fixes any IE Bug
	if($.browser.msie)
	{
		$(".logo_box h1").css({
			"position":"relative",
			"left":"-75px",
			"margin":"-15px"
		});
		
		$(".logo_box img").css({
			"position":"relative",
			"margin-left":"30px"
		});
		
		// Resume Top Section
		$(".r_person").css({"margin":"10px 20px"});
		$(".r_person h3").css({"margin-top":"20px"});
		$(".r_info").css({"position":"relative", "margin":"-20px", "padding-bottom":"30px"});
		
		// Work - Portfolio Page
		$(".winfo_wrap").css({"float":"none"});
		$(".w_item").css({"width":"auto", "float":"none"});
		$(".w_item .winfo_wrap").css({"background":"transparent"});
		$(".w_item .w_link").css({"text-align":"left", "margin":"5px 10px"});
	}
	
	// Cool Animation For Resume
	if (!$.browser.msie) {
		$(".w_item .winfo_wrap").hover(function(){
			$(this).stop().animate({
				"opacity": "1"
			}, 750);
		}, function(){
			$(this).stop().animate({
				"opacity": "0"
			}, 300);
		});
		
	}
});
