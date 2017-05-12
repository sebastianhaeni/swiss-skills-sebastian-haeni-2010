/**
 * Copyright (c) 2010 Sebastian Häni
 */

var Competitors = {

	hash : null,
	action : null,
	id : null,

	startObserving : function() {
		setInterval("Competitors.checkHash()", 50);
	},

	checkHash : function() {
		if (window.location.hash != Competitors.hash) {
			var equalpos = window.location.hash.indexOf("=");
			Competitors.action = window.location.hash.substring(1, equalpos);
			Competitors.id = window.location.hash.substring(equalpos + 1,
					window.location.hash.length);
			Competitors.loadContent();
		}
		Competitors.hash = window.location.hash;
	},

	loadContent : function() {
		switch(Competitors.action){
		case "detail":
			Ajax.request("competitors/php/detail.php?id="+Competitors.id, function(responseText){
				document.getElementById('competitorscontent').innerHTML = responseText;
				Comment.loadComments();
			});
			break;
		default:
			Ajax.request("competitors/php/root.php", function(responseText){
				document.getElementById('competitorscontent').innerHTML = responseText;
			});
		}
	}
	
};