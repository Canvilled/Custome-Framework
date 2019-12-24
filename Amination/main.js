// Fade amination
         // in meaning open
         // out meaning close
function fade(frame, time, option,idTag) {
	var modal = document.getElementById(idTag);
        if (option === "in") {
            modal.style.display = "block";
            var pos = 0;
            var id = setInterval(effect, frame);

            function effect() {
                if (pos == time) {
                    clearInterval(id);
                } else {
                    pos++;
                    modal.style.opacity = pos / time;
                }
            }
        } else if (option === "out") {
            var pos = time;
            var id = setInterval(effect, frame);

            function effect() {
                if (pos == 0) {
                    clearInterval(id);
                    modal.style.display = "none";
                } else {
                    pos--;
                    modal.style.opacity = pos / time;
                }
            }
        }
    }