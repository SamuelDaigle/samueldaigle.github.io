class Dot { 
  constructor(x, y) {
    this.x = x;
	this.y = y;
	this.lookatX = Math.floor(Math.random() * 11) - 5;
	this.lookatY = Math.floor(Math.random() * 11) - 5;
  }
  
  draw(ctx) {
    this.x +=  lookatX;
	this.y -= lookatY;
	
	ctx.fillStyle = "rgba(30, 144, 255, " + 0.25 + ")";
	ctx.beginPath();
	ctx.arc(this.x, this.y, 10, 0, Math.PI * 2, true);
	ctx.fill();
  }  
}