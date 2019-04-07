<?php

namespace App\Http\Controllers;

use App\Word;
use App\WordPair;
use Illuminate\Http\Request;

class WordsController extends Controller
{
   	public function index()
   	{
   		$left = $this->getWord();
   		$right = $this->getWord();

   		$pairs = WordPair::all()->sortByDesc('votes');
   		return view('projects.live.words.index', compact('right', 'left', 'pairs'));
   	}

   	public function getWord()
   	{
   		return Word::get()->random();
   	}

   	public function store(Request $request)
   	{
   		$new_word = strtoupper($request->word);
   		if(empty(Word::withValue($new_word)))
   		{
	   		$word = Word::create(['word' => $new_word]);
   		}
   		return back();
   	}

   	public function pair(Request $request, Word $word, Word $right_word)
   	{
	   	$existing = WordPair::findWord($word, $right_word);
		if(empty($existing))
		{
			WordPair::create([
				'left_id' => $word->id,
				'right_id' => $right_word->id,
				'votes' => 1
			]);
		}
		else
		{
			$existing->update(['votes' => $existing->votes + 1]);
		}
		return back();
   	}

   	public function vote(Request $request, Word $word, $hand, Word $right_word = null)
   	{

   		$vote = -1;
   		if($request->vote == 'yes');
   		{
   			$vote = 1;
   		}

   		switch($hand)
   		{
   			case 'both':
	   			$word->left = $word->left + $vote;
	   			$word->save();
	   			$right_word->right = $word->right + $vote;
	   			$right_word->save();
	   			break;

   			case 'right':
	   			$word->right = $word->right + $vote;
	   			$word->save();
	   			break;

   			case 'left':
	   			$word->left = $word->left + $vote;
	   			$word->save();
	   			break;

	   		default:
	   			break;
   		}

   		return back();
   	}





   	public function save()
   	{
   		$lines = file('/usr/share/dict/words');
   		$count = 0;
   		foreach($lines as $line)
   		{
   			$word = preg_replace('/\s+/', ' ', trim($line));
   			$word = str_replace('\'', '', $word);
   			$word = str_replace('-', '', $word);
   			$word = strtoupper($word);
   			if(strlen($word) == 4)
   			{
   				$new = empty(Word::where('word', $word)->get()->first());
   				if($new)
   				{
	   				Word::create(['word' => $word]);
	   				$count++;
   				}
   			}
   		}

   		/*
   		$myfile = fopen("/usr/share/dict/words", "r") or die("Unable to open file!");
		$string = fread($myfile,filesize("/usr/share/dict/words"));
		while(!feof($myfile)) {
		  $word = fgets($myfile);
		  echo $word;
		}
		fclose($myfile);
   		*/
   		echo 'Added ' . $count . ' words.';
   	}
}
