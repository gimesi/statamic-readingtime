<?php

class Plugin_readingtime extends Plugin {

    var $meta = array(
            'name'               => 'ReadingTime',
            'version'            => '0.3',
            'author'             => 'Thomas Gimesi',
            'author_url'         => 'http://gimesi.com',
            'contributor'        => 'Nick Snyder',
            'contributor_url'    => 'http://fasterhorses.co'
    );

	public function index() {
		$wpm = $this->fetchParam('wpm', 200, 'is_numeric');
		$style = $this->fetchParam('style');
		$format = $this->fetchParam('format', 'alpha');
		$custom = $this->fetchParam('custom');

		$this->content = $this->fetchParam('content', null , false, false, false);
		$word = str_word_count($this->content);

		$minutes = round($word / $wpm);
		$seconds = round($word % $wpm / ($wpm / 60));

		if (!isset($custom)) {

			if ($format == 'alpha') {
				if ($style == "medium") {
					$time = $minutes . ' min read';
				} elseif ($style == "minimal") {
					$time = $minutes;
				} elseif ($style == "extended") {
					$time = $minutes . ' minute' . ($minutes == 1 ? '' : 's') . ', ' . $seconds . ' second' . ($seconds == 1 ? '' : 's');
				} else {
					$time = $minutes . ' minute' . ($minutes == 1 ? '' : 's');
				}
			} elseif ( $format == 'numeric') {
				$time = "$minutes:$seconds reading time";
			}

		} else {
			$time =	str_replace("#", $minutes.":".$seconds, $custom);
		}
		return $time;
	}
}
