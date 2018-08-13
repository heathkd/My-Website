//custom javascript goes here
$(document).foundation();
console.log("is this working?")

function changeColour() {
	var currentColour = document.getElementById("my-button").style.background;
	var newColour;
	console.log(currentColour);
	if (currentColour === "red") {
		newColour = "black";
	}
	else {
		newColour = "red"
	}
	console.log(newColour);
	document.getElementById("my-button").style.background = newColour;
}

function hide() {
	document.getElementsByClassName("button")[0].style.display = "none";
}

function  alertYourUser(arg) {
	var element = document.getElementById(arg);
	alert(`Hey! You just clicked the ${arg} button!`)
}

// $(document).ready(function(){
//     $('.button button').click(function() {	
//     	$('.button button').hide();	
// 	});	
// });
