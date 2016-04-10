class Dot { 
  constructor(x, y) {
    this.x = x;
	this.y = y;
  }
  
  draw(ctx) {
    this.x += 1;
	this.y -= 1;
	
	ctx.fillStyle = "rgba(30, 144, 255, " + 0.25 + ")";
	ctx.beginPath();
	ctx.arc(this.x, this.y, 10, 0, Math.PI * 2, true);
	ctx.fill();
  }  
}