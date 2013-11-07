# Statamic ReadingTime
"ReadingTime" is a [Statamic](http://www.statamic.com) plugin that displays the — [D'oh!](http://www.youtube.com/watch?v=g6GuEswXOXo) — estimated reading time of an article or page, e.g. 1 minute read, 6 minutes read, you get the idea.

## Installation
- Download the zip file and unzip it (or clone the repo) into	`/_add-ons/`.
- Ensure that the folder name is `readingtime` and that `pi.readingtime.php` is in it.

## How to use it
- Insert following code in your template file where you want to display the estimated time:
`{{ readingtime }} {{ content }} {{ /readingtime }}`
- Be happy.

## Options
**Words per Minute**
- `wpm="300"` will set the words per minute to 300
- defining no wpm will default to 200
**Styles**
- `style="minimal"` will return just the number
- `style="medium"` will return `X minute read`
- defining no style will default to `X minute(s)`

## Notes
- According to [Wikipedia](http://en.wikipedia.org/wiki/Words_per_minute) an average person reads prose text at 250 words per minute (wpm) on paper and at 180 wpm on screen, so I chose 200. Change the variable `$wpm` in line 14 if you see the need to.
- The script is primarily intended for my personal use and is provided **"as is"**. I have no plans of making updates on a regular basis. There's no warranty expressed or implied. Use it at your own risk.
- I saw this little feature recently on [Medium](http://www.medium.com) and thought this would be perfect as my first add-on for Statamic. If you have suggestions, corrections, or just want to say hello, please feel free to drop me a line on Twitter ([@gimesi](http://twitter.com/gimesi)).