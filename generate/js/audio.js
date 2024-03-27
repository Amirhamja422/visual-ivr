function playAudio(){
	var player = document.getElementById("player");
	player.play();
}

function pauseAudio(){
	var player = document.getElementById("player");
	player.pause();
}

function setAudio(page){
	var action_page = page;	
	var audio = "audio/"+action_page+".mp3";
	var player = document.getElementById("player");
	player.setAttribute("src",audio);
}