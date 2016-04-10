class Dot { 
  constructor(x, y) {
    this.x = x;
	this.y = y;
  }
  
  function update() {
	  x += 1;
	  y -= 1;
  }
  
  function draw() {
    update();
	
	ctx.fillStyle = "rgba(30, 144, 255, " + 0.25 / y + ")";
	ctx.beginPath();
	ctx.arc(spacing * x, canvas.height - spacing * y - 5, 10, 0, Math.PI * 2, true);
	ctx.fill();
  }  
}