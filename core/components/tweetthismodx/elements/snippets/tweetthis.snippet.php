<?php
/**
* TweetThis snippet for TweetThisModx extra
*
* Copyright 2016 by Daniel Harding hello@stuntrocket.co
* Created on 10-06-2016
*
* TweetThisModx is free software; you can redistribute it and/or modify it under the
* terms of the GNU General Public License as published by the Free Software
* Foundation; either version 2 of the License, or (at your option) any later
* version.
*
* TweetThisModx is distributed in the hope that it will be useful, but WITHOUT ANY
* WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
* A PARTICULAR PURPOSE. See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with
* TweetThisModx; if not, write to the Free Software Foundation, Inc., 59 Temple
* Place, Suite 330, Boston, MA 02111-1307 USA
*
* @package tweetthismodx
*/

/**
* Description
* -----------
* Description for TweetThisModx Snippet
*
* Variables
* ---------
* @var $modx modX
* @var $scriptProperties array
*
* @package tweetthismodx
**/

$output = "";
$data = array();

/* setup default properties */
$tpl  = $modx->getOption('tpl', $scriptProperties, 'TweetThisChunk');
$text  = $modx->getOption('text', $scriptProperties, 'Tweet This Text!');

$enabled = $modx->getOption('tweetthismodx.enabled', null, 'yes');
if(empty($enabled)) {
  return $text;
}

$defaultCorePath = $modx->getOption('core_path').'components/tweetthismodx';
$myCorePath = $modx->getOption('tweetthismodx.core_path',null,$defaultCorePath);

$defaultAssetsPath = $modx->getOption('assets_url').'components/tweetthismodx/';
$myAssetsPath = $modx->getOption('tweetthismodx.assets_url', null, $defaultAssetsPath);

$defaultKlass = $modx->getOption('tweetthismodx.highlight_class', null, 'ttm_highlight');
$klass  = $modx->getOption('class', $scriptProperties, $defaultKlass);

$defaultLinkKlass = $modx->getOption('tweetthismodx.link_class', null, 'ttm_link');
$link_klass  = $modx->getOption('link_class', $scriptProperties, $defaultLinkKlass);

$sn = $_SERVER['SERVER_NAME'];
$ru = $_SERVER['REQUEST_URI'];
$scheme = "http://";
if((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
|| $_SERVER['SERVER_PORT'] == 443) {
  $scheme = "https://";
}

$url = $scheme . $sn . $ru;

$modx->regClientCSS($myAssetsPath.'css/tweetthismodx.css');
$modx->regClientScript($myAssetsPath . 'js/tweetthismodx-min.js');

$data['class'] = $klass;
$data['link_class'] = $link_klass;
$data['text'] = $text;
$data['href'] = "javascript:void(0);";
$data['onclick'] = "return tweetThisModx('$text', '$url')";

return $modx->getChunk($tpl, $data);