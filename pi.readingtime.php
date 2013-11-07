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

	$this->content = Parse::template($this->content, Statamic_View::$_dataStore, 'Statamic_View::callback');
	$word = str_word_count($this->content);
	
	$minutes = floor($word / $wpm);
	$time = $minutes . ' minute read';
	
	return $time;   

	}

}