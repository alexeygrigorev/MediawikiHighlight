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

$wgResourceModules['ext.MediawikiHighlight'] = array(
    'scripts' => 'highlight/highlight.pack.js',
    'styles' => array('highlight/styles/github.css' ),
    'position' => 'bottom',
    'localBasePath' => dirname(__FILE__) . '/',
    'remoteExtPath' => 'MediawikiHighlight',
);

?>