<?php

if(function_exists('wfLoadExtension')){
    wfLoadExtension('GC_IA');
    
    $wgMessagesDirs['GC_IA'] = __DIR__ . '/i18n';
    return;
}else{
    die('Error with GC_IA');
}

/*
if(!defined('MEDIAWIKI')){
    die("This is not a valid entry point,");
}

$dir = dirname(__FILE__);
$myResourceTemplate = array(
    'localBasePath' => dirname(__FILE__) . "/resources",
    'remoteExtPath' => 'GC_IA/resources',
    'group' => 'ext.gc_ia',
);

$wgResourceModules['ext.gc_ia'] = $myResourceTemplate + array(
    'scripts' => array(
        "selectize.js",
        "testing.js",
    ),
    'styles' => array(
        "selectize.bootstrap3.css",
    ),
    'dependencies'=> array(
        "jquery.client",
    ),
    'messages' => array(
    )
);
*/