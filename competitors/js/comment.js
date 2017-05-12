/**
 * Copyright (c) 2010 Sebastian Häni
 */

var Comment = {

	errorMessages : "",
	scroll : false,

	submit : function() {
		var name = document.getElementById("name").value;
		var email = document.getElementById("email").value;
		var message = document.getElementById("message").value;

		if (Comment.isValid(name, email, message)) {
			Ajax.request("competitors/php/saveComment.php?idWork="
					+ Competitors.id + "&name=" + name + "&email=" + email
					+ "&message=" + message, Comment.finalize);
		} else {
			var message = "The following errors occured. Please correct them and try again.<ul>"
				+ Comment.errorMessages + "</ul>";
			document.getElementById("formerrormessages").innerHTML = message;
		}
	},

	isValid : function(name, email, message) {
		var errorMessages = "";

		if (name.length < 3) {
			errorMessages += "<li>This name is too short. Please write a longer one.";
		}
		if (name.length > 20) {
			errorMessages += "<li>This name is too long. Please write a shorter one.</li>";
		}

		if (!Comment.isValidEmail(email)) {
			errorMessages += "<li>This e-mail is not valid. Please check it and try again.</li>";
		}

		if (message.length < 20) {
			errorMessages += "<li>This message is too short. Please write a longer one.";
		}

		if (message.length > 300) {
			errorMessages += "<li>This message is too long. Please write a shorter one.</li>";
		}

		if (errorMessages == "") {
			return true;
		}

		Comment.errorMessages = errorMessages;
		return false;
	},

	finalize : function(responseText) {
		if (responseText == "") {
			document.getElementById("commentformcontainer").innerHTML = "";
			Comment.scroll = true;
			Comment.loadComments();
		} else {
			// errors
			alert("debug output: " + responseText);
		}
	},

	loadComments : function() {
		Ajax.request("competitors/php/showComments.php?idWork="
				+ Competitors.id, function(responseText) {
			document.getElementById("commententries").innerHTML = responseText;
			if(Comment.scroll){
				window.scrollY = window.scrollMaxY;
				Comment.scroll = false;
			}
		});
	},
	
	isValidEmail : function(email){
		// simple email regex, does not validate all emails, but 99%
		if(email.match(/^[a-zA-Z0-9.-_]+@[a-z-]+\.[a-z]{1,3}/)){
			return true;
		}
		return false;
	}

};