<?php

class Plugin_readingtime extends Plugin {

    var $meta = array(
            'name'              => 'ReadingTime',
            'version'            => '0.1',
            'author'             => 'Thomas Gimesi',
            'author_url'         => 'http://gimesi.com',
    );

	public function index() {
	
	$wpm = 200; // words per minute

	$this->content = Parse::template($this->content, Statamic_View::$_dataStore, 'Statamic_View::callback');
	$word = str_word_count($this->content);
	
	$minutes = floor($word / $wpm);
	$time = $minutes . ' minute' . ($minutes == 1 ? '' : 's') . ' read';

	return $time;   

	}

}