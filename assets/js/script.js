function timer(duration, display)
{
	var timer = duration, hours, minutes, seconds;
	setInterval(function () {
		if (timer > 0) {
			hours = parseInt((timer / 3600) % 24, 10)
			minutes = parseInt((timer / 60) % 60, 10)
			seconds = parseInt(timer % 60, 10);

			hours = hours < 10 ? "0" + hours : hours;
			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;

			display.innerText = hours + ":" + minutes + ":" + seconds;

			--timer;
		}
	}, 1000);
}

function showBirthdayModal(classname) {
	let modal = document.querySelector(classname);
	modal.style.display = 'flex';
}

document.addEventListener('DOMContentLoaded', function (){
	let display = document.getElementById('timer');

	if (display) {
		let duration = parseInt(display.dataset.starttimer);
		// console.log(duration);
		if (duration > 0)
			timer(duration, display);
	}
});


