class Dot { 
  constructor(x, y) {
    this.x = x;
	this.y = y;
	this.minX =  x - 10;
	this.maxX = x + 10;
	this.direction = Math.floor((Math.random() * 2) - 1);
	this.alpha = 30;
  }
  
  draw(ctx) {
	this.direction = Math.floor((Math.random() * 5) - 3);
	
    this.x += this.direction;
	this.y += 1;
	
	this.alpha -= 0.10;
	
	ctx.fillStyle = "rgba(30, 144, 255, " + this.alpha / 100 + ")";
	ctx.beginPath();
	ctx.arc(this.x, this.y, 10, 0, Math.PI * 2, true);
	ctx.fill();
  }  
}