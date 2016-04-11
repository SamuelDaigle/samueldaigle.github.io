class Dot { 
  constructor(x, y) {
    this.x = x;
	this.y = y;
	this.minX =  x - 10;
	this.maxX = x + 10;
	this.direction = Math.floor((Math.random() * 2) - 1);
	this.alpha = 100;
  }
  
  draw(ctx) {
    this.x += this.direction;
	this.y -= 1;
	
	if (this.x > this.maxX)
	{
		this.direction = -1;
	}
	else if (this.x < this.minX)
	{
		this.direction = 1;
	}
	
	this.alpha -= 1;
	
	ctx.fillStyle = "rgba(30, 144, 255, " + this.alpha + ")";
	ctx.beginPath();
	ctx.arc(this.x, this.y, 10, 0, Math.PI * 2, true);
	ctx.fill();
  }  
}