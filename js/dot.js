class Dot { 
  constructor(x, y) {
    this.x = x;
	this.y = y;
	this.lookatX = Math.floor(Math.random() * 6) - 3;
	this.lookatY = Math.floor(Math.random() * 3) + 1;
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