<?php
class MediawikiHighlight {
    static function loadJS(&$out, &$skin) {
        $dir = dirname(__FILE__) . '/';
        $snippet = file_get_contents($dir . 'snippet.html', false);
        $out->addScript($snippet);
        return true;
    }
}
?>
