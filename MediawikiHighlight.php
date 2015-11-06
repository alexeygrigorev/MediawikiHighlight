<?php
/**
 * MediaWiki extension to highlight syntax using highlight.js
 *
 * @ingroup Extensions
 * @author Alexey Grigorev
 */

if (!defined('MEDIAWIKI')) {
    exit;
}

$wgExtensionCredits['parserhook'][] = array(
    'path'        => __FILE__,
    'name'        => 'MediawikiHighlight',
    'version'     => '0.1',
    'author'      => 'Alexey',
    'description' => 'Highlights code',
    'url'         => 'https://github.com/alexeygrigorev/MediawikiHighlight'
);

 
// function setupHeadersForHighlight($out) {
//     $snippet = file_get_contents(dirname(__FILE__) . '/snippet.html', false);
//     $out->addScript(eval($snippet));
// }

$wgResourceModules['ext.MediawikiHighlight.init'] = array(
    'scripts' => 'highlight.pack.js',
    'styles' => 'styles/github.css',
    'position' => 'bottom',
    'localBasePath' => __DIR__,
    'remoteExtPath' => 'MediawikiHighlight',
);

global $wgHooks;
$wgHooks['BeforePageDisplay'][] = 'onBeforePageDisplay';

function onBeforePageDisplay(&$out, &$skin) {
    $out->addModules('ext.MediawikiHighlight.init');
    return true;
}

$wgHooks['BeforePageDisplay'][] = 'ololo';

function ololo(&$out, &$skin) {
    $out->addScript('<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/default.min.css">');
    $out->addScript('<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>');
    return true;
}


?>