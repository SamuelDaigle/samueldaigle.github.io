class Dot { 
  constructor(x, y) {
    this.x = x;
	this.y = y;
	this.lookatX = Math.floor(Math.random() * 2) - 1;
	this.lookatY = Math.abs(Math.floor(Math.random() * 2) - 0.5);
  }
  
  draw(ctx) {
    this.x += this.lookatX;
	this.y -= this.lookatY;
	
	ctx.fillStyle = "rgba(30, 144, 255, " + 0.25 + ")";
	ctx.beginPath();
	ctx.arc(this.x, this.y, 10, 0, Math.PI * 2, true);
	ctx.fill();
  }  
}