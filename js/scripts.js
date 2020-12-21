/*CLEARFIELD*/
	(function($){$.fn.clearField=function(s){s=jQuery.extend({blurClass:'clearFieldBlurred',activeClass:'clearFieldActive',attribute:'rel',value:''},s);return $(this).each(function(){var el=$(this);s.value=el.val();if(el.attr(s.attribute)==undefined){el.attr(s.attribute,el.val()).addClass(s.blurClass)}else{s.value=el.attr(s.attribute)}el.focus(function(){if(el.val()==el.attr(s.attribute)){el.val('').removeClass(s.blurClass).addClass(s.activeClass)}});el.blur(function(){if(el.val()==''){el.val(el.attr(s.attribute)).removeClass(s.activeClass).addClass(s.blurClass)}})})}})(jQuery);



$(document).ready(function() {
	
		$("ul#nav li.search a").click(function(){
			$("#searchdiv").slideToggle();
			$("input#s").focus();
		});
		
	
		$("#searchdiv input#s").clearField();
		
		
	
		



	$(window).scroll(function(){
		var	$body = $("body") , 
			$bgper = Math.round($(window).scrollTop() / $body.height() * -457);
			// height of image is 457	
		
		$("#wrapper").css({backgroundPosition: 'center ' + $bgper + 'px'});

	});
		

		
		
		





});