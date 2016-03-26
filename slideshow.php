<section>
			<div id="slideshow">
				<h1>Featured Projets</h1>
				<a href="javascript:gotoshow()"><img src="img/Engine Design.png" name="slide1" border=5 width=420 height=220 class="slide"></a>
				<a href="javascript:gotoshow()"><img src="img/Engine Design.png" name="slide2" border=5 width=420 height=220 class="slide"></a>
				<a href="javascript:gotoshow()"><img src="img/Engine Design.png" name="slide3" border=5 width=420 height=220 class="slide"></a>
				<br>
				<canvas id="circle1" width="50" height="50"></canvas>
				<canvas id="circle2" width="50" height="50"></canvas>
				<canvas id="circle3" width="50" height="50"></canvas>
				<canvas id="circle4" width="50" height="50"></canvas>
				
				<script>
				<!--

				//configure the paths of the images, plus corresponding target links
				slideshowimages("img/Engine Design.png","img/MusicZ.png","img/WinterWar.png","img/squirreltown.png")
				slideshowlinks("http://food.epicurious.com/run/recipe/view?id=13285","http://food.epicurious.com/run/recipe/view?id=10092","http://food.epicurious.com/run/recipe/view?id=100975","http://food.epicurious.com/run/recipe/view?id=2876")

				//configure the speed of the slideshow, in miliseconds
				var slideshowspeed = 5000

				var currentlinkfirst = 0
				var currentimagefirst = 0
				var currentlinksecond = 1
				var currentimagesecond = 1
				var currentlinkthird = 2
				var currentimagethird = 2
				
				function slideit()
				{
					if (!document.images)
						return
					
					// Switch to next image
					if (currentimagefirst < slideimages.length - 1)
						currentimagefirst++
					else
						currentimagefirst=0
					if (currentimagesecond < slideimages.length - 1)
						currentimagesecond++
					else
						currentimagesecond=0
					if (currentimagethird < slideimages.length - 1)
						currentimagethird++
					else
						currentimagethird=0
						
					// Set the image
					document.images.slide1.src = slideimages[currentimagethird].src
					document.images.slide2.src = slideimages[currentimagesecond].src
					document.images.slide3.src = slideimages[currentimagefirst].src
					currentlinkfirst = currentimagefirst
					currentlinksecond = currentimagesecond
					currentlinkthird = currentimagethird
						
					// Update and draw the circles
					for (i = 0; i < slideimages.length; i++) 
					{ 
						var canvas = document.getElementById("circle" + (i+1));
						var context = canvas.getContext("2d");
						context.arc(10, 10, 10, 0, Math.PI * 2, false);
						context.fillStyle="gray";
						if (i == currentimagefirst)
						{
							context.fillStyle="DodgerBlue";
						}
						context.fill()
					}
					
					
					// Wait
					setTimeout("slideit()",slideshowspeed)
				}
				slideit()
				
				// Add hover listener for project previews.
				for (i = 1; i < slideimages.length + 1; i++) 
				{ 
					var canvas = document.getElementById("slide" + i);
					var previewcanvas = document.getElementById("projectpreview")
					var previewcontext = previewcanvas.getContext("2d");
					var img = new Image()
					
					canvas.addEventListener("mouseover",function()
					{
						draw(previewcontext,img,"Hello!");
					});
					
					canvas.addEventListener("mouseout",function()
					{
						draw(previewcontext,img);
					});
				}
				
				function draw(ctx,img,text)
				{
					ctx.clearRect(0,0,canvas.width,canvas.height);
					ctx.save();
					ctx.beginPath();
					ctx.moveTo(canvas.width / 2, 0);
					ctx.lineTo(canvas.width, canvas.height);            
					ctx.lineTo(0, canvas.height);
					ctx.closePath();                                          
					ctx.clip();                        
					ctx.drawImage(img,0,0);
					if(text){
						ctx.fillStyle = "#f30";
						ctx.fillRect(0,canvas.height-20,canvas.width,20);
						ctx.fillStyle = "black";
						ctx.font="14pt Verdana";
						var textWidth=ctx.measureText(text).width;
						ctx.fillText(text,(canvas.width-textWidth)/2,canvas.height-3);
					}
					ctx.restore();
				}

				//-->
				</script>
			</div>
		</section>