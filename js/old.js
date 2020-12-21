$(document).ready(function() {
	
		$("ul#nav li.search a").click(function(){
			$("input#s").focus();

			$("#searchdiv").toggle();
			$("#archivesdiv").hide();
		});
		$("ul#nav li.archives").click(function(){
			$("#archivesdiv").toggle();
			$("#searchdiv").hide();
		});
	
});