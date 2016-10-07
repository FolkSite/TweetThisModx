<?php
/**
 * snippets transport file for TweetThisModx extra
 *
 * Copyright 2016 by Daniel Harding hello@stuntrocket.co
 * Created on 10-07-2016
 *
 * @package tweetthismodx
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $snippets */


$snippets = array();

$snippets[1] = $modx->newObject('modSnippet');
$snippets[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'name' => 'TweetThis',
  'description' => 'Description for TweetThisModx Snippet',
  'properties' => 
  array (
  ),
), '', true, true);
$snippets[1]->setContent(file_get_contents(MODX_BASE_PATH . 'assets/mycomponents/tweetthismodx/core/components/tweetthismodx/elements/snippets/tweetthis.snippet.php'));

return $snippets;
