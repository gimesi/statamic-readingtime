# Statamic ReadingTime
"ReadingTime" is a [Statamic](http://www.statamic.com) plugin that displays the — [D'oh!](http://www.youtube.com/watch?v=g6GuEswXOXo) — estimated reading time of an article or page, e.g. `1 min read`, `6 minutes`, `4 minutes, 12 seconds`, or just the number.

## Installation
- Download the zip file and unzip it (or clone the repo) into	`/_add-ons/`.
- Ensure that the folder name is `readingtime` and that `pi.readingtime.php` is in it.

## How to use it
- Insert following code in your template file where you want to display the estimated time:
`{{ readingtime content="{ content }" }}`
- Be happy.

## Options

**Words per Minute**
- For example: `wpm="300"` will set the words per minute to 300
- defining no wpm will default to 200

**Format**
-  `format="alpha"` will output an English sentence of the time (which can be further extended by the 'styles' parameter)
- `format="numeric"` will an output a digital timer-esque string (4:30 read) 

**Styles**
- `style="minimal"` will return just the number
- `style="medium"` will return `X min read`
- `style="extended"` will return `X minute(s), X second(s)`
- defining no style will default to `X minute(s)`

**Custom**
- Allows you to put in a custom string of text. Simply place a '#' wherever you want the time to be.
- `custom="# minute read, you jabroni"` will return: '4:30 minute read, you jabroni'

## Notes
- According to [Wikipedia](http://en.wikipedia.org/wiki/Words_per_minute) an average person reads prose text at 250 words per minute (wpm) on paper and at 180 wpm on screen, so I chose 200 as a default. See **Options** to change this setting.
- The script is primarily intended for my personal use and is provided **"as is"**. I have no plans of making updates on a regular basis. There's no warranty expressed or implied. Use it at your own risk.
- I saw this little feature recently on [Medium](http://www.medium.com) and thought this would be perfect as my first add-on for Statamic. If you have suggestions, corrections, or just want to say hello, please feel free to drop me a line on Twitter ([@gimesi](http://twitter.com/gimesi)).
