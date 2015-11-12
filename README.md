## MediawikiHighlight

Syntax highlighter for MediaWiki with [highlight.js](https://highlightjs.org/)

It automatically highlights all `<pre>` blocks (note that this is different from the default behavior of highlight.js, which is highlighlihg all `<pre><code>` blocks) 

## Installation

- Go to https://highlightjs.org/download/ and select the installation you want
- `mkdir -p extensions/MediawikiHighlight/ && cd extensions/MediawikiHighlight/`
- Unpack the content to `highlight` (so `highlight.pack.js` is located in extensions/MediawikiHighlight/highlight/highlight.pack.js`)
- `wget https://github.com/alexeygrigorev/MediawikiHighlight/archive/master.zip`
- `unzip master.zip`
- `mv MediawikiHighlight-master/* .`
- `cd ../..`
- `echo 'require_once "$IP/extensions/MediawikiHighlight/MediawikiHighlight.php";' >> LocalSettings.php`

