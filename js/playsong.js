function playSong(songToPlay, id){
	document.getElementById(songToPlay);

	// Si le son est en pause
	if (songToPlay.paused){
		songToPlay.play();
		// Le bouton se change en pause.
		$("#"+id+">i").text("pause");

		// Calcul le temps su ons pour transformer le btn une fois celui-ci fini.
		var duration = songToPlay.duration;
		setTimeout(function(){
			$("#"+id+">i").text("play_arrow");
		}, duration*1000);
	}

	// Si le son est en cours de lecture
	else{
		songToPlay.pause();
		songToPlay.currentTime = 0;
		var js = "#"+id+">i";
		$("#"+id+">i").text("play_arrow");
	}
}