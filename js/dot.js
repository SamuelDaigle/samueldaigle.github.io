class Dot { 
  constructor(x, y) {
    this.x = x;
	this.y = y;
  }
  
  draw() {
    this.x += 1;
	this.y -= 1;
	
	ctx.fillStyle = "rgba(30, 144, 255, " + 0.25 / this.y + ")";
	ctx.beginPath();
	ctx.arc(spacing * this.x, canvas.height - spacing * this.y - 5, 10, 0, Math.PI * 2, true);
	ctx.fill();
  }  
}