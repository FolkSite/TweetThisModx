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
  'key' => 'tweetthismodx.link_class',
  'value' => 'ttm_link',
  'xtype' => 'textfield',
  'namespace' => 'tweetthismodx',
  'area' => 'area1',
  'name' => 'CSS Link Class',
  'description' => 'CSS Class can be overridden when called in Chunks',
), '', true, true);
$systemSettings[2] = $modx->newObject('modSystemSetting');
$systemSettings[2]->fromArray(array (
  'key' => 'tweetthismodx.enabled',
  'value' => '1',
  'xtype' => 'combo-boolean',
  'namespace' => 'tweetthismodx',
  'area' => 'area1',
  'name' => 'TweetThisModx Enabled',
  'description' => 'Global Enable & Disable',
), '', true, true);
$systemSettings[3] = $modx->newObject('modSystemSetting');
$systemSettings[3]->fromArray(array (
  'key' => 'tweetthismodx.highlight_class',
  'value' => 'ttm_highlight',
  'xtype' => 'textfield',
  'namespace' => 'tweetthismodx',
  'area' => 'area1',
  'name' => 'CSS Hightlight Class',
  'description' => 'CSS Class can be overridden when called in Chunks',
), '', true, true);
return $systemSettings;
