<?php

class Plugin_readingtime extends Plugin {

    var $meta = array(
            'name'              => 'ReadingTime',
            'version'            => '0.1',
            'author'             => 'Thomas Gimesi',
            'author_url'         => 'http://gimesi.com',
            'contributor'             => 'Nick Snyder',
            'contributor_url'         => 'http://fasterhorses.co'
    );

	public function index() {

	$wpm = $this->fetch_param('wpm', 200, 'is_numeric');
	$style = $this->fetch_param('style');
	
	$this->content = Parse::template($this->content, Statamic_View::$_dataStore, 'Statamic_View::callback');
	$word = str_word_count($this->content);
	
	$minutes = round($word / $wpm);
	$seconds = round($word % $wpm / ($wpm / 60));
	
	if ($style == "medium") {
		$time = $minutes . ' min read';
	}
	elseif ($style == "minimal") {
		$time = $minutes;
	}
	elseif ($style == "extended") {
		$time = $minutes . ' minute' . ($minutes == 1 ? '' : 's') . ', ' . $seconds . ' second' . ($seconds == 1 ? '' : 's');
	}
	else {
		$time = $minutes . ' minute' . ($minutes == 1 ? '' : 's');
	}

	return $time;   

	}

}