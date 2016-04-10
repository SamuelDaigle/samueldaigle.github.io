function DrawDots(nbX, spacing, randomMin, randomMax)
{
	var canvas = document.getElementById('dotscanvas');
	var ctx = canvas.getContext('2d');
	ctx.save();
	ctx.clear();
	ctx.fillStyle = "dodgerblue";
	ctx.fillRect (10, 20, 50, 50);
	ctx.restore();
	var loopTimer = setTimeout('draw('+nbX+','+spacing+')', 20);
}