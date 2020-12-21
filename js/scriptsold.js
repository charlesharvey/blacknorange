	$(document).ready(function() {
		
		/*	$('.post  a').click(function(){
			
			var img = $(this).find("img");
			
			
			if(img) {$(this).fancybox();};
			
			
		
		
		
			
		});
		
			$(".flickrphoto img").each(function(){
		var $flickimg = $(this);
		var containerwidthheight = 140;
		var width = $flickimg.width();
		var height = $flickimg.height();
		var flickrchangewidth = (( containerwidthheight - width ) / 2);
		var flickrchangeheight  = ((containerwidthheight - height ) / 2);
		$flickimg.css({"left" : flickrchangewidth, "top" : flickrchangeheight  });

	});
		
		
		
			*/
		
		
					/*	
		$('.post  a').each(function(){
			var img = $(this).find("img");
			var thetitle = img.attr("title")
			if(img.length) {$(this).addClass("haspic").attr({"rel": "group1", "title": thetitle});};
		
		});

		
		$('.post  a.haspic').fancybox();


		
		$(".post a").mouseover(function(){
			$(this).parent().find(".excerpt").animate({"height" : 90});
		}).mouseout(function(){
			$(this).parent().find(".excerpt").animate({"height" : 0});

		});
		
		
		*/
		
		

	$("#ajax-contact-form").submit(function(){

		// 'this' refers to the current submitted form
		var str = $(this).serialize();

		$.ajax({
			type: "POST",
			url: "/wp-content/themes/charscicom/contactprocess.php",
			data: str,
			success: function(msg){

				$("#note").ajaxComplete(function(event, request, settings){

					if(msg == 'OK') {// Message Sent? Show the 'Thank You' message and hide the form
						result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
						$("#fields").hide();
					} else {
						result = msg;
					}

					$(this).html(result);

				});

			}

		});

	return false;

	});


	
	});
