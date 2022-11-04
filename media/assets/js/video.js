$(document).ready(function() {

	$("#playButton").click(function() {
		$("#video-header-wrap").addClass("play-video");
		getFullscreen(document.getElementById("video-header"));
		document.getElementById("video-header").play();
	});

	$("#video-header").bind('webkitfullscreenchange mozfullscreenchange fullscreenchange', function(e) {
	    
	    var state = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;

	    if (!state) {
	    	this.pause();
	    	$("#video-header-wrap").removeClass("play-video");
	    }
	});

	function getFullscreen(element){
      if(element.requestFullscreen) {
          element.requestFullscreen();
        } else if(element.mozRequestFullScreen) {
          element.mozRequestFullScreen();
        } else if(element.webkitRequestFullscreen) {
          element.webkitRequestFullscreen();
        } else if(element.msRequestFullscreen) {
          element.msRequestFullscreen();
        }
    }
})