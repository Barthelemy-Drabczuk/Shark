<?php
/**
 * Created by PhpStorm.
 * User: percevase
 * Date: 11/12/18
 * Time: 19:31
 */

/*test page*/

require_once 'Div.php';
require_once 'Page.php';
require_once 'Script.php';

$page = new Page('page');
$page->start();

$anotherDivBuilder = new \Div\DivBuilder('Salut je suis à l\'intérieur !');
$anotherDivBuilder->title('inside')->id('ociinside')->data('bird', 'duck')->build();
$anotherDiv = new Div($anotherDivBuilder);
$divBuilder = new \Div\DivBuilder('Bonjour !'.$anotherDiv);
$scriptBuilder = new \Script\ScriptBuilder('$(document).isReady(){}');
$script = new Script($scriptBuilder);
$anotherScriptBuilder = new \Script\ScriptBuilder();
$anotherScriptBuilder->src('Script.php')->async()->defer();
$anotherScript = new Script($anotherScriptBuilder);
$yetAnotherScriptBuilder = new \Script\ScriptBuilder();
$yetAnotherScriptBuilder->defer()->async()->charset('UTF-8')->translate('yes')->src('Script.php');
$yetAnoyherScript = new Script($yetAnotherScriptBuilder);
$divBuilder->title('oui')->dir('rtl')->onclick($script)->onpaste($anotherScript);
$div = new Div($divBuilder);

echo $yetAnoyherScript;
echo $div;

$page->end();