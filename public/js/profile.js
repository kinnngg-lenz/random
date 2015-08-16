var button_click = [false,false,false];


    
    

function edit() {

var e = document.createElement("container");
//e.className= "input-group";
e.id= "xyz";


//e.appendChild(f);
document.getElementById("content_1").appendChild(e);
document.getElementById("xyz").innerHTML="<div class=\"input-group\">\n\t<span class=\"input-group-addon\" id=\"basic-addon1\">@</span>						  <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-describedby=\"basic-addon1\"></div>"

document.getElementById("profile_button").innerHTML = "Save";

if(button_click[0] == true){
	button_click[0] = false;
	document.getElementById("profile_button").innerHTML = "Edit";
	var myNode = document.getElementById("content_1");
	while (myNode.firstChild) {
    myNode.removeChild(myNode.firstChild);
}
	}
else{ button_click[0] =true;
document.getElementById("profile_button").innerHTML = "Save";


}
	

}
function tog()
{ 	if(button_click[0]==false)
	{document.getElementById("tb").style.display="none";
	 button_click[0]=true;
	 document.getElementById("profile_button").innerHTML = "Save";
	 }
	else{document.getElementById("tb").style.display="block";
		document.getElementById("profile_button").innerHTML = "Edit";
		button_click[0]=false;
	}
}
