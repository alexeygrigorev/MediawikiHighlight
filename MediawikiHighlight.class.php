<?php

class MediawikiHighlight {

    public static function onBeforePageDisplay(OutputPage &$out, Skin &$skin) {
        global $wgScriptPath;
        $dir = $wgScriptPath . '/extensions/MediawikiHighlight/highlight';
        $out->addScript('<script src="' . $dir . '/highlight.pack.js"></script>');
        $out->addScript('<link rel="stylesheet" href="' . $dir . '/styles/github.css" />');
        $out->addScript("<script type='text/javascript'>$(document).ready(function() {
                             $('pre').each(function(i, block) {
                                 hljs.highlightBlock(block);
                             });
                         });</script>");
        return true;
    }
}

?>
