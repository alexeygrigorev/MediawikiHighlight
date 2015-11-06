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

global $wgHooks;
$wgHooks['BeforePageDisplay'][]  = 'setupHeadersForHighlight';
 
function setupHeadersForHighlight($out) {
    $out->addScript('<link rel="stylesheet" type="text/css" href="${wgScriptPath}/extensions/MediawikiHighlight/styles/github.css'.'"></link>\n');
    $out->addScript('<script type="text/javascript" src="${wgScriptPath}/extensions/MediawikiHighlight/highlight.pack.js"></script>\n');
}

?>