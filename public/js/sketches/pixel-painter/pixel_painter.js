"use strict";

//GLOBAL VARIABLES
var CANVAS_WIDTH = 500;
var CANVAS_HEIGHT = 500;
var img;
var cell_size = 10;

var cells;

function preload(){
	// create the 2d array
	cells = new Array;
	for( var i = 0; i < CANVAS_WIDTH; i++) {
		cells[i] = new Array;	
	}

	img = loadImage("js/sketches/pixel-painter/images/me.jpg"); 
}
/*
* Initialize variables.
*/
function setup() 
{
	

	// create the canvas
	var canvas = createCanvas(CANVAS_WIDTH, CANVAS_WIDTH);
	canvas.parent('canvas-div');
	noLoop();

	image(img, 0,0, CANVAS_WIDTH, CANVAS_HEIGHT);

	// loop over to find colors
	for (var i = 0; i < CANVAS_WIDTH; i = i + cell_size)
	{
		for( var j = 0; j < CANVAS_HEIGHT; j = j + cell_size)
		{
			// find average color of this area
			var sum_r = 0;
			var sum_g = 0; 
			var sum_b = 0; 
			for(var k = 0; k < cell_size; k++)
			{
				for(var l = 0; l < cell_size; l++)
				{
					var c = get(i+1, j+1);
					sum_r += red(c);
					sum_g += green(c);
					sum_b += blue(c);
				}
			}
			

			var color = color(sum_r/100, sum_g/100, sum_b/100);
			// var c = get(i+1, j+1);
  			cells[i][j] = color;
		} // end for height
	} // end for width
	print('--found colors')

	// loop over to find colors
	for (var i = 0; i < CANVAS_WIDTH; i = i + cell_size)
	{
		for( var j = 0; j < CANVAS_HEIGHT; j = j + cell_size)
		{
  			fill(cells[i][j]);
			rect(i, j, cell_size, cell_size);
		}
	}

	print('--drew cells')




	print('done');
}


