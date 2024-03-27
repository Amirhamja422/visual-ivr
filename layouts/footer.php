<div class="footermenu">
	<div class="footermenu_icon">
		<img src="img/back.png"style="width:47px;" onclick="goBack()">
	</div>
	<div class="footermenu_icon">
		<img src="img/home.png" style="width:47px;" onclick="goHome()">
	</div>
	<div class="footermenu_icon" id="audio_btn">
		<img src="img/mute_final.png"style="width:47px;" onclick="unmute()">
		<!-- <img src="img/speker.png"style="width:47px;" onclick="pauseAudio()"> -->
	</div>
	<div class="footermenu_icon" onclick="goForward()">
		<img src="img/fron.png" style="width: 47px;" >
	</div>
	<div class="col-12" style="font-size:10px; margin-bottom: 10px; color: white;">
		<p>Powered by iHelpBD</p>
	</div>
</div>


<script type="text/javascript">
	$( document ).ready(function() {
		var audio_btn = document.getElementById("audio_btn");

		if (load_time === 0) {
			mute();
		}else{
			unmute();
		}
	});


	function mute(){
		load_time = 0;
		audio_btn.innerHTML = "<img src=\"img/mute_final.png\" style=\"width:47px;\" onclick=\"unmute()\">";
		var player = document.getElementById("player");
		player.pause();

	}

	function unmute(){
		load_time = load_time+1;
		audio_btn.innerHTML = "<img src=\"img/speker.png\" style=\"width:47px;\" onclick=\"mute()\">";
		var player = document.getElementById("player");
		player.play();
	}
</script>