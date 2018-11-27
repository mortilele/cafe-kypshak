(function() {
function gotoTop(fast, time) {
	fast = fast || 0.1;
	time = time || 12;

	var dx = 0;
	var dy = 0;
	var bx = 0;
	var by = 0;
	var wx = 0;
	var wy = 0;

	if (document.documentElement) {
		dx = document.documentElement.scrollLeft || 0;
		dy = document.documentElement.scrollTop || 0;
	}
	if (document.body) {
		bx = document.body.scrollLeft || 0;
		by = document.body.scrollTop || 0;
	}
	var wx = window.scrollX || 0;
	var wy = window.scrollY || 0;

	var x = Math.max(wx, Math.max(bx, dx));
	var y = Math.max(wy, Math.max(by, dy));

	var speed = 1 + fast;
	window.scrollTo(Math.floor(x / speed), Math.floor(y / speed));
	if(x > 0 || y > 0) {
		var invokeFunction = "top.gotoTop(" + fast + ", " + time + ")"
		window.setTimeout(invokeFunction, time);
	}
	return false;
}

function scrollTop(){
	var a = document.getElementById('gotoTop');
	
	if( ! a ){
		// если нет элемента добавляем его
		var a = document.createElement('a');
		a.id = "gotoTop";
		a.className = "scrollTop";
		a.href = "#";
		a.style.display = "none";
		a.style.position = "fixed";
		a.style.zIndex = "9999";
		a.onclick = function(e){ e.preventDefault(); window.top.gotoTop(); }
		document.body.appendChild(a);
	}
	
	var stop = (document.body.scrollTop || document.documentElement.scrollTop);
	if( stop > 3000 ){
		a.style.display = 'block';
		smoothopaque(a, 'show', 30);
	} else {
		smoothopaque(a, 'hide', 30, function(){a.style.display = 'none';});
	}

	return false;
}
window['top'].gotoTop = gotoTop;

})();