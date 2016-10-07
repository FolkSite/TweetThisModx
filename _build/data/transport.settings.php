<?php
/**
 * systemSettings transport file for TweetThisModx extra
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
/* @var xPDOObject[] $systemSettings */


$systemSettings = array();

$systemSettings[1] = $modx->newObject('modSystemSetting');
$systemSettings[1]->fromArray(array (
  'key' => 'tweetthismodx.enabled',
  'name' => 'TweetThisModx Enabled',
  'description' => 'Global Enable & Disable',
  'namespace' => 'tweetthismodx',
  'xtype' => 'combo-boolean',
  'value' => 1,
  'area' => 'tweetthismodx',
), '', true, true);
$systemSettings[2] = $modx->newObject('modSystemSetting');
$systemSettings[2]->fromArray(array (
  'key' => 'tweetthismodx.highlight_class',
  'name' => 'CSS Hightlight Class',
  'description' => 'CSS Class can be overridden when called in Chunks',
  'namespace' => 'tweetthismodx',
  'xtype' => 'textfield',
  'value' => 'ttm_highlight',
  'area' => 'tweetthismodx',
), '', true, true);
$systemSettings[3] = $modx->newObject('modSystemSetting');
$systemSettings[3]->fromArray(array (
  'key' => 'tweetthismodx.link_class',
  'name' => 'CSS Link Class',
  'description' => 'CSS Class can be overridden when called in Chunks',
  'namespace' => 'tweetthismodx',
  'xtype' => 'textfield',
  'value' => 'ttm_link',
  'area' => 'tweetthismodx',
), '', true, true);
return $systemSettings;
