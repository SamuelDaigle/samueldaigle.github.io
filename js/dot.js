class Dot { 
  constructor(x, y) {
    this.x = x;
	this.y = y;
  }
  
  draw(ctx) {
    this.x += 1;
	this.y -= 1;
	
	ctx.fillStyle = "rgba(30, 144, 255, " + 0.25 / this.y + ")";
	ctx.beginPath();
	ctx.arc(this.x, canvas.height - this.y, 10, 0, Math.PI * 2, true);
	ctx.fill();
  }  
}