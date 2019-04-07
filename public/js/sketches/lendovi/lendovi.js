/*var colors = [
	// bottom layer first
	'#7c1600',
	'#ff4401',
	'#fe7c00',
	'#feda00',
	'#d8d487'
];
*/

var grid_width;
var grid_height;

var myFont;

function preload()
{
  myFont = loadFont('/fonts/Segoe-UI-Bold.ttf');
}

function setup()
{
	// offset_x = 10;
	// offset_y = 10;

	print(offset_x);
	print(offset_y);

	canvas_div = document.getElementById('lendovi');
	var w = canvas_div.innerWidth;

	grid_width = canvas_div.offsetWidth;
	grid_height = windowHeight-100;

	var canvas = createCanvas(grid_width, grid_height);
	canvas.parent('lendovi');

	background(bg_color);

	print('cnter');
	print(center_x);
	print(center_y);


	if(!center_x)
	{
		center_x = grid_width/2;
	}
	if(!center_y)
	{
		center_y = grid_height/2;
	}

	print('cnterafter');
	print(center_x);
	print(center_y);

	num_colors = colors.length;

	start_x = center_x - (num_colors * offset_x);
	start_y = center_y 	+ (num_colors * offset_y);

	textFont(myFont);
	textSize(font_size);
	textAlign(CENTER);
	for(var i = 0; i < num_colors; i++)
	{
		print(colors[i]);

		fill(colors[i]);
		var x = start_x + (i * offset_x);
		var y = start_y - (i * offset_y);

		text(word, x, y);
	}
}

function draw()
{
}

