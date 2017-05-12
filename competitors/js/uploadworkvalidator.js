/**
 * Copyright (c) 2010 Sebastian Häni
 */

var Uploadwork = {
	validate : function(){
		var name = document.getElementById("name").value;
		var description = document.getElementById("description").value;
		var file = document.getElementById("picture").value;
		
		var messages = "";
		
		if(name.length < 3){
			messages += "<li>The name is too short. Please write a longer one.</li>";
		}
		
		if(name.length > 20){
			messages += "<li>The name is too long. Please write a shorter one.</li>";
		}
		
		if(description.length > 300){
			messages += "<li>The description is too long. Please write a shorter one.</li>";
		}
		
		// validating file extension
		var dotpos = file.lastIndexOf(".");
		var ext = file.substr(dotpos+1,file.length);
		
		if(file == null || file.length == 0){
			messages += "<li>A picture is required.</li>";
		} else if(!(ext == "jpg" || ext == "png" || ext == "gif")){
			messages += "<li>The file extension '."+ext+"' is not allowed.</li>";
		}
		
		if(messages == ""){
			document.forms.uploadwork.submit();
		} else {
			var errorMessage = "The following errors occured. Please correct them and try again.<ul>"+messages+"</ul>";
			document.getElementById("formerrormessages").innerHTML = errorMessage;
		}
	}
};