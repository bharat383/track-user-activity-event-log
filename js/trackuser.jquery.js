$(document).ready(function(){
	var TrackUserActivity = {

		CaptureScreen : function($event_name){
			if($("#image-canvas").length>0) {
				$("#image-canvas").height($('body').height());
				$("#image-canvas").width($('body').width());
				$('body').html2canvas({
					onrendered: function (canvas) {
		              var formdata = {
		              					event_name : $event_name,
		                              	image_code:canvas.toDataURL("image/png")
		                            };
		              //console.log(formdata);
		              $.post("ajax/trackuser.php", formdata, function(msg) {
		                console.log(msg);
		              });
					}
				});
			}		
		}
	}

	window.addEventListener("click", function(){TrackUserActivity.CaptureScreen('click')});
	window.addEventListener("dblclick", function(){TrackUserActivity.CaptureScreen('click')});
	window.addEventListener("submit", function(){TrackUserActivity.CaptureScreen('form-submit')});
	window.addEventListener("reset", function(){TrackUserActivity.CaptureScreen('form-clear')});
	window.addEventListener("copy", function(){TrackUserActivity.CaptureScreen('copy')});
	window.addEventListener("beforeprint", function(){TrackUserActivity.CaptureScreen('print')});
	window.addEventListener("contextmenu", function(){TrackUserActivity.CaptureScreen('right-click')});
});