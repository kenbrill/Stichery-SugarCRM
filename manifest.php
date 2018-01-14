<?php
$manifest = array(
    'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
    'acceptable_sugar_versions' => array(
        'exact_matches' => array(),
        'regex_matches' => array('(.*?)\.(.*?)\.(.*?)$'),
    ),
    'author' => 'Kenneth Brill (ken.brill@gmail.com)',
    'description' => 'Add Switchery To SugarCRM Blog Post',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Swichery-SugarCRM',
    'published_date' => '2018-01-14 15:03:53',
    'type' => 'module',
    'version' => '1.0'
);

$installdefs =array (
  'id' => 'CUSTOM1515963769',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/files/custom/include/javascript/sugar7/plugins/CssLoader.js',
      'to' => 'custom/include/javascript/sugar7/plugins/CssLoader.js',
      'timestamp' => '2018-01-14 15:01:19',
    ),
    1 => 
    array (
      'from' => '<basepath>/files/custom/clients/base/fields/switchery/dropdown.hbs',
      'to' => 'custom/clients/base/fields/switchery/dropdown.hbs',
      'timestamp' => '2018-01-14 14:32:12',
    ),
    2 => 
    array (
      'from' => '<basepath>/files/custom/Extension/application/Ext/JSGroupings/addCssLoaderPlugin.php',
      'to' => 'custom/Extension/application/Ext/JSGroupings/addCssLoaderPlugin.php',
      'timestamp' => '2018-01-14 14:32:12',
    ),
    3 => 
    array (
      'from' => '<basepath>/files/custom/clients/base/fields/switchery/list.hbs',
      'to' => 'custom/clients/base/fields/switchery/list.hbs',
      'timestamp' => '2018-01-14 14:32:12',
    ),
    4 => 
    array (
      'from' => '<basepath>/files/custom/Extension/application/Ext/JSGroupings/Switchery_grouping.php',
      'to' => 'custom/Extension/application/Ext/JSGroupings/Switchery_grouping.php',
      'timestamp' => '2018-01-14 14:32:12',
    ),
    5 => 
    array (
      'from' => '<basepath>/files/custom/clients/base/fields/switchery/detail.hbs',
      'to' => 'custom/clients/base/fields/switchery/detail.hbs',
      'timestamp' => '2018-01-14 14:32:12',
    ),
    6 => 
    array (
      'from' => '<basepath>/files/custom/clients/base/fields/switchery/edit.hbs',
      'to' => 'custom/clients/base/fields/switchery/edit.hbs',
      'timestamp' => '2018-01-14 14:32:12',
    ),
    7 => 
    array (
      'from' => '<basepath>/files/custom/clients/base/fields/switchery/switchery.js',
      'to' => 'custom/clients/base/fields/switchery/switchery.js',
      'timestamp' => '2018-01-14 14:31:15',
    ),
    9 => 
    array (
      'from' => '<basepath>/files/custom/javascript/Switchery/switchery.min.js',
      'to' => 'custom/javascript/Switchery/switchery.min.js',
      'timestamp' => '2016-11-03 12:46:02',
    ),
    10 => 
    array (
      'from' => '<basepath>/files/custom/javascript/Switchery/switchery.min.css',
      'to' => 'custom/javascript/Switchery/switchery.min.css',
      'timestamp' => '2016-11-03 12:46:02',
    ),
  ),
);