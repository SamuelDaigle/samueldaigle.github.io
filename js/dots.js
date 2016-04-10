function DrawDots(nbX, spacing, randomMin, randomMax)
{
	var canvas = document.getElementById("dotscanvas");
	canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
			
    if (canvas.getContext) {
        var ctx = canvas.getContext("2d");
		
		ctx.clearRect(0,0,canvas.width, canvas.height);
		
		for	(x = 0; x < nbX; x++)
		{
			for (y = 0; y < randomMin; y++)
			{
				ctx.fillStyle = "rgba(30, 144, 255, 0.25)";
				ctx.beginPath();
				ctx.arc(spacing * x, spacing * y, 10, 0, Math.PI * 2, true);
				ctx.fill();
			}
		}
    }
	
	var loopTimer = setTimeout('draw('+nbX+','+spacing+','+randomMin+','+randomMax+')', 20);
}