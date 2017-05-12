/**
 * Copyright (c) 2010 Sebastian Häni
 */

var Slideshow = {
		
	opacity : 1,
	provider : "competitors/php/slideshow.php",
	elementId : "slideshowpicturecontainer",
		
	start : function(){
		setTimeout("Slideshow.fadeOut()", 4000);
	},
	
	fadeIn : function(responseText){
		if(responseText != null){
			document.getElementById(Slideshow.elementId).innerHTML = responseText;
		}
		if(Slideshow.opacity < 1){
			Slideshow.opacity += 0.01;
			Slideshow.setOpacity();
			setTimeout("Slideshow.fadeIn()",10);
		} else {
			setTimeout("Slideshow.fadeOut()", 4000);
		}
	},
	
	fadeOut : function(){
		if(Slideshow.opacity > 0){
			Slideshow.opacity -= 0.01;
			Slideshow.setOpacity();
			setTimeout("Slideshow.fadeOut()",10);
		} else {
			Ajax.request(Slideshow.provider, Slideshow.fadeIn);
		}
	},
	
	setOpacity : function(){
		if(navigator.appName == "Microsoft Internet Explorer"){
			document.getElementById(Slideshow.elementId).style.filter = "alpha(opacity="+(Slideshow.opacity*100)+")";
		} else {
			document.getElementById(Slideshow.elementId).style.opacity = Slideshow.opacity;
		}
	}
	
};