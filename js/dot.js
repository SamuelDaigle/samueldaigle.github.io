class Dot { 
  constructor(x, y) {
    this.x = x;
	this.y = y;
	this.minX =  x - 5;
	this.maxX = x + 5;
	this.direction = 1;
  }
  
  draw(ctx) {
    this.x += this.direction;
	this.y -= this.lookatY;
	
	if (this.x > this.maxX)
	{
		this.direction = -1;
	}
	else if (this.x < this.minX)
	{
		this.direction = 1;
	}
	
	ctx.fillStyle = "rgba(30, 144, 255, 1)";
	ctx.beginPath();
	ctx.arc(this.x, this.y, 10, 0, Math.PI * 2, true);
	ctx.fill();
  }  
}