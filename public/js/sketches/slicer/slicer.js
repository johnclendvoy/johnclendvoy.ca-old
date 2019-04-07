var start_image;
// var rows;

var index;
var work_rows;

var pixel;

var r_offset;
var l_offset;

var mid_width;
var mid_height;

var max;
var d;

function preload() {
	start_image = loadImage('/js/sketches/slicer/images/wallet_small.jpg');
}

function setup()
{
	frameRate(30);

	canvas_div = document.getElementById('slicer');

	grid_width = start_image.width;
	grid_height = start_image.height;

	// ensure even dimensions
	if(grid_width % 2 == 1) { grid_width -= 1; }
	if(grid_height % 2 == 1) { grid_height -= 1; }

	var canvas = createCanvas(grid_width*2, grid_height);
	print(width+'x'+ height);
	canvas.parent('slicer');

	background('#ff0000');
	image(start_image, 0, 0);

	// the midpoint 
	mid_width = width / 4;
	mid_height = height / 2;


	index = 0;
	r_offset = 0;
	l_offset = 0;
	work_rows = true;

	noStroke();
	d = pixelDensity();
}

function draw()
{
	if(work_rows)
	{
		max = height;
		mid = mid_height;
		// print(mid);
	}
	else
	{
		max = width/2;
		mid = width + mid_width;
	}

	if(index <= max)
	{
		if(isEven(index))
		{
			dest = r_offset + mid;
			r_offset++;
		}
		else
		{
			dest = l_offset;
			l_offset++;
		}

		if(work_rows)
		{
			// print('placing '+ dest);
			loadPixels();
			for (var row = 0; row < height; row++)
			{
				// get value from image buffer
				// p = start_image.get(row, index);
				var off = (index * width + row) * d * 4;
				var p = [ pixels[off], pixels[off + 1], pixels[off + 2], pixels[off + 3] ];


				//save pixel to new location in canvas
				// set(row, dest, pixel);
				for (var i = 0; i < d; i++) {
				  	for (var j = 0; j < d; j++) {
					    // loop over
					    idx = getPixelId(row+(width/2),dest,i,j);
					    pixels[idx] = p[0];
					    pixels[idx+1] = p[1];
					    pixels[idx+2] = p[2];
					    pixels[idx+3] = p[3];
				  	}
				}
				// fill(pixel);
				// rect(row, dest, 1,1);
			}
			updatePixels();
		}
		else
		{
			loadPixels();
			for (var col = 0; col < width/2; col++)
			{
				var off = (col * width + index) * d * 4;
				var p = [ pixels[off], pixels[off + 1], pixels[off + 2], pixels[off + 3] ];

				for (var i = 0; i < d; i++) {
				  	for (var j = 0; j < d; j++) {
					    // loop over
					    idx = getPixelId(dest+(width/2),col,i,j);
					    pixels[idx] = p[0];
					    pixels[idx+1] = p[1];
					    pixels[idx+2] = p[2];
					    pixels[idx+3] = p[3];
				  	}
				}
			}
			updatePixels();
		}
		index++
	}
	else
	{
		print('resetting');
		index = 0;
		l_offset = 0;
		r_offset = 0;
		work_rows = !work_rows;

		// move image on right to replace original
		var new_image = get(width/2, 0, width/2, height);
		set(0,0,new_image);
		updatePixels();
	}
}


function getPixelId(x, y, i, j)
{
	return 4 * ((y * d + j) * width * d + (x * d + i));
}

function isEven($n)
{
	return $n % 2 == 0;
}


