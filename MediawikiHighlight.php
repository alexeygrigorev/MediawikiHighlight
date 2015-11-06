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

// global $wgHooks;
// $wgHooks['BeforePageDisplay'][]  = 'setupHeadersForHighlight';
 
// function setupHeadersForHighlight($out) {
//     $snippet = file_get_contents(dirname(__FILE__) . '/snippet.html', false);
//     $out->addScript(eval($snippet));
// }

$wgResourceModules['ext.MediawikiHighlight'] = array(
    'scripts' => 'highlight.pack.js',
    'styles' => 'styles/github.css',
    'position' => 'bottom',
    'localBasePath' => __DIR__,
    'remoteExtPath' => 'MediawikiHighlight',
);

?>