/**
 * Copyright (c) 2010 Sebastian Häni
 */

var Ajax = {

	request : function(url, callback) {
		var http = Ajax.createHttpObject();
		http.abort();
		http.open("GET", url, true);
		http.onreadystatechange = function() {
			if (http.readyState == 4) {
				callback(http.responseText);
			}
		};
		http.send(null);
	},

	createHttpObject : function() {
		var http = null;
		if (navigator.appName == "Microsoft Internet Explorer") {
			http = new ActiveXObject("Microsoft.XMLHTTP");
		} else {
			http = new XMLHttpRequest();
		}
		return http;
	}

};
