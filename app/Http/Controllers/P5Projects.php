<?php

namespace App\Http\Controllers;

trait P5Projects {

	public function gameOfLife() 
	{
		$links = [
			['site'=>'github', 'url'=>'https://github.com/johnclendvoy/PersonalWebsite/tree/master/public/js/sketches/game-of-life']
		];
		$animated_bg = false;

		return view('projects.live.game_of_life', compact('links', 'animated_bg'));
	}

	public function proceduralMountains() 
	{
		$links = [
			['site'=>'github', 'url'=>'https://github.com/johnclendvoy/PersonalWebsite/blob/master/public/js/sketches/procedural-mountains/procedural_mountains.js']
		];
		$animated_bg = false;

		return view('projects.live.procedural_mountains', compact('links', 'animated_bg'));
	}

	public function dailyButton() 
	{
		$links = [
			['site'=>'github', 'url'=>'https://github.com/johnclendvoy']
		];
		$animated_bg = false;
		$buttons = collect([
			1,2,3,4
		]);

		return view('projects.live.daily_button', compact('buttons', 'animated_bg', 'links'));
	}

	public function drawWithKinect()
	{
		$links = [
		];
		return view('projects.draw_with_kinect', compact('links'));
	}

}