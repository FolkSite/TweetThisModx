<?php
/**
 * chunks transport file for TweetThisModx extra
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
/* @var xPDOObject[] $chunks */


$chunks = array();

$chunks[1] = $modx->newObject('modChunk');
$chunks[1]->fromArray(array (
  'id' => 1,
  'description' => 'Description for TweetThisModx Chunk',
  'name' => 'TweetThisChunk',
), '', true, true);
$chunks[1]->setContent(file_get_contents($sources['source_core'] . '/elements/chunks/tweetthischunk.chunk.html'));

return $chunks;
